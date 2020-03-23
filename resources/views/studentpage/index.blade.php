@extends('layouts.homeLayout')

@section('main')

   <div class="form-group">
      <input type="text" name="nome" id="nome" placeholder="nome" class="form-control">
      <input type="text" name="eta" id="eta" placeholder="eta" class="form-control">
      <input type="text" name="azienda" id="azienda" placeholder="azienda" class="form-control">
      <input type="text" name="ruolo" id="ruolo" placeholder="ruolo" class="form-control">
      <select name="genere" id="genere" placeholder="genere" class="form-control">
         <option value="">genere</option>
         <option value="m">maschio</option>
         <option value="f">femmina</option>
      </select>
      <input type="submit" name="cerca" id="cerca" value="cerca">
   </div>

   <div class="card_wrap">
      @foreach ($students as $key => $student)
      <div class="card">
         <div class="card_top">
            <img src="{{$student['poster']}}" alt="{{$student['nome']}}">
            <div class="card_top_info">
               <h3><a href="{{route('studentpage.show',['slug'=> $student['slug']])}}">{{$student['nome']}} ({{$student['azienda']}})</a></h3>
               <h3>Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}</h3>
            </div>
            
         </div>
        <p>{{$student['descrizione']}}</p>
      </div>    
   @endforeach
@endsection
   </div>
   @section('scripts')
<script src="{{asset("js/app.js")}}"></script>
   @endsection

   