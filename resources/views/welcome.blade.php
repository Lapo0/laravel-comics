@extends('layouts.app')

@section('content')

    <div>
        <div class="container">
            <h1>
                MAIN
            </h1>
        </div>
        <div class="container">
            @dump($comics)
        </div>
        
    </div>

@endsection