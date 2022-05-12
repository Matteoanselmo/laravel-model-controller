@extends('layouts.main')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>The best movies in our DB: </h1>
                </div>
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card mb-3 p-3 text-dark" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$movie->title}}</h5>
                                <h6 class="card-subtitle mb-2 ">{{$movie->original_title}}</h6>
                                <p class="card-text">Nationality: {{$movie->nationality}}</p>
                                <a href="#" class="card-link ">{{$movie->date}}</a>
                                <a href="#" class="card-link text-danger">{{$movie->vote}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
