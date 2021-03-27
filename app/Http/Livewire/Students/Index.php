<?php

namespace App\Http\Livewire\Students;

use Livewire\Component;
use Log;
use App\Models\Student;
use App\Models\School;
use Livewire\WithPagination;

class Index extends Component
{	

	use WithPagination;

    public $objects = [];
    public $schools = []; 

    public $paginator = [];

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

    public function resetInputFields(){
        $this->title = '';
        $this->description = '';
        $this->privacy = '';
        $this->status = '';
        $this->is_published = '';
        $this->won_by = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
   
        Acronym::updateOrCreate(['id' => $this->acronym_id], [
            'title' => $this->title,
            'description' => $this->description,
            'created_by' => auth()->user()->id
        ]);
  
        session()->flash('message', 
        $this->acronym_id ? 'Acronym Updated Successfully.' : 'Acronym Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id){
        $acronym = Acronym::findOrFail($id);
        $this->acronym_id = $id;
        $this->title = $acronym->title;
        $this->description = $acronym->description;

        $this->openModal();
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

