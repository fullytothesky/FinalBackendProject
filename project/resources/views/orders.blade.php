@extends('layouts.layout')


<style>
    h2{
        margin: 20px ;
    }

    .button-logout{

    }

    .heading-info-block{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 0 30px;
    }

    button{
        background-color: #000000;
        border-radius: 5px;
        border-style: none;
        padding: 10px 20px;
        font-family: sans-serif;
        color: white;
        margin-top: 20px;
        margin-bottom: 30px;
        font-weight: bold;
    }
    a{
        color: white;
    }
</style>
@section('content')

    <div class="container">
       <div class="heading-info-block">
           <h2>Hello, <b>{{$user->name}}</b></h2>
           <button class="button-logout"><a href={{route('logout')}}>Log Out</a></button>
    </div>
    </div>
@endsection
