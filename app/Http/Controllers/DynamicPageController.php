<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    private $students;
    private $genders;

      public function __construct(){
        $this->students = config('students.students');
        $this->genders = config('students.genders');
        //dd($this->genders);
           
    
      }
    //  public function index()
    //  {
        
    //     //  $students = $this->data['students'];
    //     //  dd($students);
    //      return view('studentpage.index', $data);
    //  }

    //  public function show($id)
    //  {
    //      if(!array_key_exists( $id , $this->students )){
    //         abort('404');
    //      }
    //      $student = $this->students[$id];
    //      return view('studentpage.show', $students[$id]);
    //  }

    public function index(){
        $data = [
            'students'=> $this->students,
            'gender'=> $this->genders 
        ];
        return view('studentpage.index', $data);
    }

    public function show($slug= null)
    {
        $search = false;
        $thisStudente = [];
        foreach ($this->students as $key => $studente) {
            if ($slug == $studente['slug']){
                $thisStudente = $studente;
                $search = true;
            }
        }
        if($search){
            return view('studentpage.show', ['student' => $thisStudente]);
        } else {
            abort('404');
        }
       
    }

   
}
