<?php

namespace App\Http\Livewire\Students;

use Livewire\Component;
use Log;
use App\Models\Student;
use App\Models\School;
use App\Models\StudentVerification;
use Livewire\WithPagination;

class Index extends Component
{	

	use WithPagination;

    public $objects = [];
    public $schools = []; 

    public $paginator = [];

    public $currentStudentID = "";

    public $page = 1;

    public $items_per_page = 5;

    public $loading_message = "";

    public $listeners = [
        "load_list" => "loadList"
    ];

    public $isOpen = 0;

    public $filter = [
        "search" => "",
        "school" => "",
    ];

    protected $updatesQueryString = ['page'];
    
    public function hydrate(){
        $this->loadList();
    }

    public function loadList(){
        $this->loading_message = "Loading Request...";

        $query = [];

        if(!empty($this->filter["status"])){
            $query["status"] = $this->filter["status"];
        }

        //  // Filter by School ID
        // if(!empty($this->filter["school"])){
        //     $query["school_id"] = $this->filter["school"];
        // }

        $objects = Student::where($query);


        // Search Student name -- from users table
        if(!empty($this->filter["search"])){
            $filter = $this->filter;
            $objects = $objects->whereHas('user', function($q){
               $q->where('name', 'LIKE', $this->filter['search'] . '%');
            });
        }

         // School name from schools table
        if(!empty($this->filter["school"])){
            $filter = $this->filter;
            $objects = $objects->whereHas('school', function($q){
               $q->where('id', $this->filter['school'] );
            });
        }
        
        // Ordering
        if(!empty($this->filter["order_field"])){
            $order_type = (!empty($this->filter["order_type"]))? $this->filter["order_type"]: 'ASC';
            $objects = $objects->orderBy($this->filter["order_field"], $order_type);
        }

        // Paginating
        $objects = $objects->paginate($this->items_per_page);


        $this->paginator = $objects->toArray();
        $this->objects = $objects->items();
        $this->schools = School::all();
        
    }

    // Pagination Method
    public function applyPagination($action, $value, $options=[]){
        
        if( $action == "previous_page" && $this->page > 1){
            $this->page-=1;
        }

        if( $action == "next_page" ){
            $this->page+=1;
        }

        if( $action == "page" ){
            $this->page=$value;
        }

        $this->loadList();
    }

    public function render()
    {    
        $this->loadList();
        return view('livewire.students.index');
    }


    public function openModal(){
        $this->isOpen = 1;
    }

    public function closeModal(){
        $this->isOpen = 0;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openVerify($id){
        $verification = StudentVerification::where('student_id', $id)->first();
        if($verification){
             $this->currentStudentID = $id;
        }else{
            StudentVerification::create([
                'student_id' => $id,
                'user_id' => Student::find($id)->user_id,
                'bvn_verify' => false,
                'nin_verify'  => false, 
                'school_id_verify' => false,
                'admission_letter_verify' => false,
                'transcript_letter_verify' => false
            ]);
        }
        $this->openModal();
    }

    public function verifyBVN(){
        $verification = StudentVerification::where('student_id', $this->currentStudentID )->first();
        if($verification){
            if($verification->bvn === false){
                $verification->bvn = true;
                $verification->save;
            }else {
               $verification->bvn = false;
                $verification->save;
            }
       }
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id){
        Acronym::find($id)->delete();
        session()->flash('message', 'Acronym Deleted Successfully');
    }
}

