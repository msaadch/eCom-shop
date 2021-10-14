@extends('master') 
@section('content')
<div class="row row justify-content-evenly">
    <div class="col">
        <div class="text-center">
            <h2 class='my-4'>Orders List</h2>
                <div class="">
                    @foreach ($orders as $item)
                    <div class="cart-items row justify-content-center divider">
                        <div class="col-sm-3">
                            <a class="link-text" href="detail/{{$item->id}}">
                                <img class="my-ord-img" src="{{$item->gallery}}" alt="...">
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <div class="">
                                <h5 class="">{{$item->name}}</h5>
                                <p class="">Delivery Status: {{$item->status}}</p>
                                <p class="">Payment Method: {{$item->payment_method}}</p>
                                <p class="">Payment Status: {{$item->payment_status}}</p>
                                <p class="">Delivery Address: {{$item->address}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
