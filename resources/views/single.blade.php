@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Movies List</h1>
        {{-- <div class="row row-cols-1 row-cols-md-3 g-3">
                @foreach ($films as $film)
                    <div class="card">
                        <img class="card-img-top" width=422 height=632 src={{ $film->src }} alt=''>
                        <div class="card-body">
                            {{ $film->title }}
                        </div>
                    </div>
                @endforeach
            </div> --}}
    </div>
@endsection
