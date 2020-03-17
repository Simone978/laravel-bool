@extends('layouts.homeLayout')

@section('main')  
        <img src="{{$student['poster']}}" alt="{{$student['nome']}}">
        <h3>{{$student['nome']}} ({{$student['eta']}})</h3>
        <h3>Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}</h3>
        <p>{{$student['descrizione']}}</p>
@endsection