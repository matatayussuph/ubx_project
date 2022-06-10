<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;

class ViewCargoController extends Controller
{
    public function view(){
        $cargos = Cargo::all();
           return view('viewfile',['cargos'=>$cargos]);
            }
}
