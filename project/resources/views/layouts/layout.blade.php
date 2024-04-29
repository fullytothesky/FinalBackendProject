<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.cdnfonts.com/css/911-porscha" rel="stylesheet">

    <title>Welcome</title>
</head>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let menuBtn = document.querySelector('.menu-btn');
        let menu = document.querySelector('.nav');
        let menuItem = document.querySelectorAll('.nav__link');

        menuBtn.addEventListener('click', function() {
            menuBtn.classList.toggle('active');
            menu.classList.toggle('active');
        });

        menuItem.forEach(function(item) {
            item.addEventListener('click', function() {
                menuBtn.classList.remove('active');
                menu.classList.remove('active');
            });
        });
    });

</script>
<style>

    /*@font-face {*/
    /*    font-family: 'Porsche';*/
    /*    src: url('/fonts/Porsche Regular.ttf') format('truetype');*/
    /*    !* Дополнительные стили шрифта *!*/
    /*}*/
    html,body{
        /*font-family: '911 Porscha', sans-serif;*/
        margin: 0px;
        min-width: 100%;

    }

    header{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        padding: 0px 25px 0px 15px;
        height:70px;
        box-shadow:  0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    header h2{
        font-family: '911 Porscha Bold', sans-serif;
        font-size: 35px;
        margin: 0px;
    }
    h2 a{
        color:black;
    }
    header h4{
        font-family: '911 Porscha Italic', sans-serif;
    }
    a{
        text-decoration: none;
    }
    ul{
        padding: 0px;
        display: flex;
        flex-direction: row;

    }
    li{
        font-size: 20px;
        margin: 20px;
        font-family: '911 Porscha', sans-serif;
        text-decoration: none;
    }


    /* Гамбургер иконка */
    .menu-btn {
        width: 30px;
        height: 30px;
        position: relative;
        z-index:2;
        overflow: hidden;
    }

    .menu-btn .bar {
        width: 30px;
        height: 4px;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 4px;
        transform: translate(-50%, -50%);
        background-color: black;
        transition: all 0.3s ease-in-out;
    }

    .menu-btn .bar:nth-of-type(2) {
        top: calc(50% - 9px);
    }
    .menu-btn .bar:nth-of-type(3) {
        top: calc(50% + 9px);
    }

    /* Меняем гамбургер иконку, когда меню открыто */
    .menu-btn.active .bar:nth-of-type(1) {
        display: none;
    }
    .menu-btn.active .bar:nth-of-type(2) {
        top: 50%;
        transform: translate(-50%, 0%) rotate(45deg);
    }
    .menu-btn.active .bar:nth-of-type(3) {
        top: 50%;
        transform: translate(-50%, 0%) rotate(-45deg);
    }

    /* Меню, которое будет появляться */
    .nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 15px;
        background: whitesmoke;
        transform: translateX(100%);
        transition: transform 0.5s;

    }

    .nav.active {
        transform: translateX(0);
    }

    .nav .nav__list_item {
        list-style-type: none;

    }
    .nav__list{
        display: flex;
        flex-direction: column;
    }
    .nav__link{
        color: black;
    }


</style>

<body>
<header><h2><a href={{route('opening')}}>Porsche</a></h2>
    <div class="menu-btn">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</header>

<div class="header__nav">
    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__list_item"><a class="nav__link" href={{route('categories')}}>Categories</a></li>
            <li class="nav__list_item"><a class="nav__link" href={{route('login')}}>Log In</a></li>
            <li class="nav__list_item"><a class="nav__link" href={{route('orders')}}>My orders</a></li>
        </ul>
    </nav>
</div>

@yield('content')
</body>
</html>
