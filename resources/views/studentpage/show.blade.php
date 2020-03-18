@extends('layouts.homeLayout')

@section('main')  
<div class="card_wrap">
<div class="card">
        <div class="card_top">
        <img src="{{$student['poster']}}" alt="{{$student['nome']}}">
        <div class="card_top_info">
                <h3>{{$student['nome']}} ({{$student['eta']}})</h3>
                <h3>Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}</h3>
        </div>
        
        </div>
        <p>{{$student['descrizione']}}</p>
</div>    
@endsection