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
            'img'=> '/media/vlahovic.webp'
        ], 
        [
            'name' => 'Koopmeiners',
            'description' => 'Una volta sapeva giocare a pallone' ,
            'ruolo' => 'CEN',
            'id' => 2,
            'img'=> '/media/koop.jpg'
        ], 
        [
            'name' => 'Kalulu',
            'description' => 'Pierino nel cuore' ,
            'ruolo' => 'DIF',
            'id' => 3,
            'img'=> '/media/kalulu.webp'
        ]


        ];

    return view('chiSiamo', ['players'=> $players]);
});