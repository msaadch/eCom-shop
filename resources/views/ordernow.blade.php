@extends('master') 
@section('content')
<div class="row row justify-content-evenly">
    <div class="col-sm-6">
        <table class="table text-center">
            <h2 class="my-4 text-center">Your Bill</h2>
            <tbody>
                <tr>
                <td>Price</td>
                <td>Rs. {{$total}}</td>
                </tr>
                <tr>
                <td>Tax</td>
                <td>Rs. 0</td>
                </tr>
                <tr>
                <td>Delivery Charges</td>
                <td>Rs. 350</td>
                </tr>
                <tr>
                <th>Total Price</th>
                <th>Rs. {{$total+350}} Only :P</th>
                </tr>
            </tbody>
        </table>
        <br><br>

        <form method="POST" action="orderplace">
            @csrf
            <div class="form-group"> 
                <label for=""><b>Address:</b></label>
                <textarea name="address" class="form-control"></textarea>
            </div>
            <br><br>
            <div class="form-group">
                <label for=""><b>Select Payment Method:</b></label>
                <p><input type="radio" value="cash" name="payment"><span>&nbsp;Online Payment</span></p>
                <p><input type="radio" value="cash" name="payment"><span>&nbsp;EMI Payment</span></p>
                <p><input type="radio" value="cash"  name="payment"><span>&nbsp;Payment On Delivery</span></p>
            </div>
        <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
        <br><br>
    </div>
</div>
@endsection
