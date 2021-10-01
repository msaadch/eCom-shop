@extends('master') 
@section('content')
<div class="row row justify-content-evenly">
    <div class="col">
        <div class="text-center">
            <h4 class='my-4'>Your Cart Items</h4>
                <div class="">
                    @foreach ($products as $item)
                    <div class="cart-items row justify-content-center divider">
                        <div class="col-sm-3">
                            <a class="link-text" href="detail/{{$item->id}}">
                                <img class="cart-img" src="{{$item->gallery}}" alt="...">
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <div class="">
                                <h5 class="">{{$item->name}}</h5>
                                <p class="">{{$item->description}}</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <a class="btn btn-danger" href="/removecart/{{$item->cart_id}}">Remove From Cart</a>
                        </div>
                    
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
