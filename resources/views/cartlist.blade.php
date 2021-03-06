@extends('master') 
@section('content')
<div class="row row justify-content-evenly">
    <div class="col">
        <div class="text-center">
            <h2 class='my-4'>Your Cart Items</h2>
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
            <div class="container w-25 my-3 p-3 border border-success">
                <div class="col"><h4>Place Your Order Now </h4></div>
                <div class="col"><a class="btn btn-success" href="/ordernow">Place Order Now</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
