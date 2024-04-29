@extends('layouts.layout')

<style>
    .content {
        font-family: sans-serif;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        height: calc(100vh - 70px);
        background-image: url("https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1290x726/dam/pnr/2022/Company/50-Years-Porsche-Design/911-Edition-50-years-Porsche-Design/001_Targa_911_3-4_Front_V03.jpeg/jcr:content/001_Targa_911_3-4_Front_V03.jpeg");
        background-position: center;
        background-size: cover;

    }

    h1{

        margin: 0px;
        text-align: start;
        color:white;
    }

     .log-in__title-block{
         margin:0 100px 200px 0 ;
        display: flex;

        padding: 30px;
        background: rgba(0, 0, 0, 1);

        box-shadow:
            0 1px 1px 0 rgba(255, 255, 255, .2) inset,
            0 -1px 5px 0 rgba(0, 0, 0, .2) inset,
            0 2.2px 6.1px rgba(0, 0, 0, 0.036),
            0 9.8px 20.3px rgba(0, 0, 0, 0.054),
            0 44px 91px rgba(0, 0, 0, 0.09);

    }
</style>
@section('content')

    <div class="content">
      <div class="log-in__title-block">
          <h1>There is no substitute.</br>Porsche.</h1>
      </div>

    </div>
@endsection


