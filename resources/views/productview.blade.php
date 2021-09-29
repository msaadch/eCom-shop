@extends('master') 
@section('content')
<div class="cust-prod">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->

        <div class="carousel-inner py-5">
            @foreach ($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}} text-center">
            <a href="detail/{{$item['id']}}">
                <img class="slider-img" src="{{$item['gallery']}}" alt="...">
                <div class="carousel-caption slider-txt m-auto">
                    <h5 class="text-info fw-bold">{{$item['name']}}</h5>
                    <p class="text-danger fw-bold">{{$item['description']}}</p>
                </div>
            </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>   
    
    <div class="div-trending text-center">
        <h2>Trending Products</h2>
        <div class="d-flex flex-wrap justify-content-evenly">
            @foreach ($products as $item)
            <div class="trend-items">
            <a class="link-text" href="detail/{{$item['id']}}">
                <img class="trend-img" src="{{$item['gallery']}}" alt="...">
                <div class="">
                    <h6 class="">{{$item['name']}}</h6>
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
