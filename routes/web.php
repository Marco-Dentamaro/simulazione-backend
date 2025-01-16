<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $title = "La Juventus di Thiago Motta";

    return view('welcome', ['title'=> $title]);
});


Route::get('/chi-siamo', function () {

    $players = [

        [
            'name' => 'Vlahovic',
            'description' => 'Non la mette in porta nemmeno con le mani' ,
            'ruolo' => 'ATT',
            'id' => 1,
            'img'=> '/media/dusanvla.png'
        ], 
        [
            'name' => 'Koopmeiners',
            'description' => 'Una volta sapeva giocare a pallone' ,
            'ruolo' => 'CEN',
            'id' => 2,
            'img'=> '/media/teun.png'
        ], 
        [
            'name' => 'Kalulu',
            'description' => 'Pierino nel cuore' ,
            'ruolo' => 'DIF',
            'id' => 3,
            'img'=> '/media/pierrekalulu.png'
        ]


        ];

    return view('chiSiamo', ['players'=> $players]);
});

Route::get('/sala-trofei', function () {

    $trofei = [

        [
            'name' => 'scudetto',
            'numero' => 36 ,
            'id' => 1,
            'img'=> '/media/Scudetto.png'
        ], 
        [
            'name' => 'supercoppa',
            'numero' => 9 ,
            'id' => 2,
            'img'=> '/media/Supercoppa_Italiana.png'
        ], 
        [
            'name' => 'champions',
            'numero' => 2 ,
            'id' => 3,
            'img'=> '/media/champions.png'
        ],
        [
            'name' => 'uefa',
            'numero' => 3 ,
            'id' => 4,
            'img'=> '/media/Coppauefa.png'
        ],
        [
            'name' => 'coppaitalia',
            'numero' => 15 ,
            'id' => 5,
            'img'=> '/media/coppaitalia.png'
        ],


        ];

    return view('salaTrofei', ['trofei'=> $trofei]);
});