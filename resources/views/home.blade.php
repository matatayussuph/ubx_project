@extends('layouts.master')
 
@section('title', 'Page Title')
@section('content')
{!! Form::open(['url' => '/file/import', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="container" style="align:center">
        <div class="row ">
            <div class="col-md-8">
                <div class="input-group mb-3">
                        <input type="file" class="form-control" name="cargo_file" accept=".xlsx,.xls,.csv" placeholder="select your excel file" aria-label="select your excel file"  required>
                    </div>  
            </div>
            <div class="col-md-4">
            <button type="submit" class="btn btn-success" >Upload</button>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                <a href="{{route('cargo.view')}}" class=" data btn btn-success">View Data</a>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@endsection
      