<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="top">
            <nav>
                <div class="menu_left">
                    <img class= "logo" src="https://www.boolean.careers/images/common/logo.png" alt="">
                </div>
                
                <ul class = "menu_right">
                <li><a href="{{route('StaticPage.home')}}">HOME</a></li>
                    <li><a href="#">CORSO</a></li>
                    <li><a class =" {{(Request::route()->getName() == 'home' ) ? 'active' : ''}}" href="{{route('home')}}">DOPO IL CORSO</a></li>
                    <li><a href="#">LEZIONE GRATUITA</a></li>
                </ul>
            </nav>
            
        </div>