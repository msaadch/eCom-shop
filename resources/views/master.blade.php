<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('header')}}
    @yield('content')
    {{ View::make('footer')}}
</body>
<style>
    .div-login{
        height: 500px;
        padding-top: 100px;
    }
    .slider-img{
        height: 400px !important;
    }
    .slider-txt{
        background:#00000063;
        width: fit-content;
        padding: 10px 10px 0 10px;
        border-radius: 20px;
    }
    .carousel-control-prev-icon {
    background-color: #000;
    }
    .carousel-control-next-icon {
    background-color: #000;
    }
    .trend-img{
        height: 100px;
    }
    .detail-img{
        height: 300px;
    }
    .emp-space{
        height: 70px;
    }
    .detail-text {
    padding-left: 20px;
    }
    .search-img{
        height: 200px;
    }
    .cart-img{
        height: 140px;
    }
    .link-text{
        text-decoration: none;
    }
    .divider{
        border-bottom: solid thin #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>