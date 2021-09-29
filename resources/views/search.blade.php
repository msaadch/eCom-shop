@extends('master') 
@section('content')
<div class="row row justify-content-evenly">
    <div class="col-2">
        <a href="#">Filter Products</a>
    </div>

    <div class="col-10">
        <div class="text-center">
            <h4 class='my-3'>Search Result</h4>
                <div class="d-flex flex-wrap justify-content-evenly">
                    @foreach ($products as $item)
                    <div class="search-items">
                    <a class="link-text" href="detail/{{$item['id']}}">
                        <img class="search-img" src="{{$item['gallery']}}" alt="...">
                        <div class="search-text">
                            <h4 class="">{{$item['name']}}</h4>
                            <h6 class="">{{$item['description']}}</h6>
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
