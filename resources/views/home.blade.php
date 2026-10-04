@extends('layout.master')

@section('title', "Home page")
    
@section('contenuto')
    
<h1>Lista dei film</h1>


<div class="row">

     @foreach ($movies as $movie)

        <div class="col-4">
            <div class="card">
                <div class="card-body">

                    <h3 class="card-title">Title: {{ $movie['title'] }}</h3>
                    <p class="card-text">Text {{ $movie['original_title'] }}</p>
                    <p class="card-text">Text {{ $movie['nationality'] }}</p>
                    <p class="card-text">Text {{ $movie['date'] }}</p>
                    <p class="card-text">Text {{ $movie['vote'] }}</p>

                </div>
            </div>
        </div>
        
        
    @endforeach


</div>




@endsection