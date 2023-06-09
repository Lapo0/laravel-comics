@extends('layouts.app')

@section('content')

    <div>
        <div class="container">
            @dump($comics)

            <div class="row">
                @foreach($comics as $comic)

                    <div class="col-3">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h3>
                            {{ $comic['title'] }}
                        </h3>
                    </div>

                @endforeach
            </div>
        </div>
        
    </div>

@endsection