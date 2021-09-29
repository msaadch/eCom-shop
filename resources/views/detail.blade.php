@extends('master') 
@section('content')
<div class="container">
    <div class="emp-space">
            &nbsp;
    </div>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="text-center">
            <img class="detail-img" src="{{$products['gallery']}}" alt="">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="detail-text">
                <h3>Name : {{$products['name']}}</h3>
                <h4>Price : {{$products['price']}}</h4>
                <h5>Category : {{$products['category']}}</h5>
                <h6>Description : {{$products['description']}}</h6>
                <br><br>
                
                <form action="/add_to_cart" method="POST">
                    <input type="hidden" name="prod_id" value="{{$products['id']}}">
                    @csrf
                    <button class="btn btn-success">Add to Cart</button>
                </form>
                <br>

                <button class="btn btn-primary">Buy Now</button>
                <br><br>
                <a href="/">Go Back</a>
            </div>
                
        </div>
    </div>

    <div class="emp-space">
        &nbsp;
    </div>

</div>
@endsection
