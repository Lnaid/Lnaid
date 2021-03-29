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
    public $currentStudentVerification = "";
    public $currentStudent = "";


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
        if(!$verification){
            $verification = StudentVerification::create([
                'student_id' => $id,
                'user_id' => Student::find($id)->user_id,
            ]);
        }
       
        $this->currentStudent = Student::find($id)->first();
        $this->currentStudentVerification = $verification;
        $this->openModal();
    }

    public function verifyBVN(){
        if($this->currentStudentVerification->bvn_verify == false){
            $this->currentStudentVerification->bvn_verify = true;
            $this->currentStudentVerification->save();
            session()->flash('success','BVN verified successfully'); 
        }else {
            $this->currentStudentVerification->bvn_verify = false;
            $this->currentStudentVerification->save();
             session()->flash('warning','BVN set to unverified'); 
        }
    }

     public function verifyNIN(){
        if($this->currentStudentVerification->nin_verify == false){
            $this->currentStudentVerification->nin_verify = true;
            $this->currentStudentVerification->save();
            session()->flash('success','NIN verified successfully'); 
        }else {
            $this->currentStudentVerification->nin_verify = false;
            $this->currentStudentVerification->save();
            session()->flash('warning','NIN set to unverified'); 
        }
    }

    public function verifySchool(){
        if($this->currentStudentVerification->school_verify == false){
            $this->currentStudentVerification->school_verify = true;
            $this->currentStudentVerification->save();
            session()->flash('success','School verified successfully'); 
        }else {
            $this->currentStudentVerification->school_verify = false;
            $this->currentStudentVerification->save();
            session()->flash('warning','School set to unverified'); 
        }
    }

    public function verifyBankDetails(){
        if($this->currentStudentVerification->bank_details_verify == false){
            $this->currentStudentVerification->bank_details_verify = true;
            $this->currentStudentVerification->save();
            session()->flash('success','Bank Details verified successfully'); 

        }else {
            $this->currentStudentVerification->bank_details_verify = false;
            $this->currentStudentVerification->save();
            session()->flash('warning','Bank Details set to unverified'); 
        }
    }

    public function verifyAdmission(){
        if($this->currentStudentVerification->admission_letter_verify == false){
            $this->currentStudentVerification->admission_letter_verify = true;
            $this->currentStudentVerification->save();
            session()->flash('success','Admission status verified successfully'); 

        }else {
            $this->currentStudentVerification->admission_letter_verify = false;
            $this->currentStudentVerification->save();
            session()->flash('warning','Admission status  set unverified'); 

        }
    }

    public function verifyTranscript(){
        if($this->currentStudentVerification->transcript_letter_verify == false){
            $this->currentStudentVerification->transcript_letter_verify = true;
            $this->currentStudentVerification->save();
            session()->flash('success','Transcript set to  verified'); 

        }else {
            $this->currentStudentVerification->transcript_letter_verify = false;
            $this->currentStudentVerification->save();
            session()->flash('warning','Transcript set to unverified'); 

        }
    }

}

