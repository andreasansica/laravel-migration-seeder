@extends('layout.main-layout')

@section('content')
  <h1>
    Name: {{$brand -> name}} <br>
    Logo: {{$brand -> logo}} <br>
    N° uffici: {{$brand -> n_offices}}
  </h1>

@endsection
