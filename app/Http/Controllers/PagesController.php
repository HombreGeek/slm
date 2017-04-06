<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

      public function about(){
        return view('pages.about');
    }

     public function services(){
        return view('pages.services');
    }

     public function aceroFigurado(){
        return view('pages.aceroFigurado');
    }

    public function maquinariaEquipos(){
        return view('pages.maquinariaEquipos');
    }
    
    public function concreto(){
        return view('pages.concreto');
    }

    public function materialesConstru(){
        return view('pages.materialesConstru');
    }

    public function allProjects(){
        return view('pages.allProjects');
    }

    public function admin(){

        return view('admin.index');

    }

   

    
}
