@extends('layout.main-layout')

@section('content')
  <h1>
    Name: {{$employee -> name}} <br>
    Lastname: {{$employee -> lastname}} <br>
    Date of hiring: {{$employee -> date_of_hiring}}
  </h1>

@endsection
