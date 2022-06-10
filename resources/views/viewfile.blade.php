@extends('layouts.master')
 
@section('title', 'Page Title')
@section('content')
<table class="table" style="margin-top:20px">
  <thead style="background-color:green">
    <tr>
      <th scope="col">cargo_no</th>
      <th scope="col">cargo_type</th>
      <th scope="col">weight</th>
      <th scope="col">cargo_size</th>
      <th scope="col">remarks</th>
      <th scope="col">wharfage</th>
      <th scope="col">storage</th>
      <th scope="col">penalty</th>
      <th scope="col">electricity</th>
      <th scope="col">destuffing</th>
      <th scope="col">lifting</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cargos as $cargo)
    <tr>
      <td>{{ $cargo->cargo_no }}</td>
      <td>{{ $cargo->cargo_type }}</td>
      <td>{{ $cargo->weight }}</td>
      <td>{{ $cargo->cargo_size }}</td>
      <td>{{ $cargo->remarks }}</td>
      <td>{{ $cargo->wharfage }}</td>
      <td>{{ $cargo->storage }}</td>
      <td>{{ $cargo->penalty }}</td>
      <td>{{ $cargo->electricity }}</td>
      <td>{{ $cargo->destuffing }}</td>
      <td>{{ $cargo->lifting}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection