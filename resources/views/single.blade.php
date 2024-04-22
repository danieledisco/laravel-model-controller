@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Movies List</h1>
        <div class="card">
            <img class="card-img-top" src={{ $film->src }} alt=''>
            <div class="card-body">
                {{ $film->title }}
            </div>
        </div>
    </div>
@endsection
