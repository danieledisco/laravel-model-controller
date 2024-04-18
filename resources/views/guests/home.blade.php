@extends('layouts.app')

@section('content')
    <main>

        <div class="container">
            <h1>Movies List</h1>
            @foreach ($films as $film)
                <div class="filmCard">
                    <div class="title">
                        Title: {{ $film['title'] }}
                    </div>
                    <div class="otitle">
                        Original title: {{ $film['original_title'] }}
                    </div>
                    <div class="nat">
                        Nationality: {{ $film['nationality'] }}
                    </div>
                    <div class="datProd">
                        Date: {{ $film['date'] }}
                    </div>
                    <div class="rate">
                        Vote: {{ $film['vote'] }}
                    </div>
                </div>
            @endforeach
        </div>



    </main>
@endsection
