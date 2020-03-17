@extends('layouts.homeLayout')

{{-- @dd($students) --}}

@section('main')
   @foreach ($students as $student)
        <img src="{{$student['poster']}}" alt="{{$student['nome']}}">
       <h3>{{$student['nome']}} ({{$student['eta']}})</h3>
       <h3>Assunto da {{$student['azienda']}} come {{$student['ruolo']}}</h3>
       <p>{{$student['descrizione']}}</p>
   @endforeach
@endsection