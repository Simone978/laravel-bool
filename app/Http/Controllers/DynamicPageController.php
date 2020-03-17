<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function students()
    {
        $studenti = [
            [
                'poster' => 'https://www.boolean.careers/images/students/biagini.png',
                'nome' => 'Alessandro Biagini',
                'eta' => '25 anni',
                'azienda' => 'DISC SPA',
                'ruolo' => 'web developer',
                'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/poggini.png',
                'nome' => 'Paola Poggini',
                'eta' => '24 anni',
                'azienda' => 'Prima Assicurazioni ',
                'ruolo' => 'junior software engineer',
                'descrizione' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.'
            ],
            [
                'poster' => 'https://www.boolean.careers/images/students/masetti.png',
                'nome' => 'Loana Masetti',
                'eta' => '36 anni',
                'azienda' => 'Zen Agency',
                'ruolo' => 'web developer',
                'descrizione' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.'
            ]
        ];

        return view('home', compact('studenti'));
    }
}
