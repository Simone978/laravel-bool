<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
     private $students;
     public function __construct()
     {
        $this->students = [
            [
                'poster' => 'https://www.boolean.careers/images/students/biagini.png',
                'nome' => 'alessandro Biagini',
                'eta' => '25 anni',
                'azienda' => 'DISC SPA',
                'ruolo' => 'web developer',
                'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.',
                'genere' => 'm',
                'slug' => 'alessandro',
                'etal' => '12'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/poggini.png',
                'nome' => 'Paola Poggini',
                'eta' => '24 anni',
                'azienda' => 'Prima Assicurazioni ',
                'ruolo' => 'junior software engineer',
                'descrizione' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.',
                'genere' => 'f',
                'slug' => 'paola',
                'etal' => '13'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/masetti.png',
                'nome' => 'Loana Masetti',
                'eta' => '29 anni',
                'azienda' => 'Zen Agency',
                'ruolo' => 'web developer',
                'descrizione' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.',
                'genere' => 'f',
                'slug' => 'loana',
                'etal' => '14'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/patruno.png',
                'nome' => 'Davide Patruno',
                'eta' => '29 anni',
                'azienda' => 'ArmadioVerde',
                'ruolo' => 'web developer',
                'descrizione' => 'Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End.',
                'genere' => 'm',
                'slug' => 'davide',
                'etal' => '15'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/castellani.png',
                'nome' => 'Tommaso Castellani',
                'eta' => '30 anni',
                'azienda' => 'Pearch Digital',
                'ruolo' => 'data scientist',
                'descrizione' => 'Un passato da giocatore professionista di poker e una laurea in ingegneria gestionale alle spalle. Tommaso ha tramutato la sua passione per i numeri in un lavoro diventando data scientist a Dublino.',
                'genere' => 'm',
                'slug' => 'tommaso',
                'etal' => '16'
            ]
        ];
    } 

    public function getAll(){
        $students = $this->students;
        return response()->json($students);
    }

    public function getAge($eta){
        $students = $this->students;
         $studentsAge = [];
         foreach ($students as $student) {
               if($student['eta'] == $eta) {
                   $studentsAge[] = $student;
               }
        } 
        return response()->json($studentsAge);
    }

    public function getGender($gender){
        $students = $this->students;
         $studentsGender = [];
         foreach ($students as $student) {
               if($student['genere'] == $gender) {
                   $studentsGender[] = $student;
               }
        } 
        return response()->json($studentsGender);
    }

    //  public function filter(Request $request){
    //      $students = $this->students;

    //      $data = $request->all();
    //      dd($data);
         
    //      return response()->json($studentsGender);
    //  }


    public function filter(Request $request)
    {
        $students = $this->students;
        $type = [
            'eta',
            'nome',
            'genere',
        ];

        $data = $request->All();
        
        foreach ($data as $key => $dato) {
            if(!in_array($key,$type)){
                unset($data[$key]);
            }
        }
        
        foreach ($data as $key => $value) {
            if(array_key_first($data)==$key){
                $studentsFiltered = $this->filterFor($key,$value,$students);
            }else{
                $studentsFiltered = $this->filterFor($key,$value,$studentsFiltered);
            }
            
        }
        return response()->json($studentsFiltered);
    }

    private function filterFor($type, $value, $array)
    {
        $filtered = [];
        foreach ($array as $element) {
            if($element[$type] == $value){
                $filtered[] = $element;
            }
        }
        return $filtered;
    }
}

