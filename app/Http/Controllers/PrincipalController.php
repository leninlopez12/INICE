<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        return view('principal.index');
    }
    public function nosotros(){
        return view('principal.nosotros');
    }
    public function privacidad(){
        return view('principal.privacidad');
    }
    public function reclamaciones(){
        return view('principal.reclamaciones');
    }
    public function cursos(){
        return view('principal.cursos');
    }



    public function cienciadedatos(){
        return view('principal.cursos.cienciadedatos');
    }

}
