@extends('layouts.layout')


<style>
    .container{
        display: flex;
        flex-direction: column;
        align-items: center;
        box-shadow: black;
        margin: 0px 30px ;
    }
 .product-block{
     display: flex;

     flex-direction: column;
     max-width: 700px;
     width: 100%;
     height: 600px;
     margin-top:30px;
     background-color: #000000;
     color: white;
     font-family: sans-serif;

 }
 .product-block__image{
    height: 70%;
     width: inherit;
 }
    .product-block__title{
        font-size: 25px;
        margin:15px 0 0 20px;
    }
    .product-block__price{
        margin:0;
        font-size: 35px;
    }
    .product-block__speed{
        margin:10px 0 30px 20px;
        font-size: 16px;
    }

    .product-block__purchase-div{
        margin:10px 20px 30px 20px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>


@section('content')

<div class="container">
    @if(@isset($products)&&count($products)>0)
@foreach($products as $product)
    <div class="product-block">
        <img class="product-block__image" src={{$product->image_url}} >
        <div class="product-block__info-div">
            <h3 class="product-block__title">{{$product->name}}</h3>
          <p class="product-block__speed">{{$product->max_speed}} km/h </p>
           <div class="product-block__purchase-div"> <h4 class="product-block__price" >{{$product->price}}</h4>
               <button ><a href={{route('orders')}}>Contact dealer</a></button></div>
        </div>
    </div>
@endforeach
    @else
    <p>Nothing Found:(</p>
    @endif
</div>
@endsection
