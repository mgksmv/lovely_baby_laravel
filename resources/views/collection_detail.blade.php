@extends('layouts.base')

@section('title')
    {{ $collection->name }}
@endsection

@section('content')
    <section class="collection-card">
        <div class="cw">

            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="breadcrumbs__item"><a href="{{ route('collections') }}">Комплекты</a></li>
                        <li class="breadcrumbs__item active"><a href="">{{ $collection->name }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="collection-card__wrapper">
                <div class="collection-card__main">
                    <div class="collection-card__left">
                        <div class="collection-card__image-container">
                            <div class="collection-card__image">
                                <img src="{{ Storage::url($collection->image ?? '') }}" alt="Коллекция">
                            </div>
                        </div>
                    </div>
                    <div class="collection-card__right">
                        <div class="collection-card__container">
                            <div class="collection-card__header">
                                <h1 class="title collection-card__title">
                                    {{ $collection->name }}
                                </h1>
                                <div class="collection-card__price">
                                    {{ $collection->price }}₽
                                </div>
                            </div>
                            <div class="collection-card__block">
                                <div class="collection-card__description">
                                    <p>{{ $collection->description }}</p>
                                </div>
                                <div class="collection-card__links">
                                    <a href="" class="collection-card__btn btn">Отправить заявку</a>
                                    @if ($collection->instruction)
                                        <a href="{{ Storage::url($collection->instruction ?? '') }}" class="collection-card__btn btn transparent">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196 15.021 0 14.55 0 14V11H2V14H14V11H16V14C16 14.55 15.8043 15.021 15.413 15.413C15.021 15.8043 14.55 16 14 16H2ZM8 12L3 7L4.4 5.55L7 8.15V0H9V8.15L11.6 5.55L13 7L8 12Z" />
                                            </svg>
                                            <span>Инструкция по установке</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="attributes">
        <div class="cw">
            <div class="collection-card__attributes attributes">
                <div class="attributes__header">
                    <div class="attributes__title title">
                        Характеристики
                    </div>
                </div>
                <div class="attributes__list-container">
                    <ul class="attributes__list">
                        @if ($collection->material)
                            <li class="attributes__item attribute">
                                <span class="attribute__name">
                                    Материал
                                </span>
                                <span class="attribute__value">
                                    {{ $collection->material }}
                                </span>
                            </li>
                        @endif
                        @if ($collection->color)
                            <li class="attributes__item attribute">
                                <span class="attribute__name">
                                    Цвет
                                </span>
                                <span class="attribute__value">
                                    {{ $collection->color }}
                                </span>
                            </li>
                        @endif
                        @if ($collection->patina)
                            <li class="attributes__item attribute">
                                <span class="attribute__name">
                                    Патина
                                </span>
                                <span class="attribute__value">
                                    {{ $collection->patina }}
                                </span>
                            </li>
                        @endif
                        @if ($collection->made_in)
                            <li class="attributes__item attribute">
                                <span class="attribute__name">
                                    Производство
                                </span>
                                <span class="attribute__value">
                                    {{ $collection->made_in }}
                                </span>
                            </li>
                        @endif
                        @if ($collection->bed_size)
                            <li class="attributes__item attribute">
                                <span class="attribute__name">
                                    Кровать (ДxШxВ)
                                </span>
                                <span class="attribute__value">
                                    {{ $collection->bed_size }}
                                </span>
                            </li>
                        @endif
                        @if ($collection->drawer_size)
                            <li class="attributes__item attribute">
                                <span class="attribute__name">
                                    Комод (ДxШxВ)
                                </span>
                                <span class="attribute__value">
                                    {{ $collection->drawer_size }}
                                </span>
                            </li>
                            @endif
                        @if ($collection->wardrobe_size)
                            <li class="attributes__item attribute">
                                <span class="attribute__name">
                                    Шкаф (ДxШxВ)
                                </span>
                                <span class="attribute__value">
                                    {{ $collection->wardrobe_size }}
                                </span>
                            </li>
                        @endif

                        @if ($collection->additional_specifications)
                            @foreach ($collection->additional_specifications as $specification)
                                <li class="attributes__item attribute">
                                    <span class="attribute__name">
                                        {{ $specification->custom_specification->name }}
                                    </span>
                                    <span class="attribute__value">
                                        {{ $specification->value }}
                                    </span>
                                </li>
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </section>

    @if ($collection->products->count() > 0)
        <section class="products">
            <div class="cw">

                <div class="products__wrapper">
                    <div class="products__header section-header">
                        <h2 class="section-subtitle">В комплект входит</h2>
                    </div>

                    <div class="products__container">
                        @foreach ($collection->products as $product)
                            <div class="products__item product">
                                <div class="product__container">
                                    <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__image">
                                        <img src="{{ Storage::url($product->images->first()->image ?? null) }}" alt="Кроватка">
                                    </a>
                                    <div class="product__info-block">
                                        <div class="product__info">
                                            <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__name">
                                                {{ $product->name }}
                                            </a>
                                            <a href="{{ route('collection_detail', ['slug' => $product->collection->slug]) }}" class="product__category">
                                                {{ $product->collection->name }}
                                            </a>
                                        </div>
                                        <div class="product__links">
                                            @if ($product->size)
                                                <div class="product__size-container">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M25.4082 18.944H16.9922L25.4402 12.928C25.6962 12.768 25.8562 12.48 25.8882 12.192C26.0162 11.968 26.0802 11.712 26.0802 11.456V8.79995C26.0802 7.90395 25.3442 7.19995 24.4802 7.19995H6.59219C5.69619 7.19995 4.99219 7.93595 4.99219 8.79995V11.456C4.99219 12.352 5.72819 13.056 6.59219 13.056H15.1362L6.46419 19.264C6.08019 19.552 5.88819 20 5.92019 20.448V23.2C5.92019 24.096 6.65619 24.8 7.52019 24.8H25.4082C26.3042 24.8 27.0082 24.064 27.0082 23.2V20.544C27.0082 19.648 26.3042 18.944 25.4082 18.944ZM5.63219 11.456V8.79995C5.63219 8.25595 6.08019 7.83995 6.59219 7.83995H24.4802C25.0242 7.83995 25.4402 8.28795 25.4402 8.79995V11.456C25.4402 11.616 25.3762 11.776 25.3122 11.936C25.2482 12.096 25.1202 12.192 24.9922 12.288C24.9922 12.288 24.9602 12.32 24.9282 12.32C24.8642 12.352 24.8322 12.384 24.7682 12.384C24.7362 12.384 24.7362 12.384 24.7042 12.416C24.6402 12.448 24.5442 12.448 24.4802 12.448H24.0002V11.808C24.0002 11.616 23.8722 11.488 23.6802 11.488C23.4882 11.488 23.3602 11.616 23.3602 11.808V12.448H21.6642V11.104C21.6642 10.912 21.5362 10.784 21.3442 10.784C21.1522 10.784 21.0242 10.912 21.0242 11.104V12.448H19.3282V11.808C19.3282 11.616 19.2002 11.488 19.0082 11.488C18.8162 11.488 18.6882 11.616 18.6882 11.808V12.448H16.9922V11.104C16.9922 10.912 16.8642 10.784 16.6722 10.784C16.4802 10.784 16.3522 10.912 16.3522 11.104V12.448H14.6562V11.808C14.6562 11.616 14.5282 11.488 14.3362 11.488C14.1442 11.488 14.0162 11.616 14.0162 11.808V12.448H12.3202V11.104C12.3202 10.912 12.1922 10.784 12.0002 10.784C11.8082 10.784 11.6802 10.912 11.6802 11.104V12.448H9.98419V11.808C9.98419 11.616 9.85619 11.488 9.66419 11.488C9.47219 11.488 9.34419 11.616 9.34419 11.808V12.448H8.00019V11.104C8.00019 10.912 7.87219 10.784 7.68019 10.784C7.48819 10.784 7.36019 10.912 7.36019 11.104V12.448H6.52819C6.04819 12.416 5.63219 12 5.63219 11.456ZM26.3682 23.2C26.3682 23.744 25.9202 24.16 25.4082 24.16H24.9602V23.52C24.9602 23.328 24.8322 23.2 24.6402 23.2C24.4482 23.2 24.3202 23.328 24.3202 23.52V24.16H22.6242V22.816C22.6242 22.624 22.4962 22.496 22.3042 22.496C22.1122 22.496 21.9842 22.624 21.9842 22.816V24.16H20.2882V23.52C20.2882 23.328 20.1602 23.2 19.9682 23.2C19.7762 23.2 19.6482 23.328 19.6482 23.52V24.16H17.9522V22.816C17.9522 22.624 17.8242 22.496 17.6322 22.496C17.4402 22.496 17.3122 22.624 17.3122 22.816V24.16H15.6162V23.52C15.6162 23.328 15.4882 23.2 15.2962 23.2C15.1042 23.2 14.9762 23.328 14.9762 23.52V24.16H13.2802V22.816C13.2802 22.624 13.1522 22.496 12.9602 22.496C12.7682 22.496 12.6402 22.624 12.6402 22.816V24.16H10.9442V23.52C10.9442 23.328 10.8162 23.2 10.6242 23.2C10.4322 23.2 10.3042 23.328 10.3042 23.52V24.16H8.60819V22.816C8.60819 22.624 8.48019 22.496 8.28819 22.496C8.09619 22.496 7.96819 22.624 7.96819 22.816V24.16H7.52019C6.97619 24.16 6.56019 23.712 6.56019 23.2V20.544C6.56019 20.48 6.56019 20.416 6.59219 20.384V20.352C6.59219 20.288 6.62419 20.256 6.62419 20.224V20.192C6.65619 20.16 6.65619 20.096 6.68819 20.064C6.68819 20.064 6.68819 20.032 6.72019 20.032C6.75219 20 6.78419 19.936 6.81619 19.904L6.84819 19.872C6.88019 19.84 6.94419 19.808 6.97619 19.776C7.00819 19.744 7.07219 19.712 7.13619 19.68C7.26419 19.616 7.39219 19.616 7.52019 19.616H25.4082C25.9522 19.616 26.3682 20.064 26.3682 20.576V23.2Z"
                                                            fill="#36393B" />
                                                    </svg>
                                                    <div class="product__size">
                                                        <span>ДxШxВ — </span>
                                                        <span>{{ $product->size }}</span>
                                                    </div>
                                                </div>
                                            @endif
                                            <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__btn btn transparent">Смотреть</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="collections">
        <div class="cw">
            <div class="collections__wrapper">
                <div class="collections__header section-header">
                    <h2 class="section-subtitle">Вас может заинтересовать</h2>
                </div>
                <div class="collections__container">

                    @foreach ($random_collections as $random_collection)
                        <div class="collections__item collection">
                            <div class="collection__container">
                                <div class="collection__image">
                                    <img src="{{ Storage::url($random_collection->image) }}" alt="Коллекция">
                                </div>
                                <div class="collection__overlay">

                                </div>
                                <div class="collection__info-block">
                                    <a href="{{ route('collection_detail', ['slug' => $random_collection->slug]) }}" class="collection__title">
                                        {{ $random_collection->name }}
                                    </a>
                                    <div class="collection__links">
                                        <a href="{{ route('collection_detail', ['slug' => $random_collection->slug]) }}"
                                            class="collection__btn btn transparent">Смотреть</a>
                                        <a href="" class="collection__btn btn">Отправить заявку</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    @include('includes.form')

@endsection
