<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Imports\CargoImport;

class CargoController extends Controller
{
        public function create(){
            // $cargo = Cargo::all();
            return view('home');
        }
        public function view(){
            $cargos = Cargo::all();
               return view('viewfile',['cargos'=>$cargos]);
        }

        public function cargoData(){
            $cargos = Cargo::all();
               return  $cargos;
        }
    

        public function import(Request $request){
            $file = $request->file('cargo_file');
            if ($file) {
            $filename =  $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
           //Where uploaded file will be stored on the server 
            $location = public_path().'/import'; //Created an "import" folder for that

            if(!file_exists($location)){
                File::makeDirectory($location,0777,true,true);
            }
            // Upload file
            $file->move($location, $filename);

            $uploadedFile = $location.'/'.$filename;


            \Excel::import(new CargoImport,$uploadedFile);

        }
    
    }
}
