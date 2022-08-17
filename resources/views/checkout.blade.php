<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style href="style.css" rel="stylesheet"></style>
    <link rel="stylesheet" href="{{asset('css/style_checkout.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

</head>
<body>
<div class="card">
    <div class="row">
        <div class="col-md-8 cart">

            <div class="title">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{session()->get('success')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col"><h4><b>Shopping Cart</b></h4></div>
                    <div class="col align-self-center text-right text-muted">1 items</div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">{{$product->name}}</div>
                        <div class="row">{{$product->name}}</div>
                    </div>
                    <div class="col">&euro; {{$product->price}} <span class="close">&#10005;</span></div>
                </div>
            </div>
            <div class="back-to-shop"><a href="{{route('home')}}">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div><h5><b>Summary</b></h5></div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:1;">ITEMS 1</div>
                <div class="col text-right">&euro; {{$product->price}}</div>
            </div>

            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">&euro;  {{$product->price}}</div>
            </div>
            <form action="{{route('checkout.save' , $product->id)}}" method="POST">
                @csrf
                <button class="btn btn-block">CHECKOUT</button>
            </form>
        </div>
    </div>

</div>
</body>
</html>
