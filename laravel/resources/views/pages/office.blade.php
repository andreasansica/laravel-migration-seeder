@extends('layout.main-layout')

@section('content')
  <h1>
    Name: {{$office -> name}} <br>
    Address: {{$office -> address}} <br>
    N° Employees: {{$office -> n_employees}}
  </h1>

@endsection
