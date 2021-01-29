@extends('layout.main-layout')

@section('content')
  <h1>Offices</h1>
  <ul>
    @foreach ($offices as $office)
      <li>
        <a href="{{ route('office-show', $office -> id)}}">
          {{$office -> name}}
        </a>
      </li>

    @endforeach
  </ul>
@endsection
