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
                    <div>{{$comic['series']}}</div>
                </div>
            @endforeach
            </div>
        </div>  
    </section>
    <section class="services-section">
        <div class="my-container">
            <div class="services">
                <div class="service first">
                    <img class="item" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                    <h4>DIGITAL COMICS</h4>
                </div>
                <div class="service">
                    <img class="item" src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                    <h4>DC MERCHANDISE</h4>
                </div>
                <div class="service">
                    <img class="item" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                    <h4>SUBSCRIPTIONS</h4>
                </div>
                <div class="service">
                    <img class="item" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                    <h4>COMIC SHOP LOCATOR</h4>
                </div>
                <div class="service">
                    <img class="item" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                    <h4>DC POWER VISA</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
