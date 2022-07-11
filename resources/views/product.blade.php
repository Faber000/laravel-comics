@extends('layouts.base')

@section('head-script')
@endsection

@section('page-title')
    {{$prodotto['title']}}
@endsection

@section('page-content')
    <div class="my-container">
        <h1>{{$prodotto['title']}}</h1>
        <img src="{{$prodotto['thumb']}}" alt="{{$prodotto['title']}}">
        <p>{{$prodotto['description']}}</p>
    </div>
@endsection