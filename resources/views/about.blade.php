@extends('layouts.base')

@section('title')
    О нас
@endsection

@section('content')
    <section class="about">
        <div class="cw">

            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="breadcrumbs__item active"><a href="">О компании</a></li>
                    </ul>
                </div>
            </div>

            <div class="about__wrapper">
                <div class="about__header">
                    <h1 class="about__title">
                        О компании
                    </h1>
                </div>
                <div class="about__main-text">
                    <p>Lovely Baby – компания производитель функциональной детской мебели из натуральных материалов. Мы
                        обладаем современным и технологичным производством, но при этом вкладываем теплоту своих рук в
                        каждое изделие.</p>
                </div>
                <div class="about__advantages">
                    <p>Мы производим, долговечную и безопасную детскую мебель, которая прослужит долгие годы и будет
                        радовать Вас эстетическим
                        и функциональным совершенством.</p>
                    <p>В основе каждого предмета наших коллекций лежит высокое качество материалов, функциональный
                        дизайн, а так же забота о безопасности и здоровье Ваших детей.</p>
                    <p>С помощью наших коллекций мебели Вы сможете сформировать уютную детскую комнату только
                        качественной и безопасной мебелью.</p>
                    <p>При этом каждая коллекция мебели уникальна и обладает своими отличительными чертами которые
                        позволят Вам реализовать ваши идеи, окружить ребенка заботой, с привить ему вкус к
                        прекрасному.</p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.form')
    
@endsection