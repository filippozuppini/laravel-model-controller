@extends('layout.master')

@section('title', "Home page")
    
@section('contenuto')
    
<h1>Lista dei film</h1>


<div class="row">

     @foreach ($movies as $movie)

        <div class="col-4">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title"><b>Titolo:</b> {{ $movie['title'] }}</h4>
                    <p class="card-text"><b>Titolo originale:</b> {{ $movie['original_title'] }}</p>
                    <p class="card-text"><b>Nazionalitá:</b> {{ $movie['nationality'] }}</p>
                    <p class="card-text"><b>Data uscita:</b> {{ $movie['date'] }}</p>
                    <p class="card-text"><b>Voto:</b>  {{ $movie['vote'] }}</p>

                </div>
            </div>
        </div>
        
        
    @endforeach


</div>




@endsection