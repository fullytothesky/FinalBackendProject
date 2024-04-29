@extends('layouts.layout')


<style>


    .categories-block{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
        justify-content: center;
    }

    .categories-block__item{
        background-position: center;
        background-size: cover;
        width: 30%;
        height: 600px;
        background-color:black ;
        margin: 30px 10px 10px 10px;
        display: flex;
        flex-direction: column;

        justify-content: flex-end;
    }
    .item-title{
        color: white;
        font-family: sans-serif;

        font-size: 30px;
        margin: 0 0 0 15px;
    }

    .item-title__link{
        color:white;
    }

    .categories-block__title-block{
        height: 50px;
        width:100%;
        background-color:transparent;
        display: flex;
        align-items: center;
        background-color: rgba(114, 111, 109, 0.2);
        box-shadow: inset 0 5px 5px rgba(166, 127, 127, 0.5), inset 0 -5px 5px rgba(100, 93, 93, 0.5);
        margin-bottom: 20px;

    }

</style>
@section('content')

<div class="categories-block">
    @foreach($categories as $category)
    <div class="categories-block__item" style="background-image:url({{$category->image_url}});  ">
        <div class="categories-block__title-block">
            <h3 class="item-title"><a class="item-title__link" href={{route('products', ['id' => $category->id])}}>{{$category->name}}</a></h3></div></div>
        @endforeach
{{--        <div class="categories-block__item" style="background-image: url('https://cdn.motor1.com/images/mgl/y2GlxY/s1/porsche-taycan-turbo-gt.webp')"><h3 class="item-title">Taycan</h3></div>--}}
{{--    <div class="categories-block__item" style="background-image: url('https://cdn.motor1.com/images/mgl/y2GlxY/s1/porsche-taycan-turbo-gt.webp') "><h3 class="item-title">Panamera</h3></div>--}}

</div>

@endsection
