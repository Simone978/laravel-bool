<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    //private $students;

      public function __construct(){
        // $this -> AllStudents();
      }
    //  public function index()
    //  {
        
    //     //  $students = $this->data['students'];
    //     //  dd($students);
    //      return view('studentpage.index', $data);
    //  }

     public function show($id)
     {
         if(!array_key_exists( $id , $data )){
            abort('404');
         }
         $student = $this->students[$id];
         return view('studentpage.show', $data);
     }

    public function index(){
        $data = [
            'students' =>[
            [
                'poster' => 'https://www.boolean.careers/images/students/biagini.png',
                'nome' => 'Alessandro Biagini',
                'eta' => '25 anni',
                'azienda' => 'DISC SPA',
                'ruolo' => 'web developer',
                'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.',
                'genere' => 'm'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/poggini.png',
                'nome' => 'Paola Poggini',
                'eta' => '24 anni',
                'azienda' => 'Prima Assicurazioni ',
                'ruolo' => 'junior software engineer',
                'descrizione' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.',
                'genere' => 'f'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/masetti.png',
                'nome' => 'Loana Masetti',
                'eta' => '36 anni',
                'azienda' => 'Zen Agency',
                'ruolo' => 'web developer',
                'descrizione' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.',
                'genere' => 'f'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/patruno.png',
                'nome' => 'Davide Patruno',
                'eta' => '29 anni',
                'azienda' => 'ArmadioVerde',
                'ruolo' => 'web developer',
                'descrizione' => 'Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End.',
                'genere' => 'm'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/castellani.png',
                'nome' => 'Tommaso Castellani',
                'eta' => '30 anni',
                'azienda' => 'Pearch Digital',
                'ruolo' => 'data scientist',
                'descrizione' => 'Un passato da giocatore professionista di poker e una laurea in ingegneria gestionale alle spalle. Tommaso ha tramutato la sua passione per i numeri in un lavoro diventando data scientist a Dublino.',
                'genere' => 'm'
            ]
            ],
            'gender'=> [
                'm',
                'f'

            ]
    
        ];
        return view('studentpage.index', $data);
    }

   
}
