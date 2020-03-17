@extends('layouts.homeLayout')

@section('main')

   @foreach ($students as $key => $student)
        <img src="{{$student['poster']}}" alt="{{$student['nome']}}">
        <h3><a href="{{route('studentpage.show',['id'=> $key])}}">{{$student['nome']}} ({{$student['eta']}})</a></h3>
        <h3>Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}</h3>
        <p>{{$student['descrizione']}}</p>
   @endforeach
@endsection