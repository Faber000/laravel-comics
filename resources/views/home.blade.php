@extends('layouts.base')

@section('page-title')
    Homepage
@endsection

@section('page-content')
    <section class="current-series-section">
        <div class="my-container">
            <div class="comics">
            @foreach ($comics as $comic)
                <div class="comic">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
            @endforeach
            </div>
        </div>  
    </section>
@endsection
