@extends('layouts.base')

@section('content')
    <section class="main-screen main">
        <div class="cw">

            <div class="main-screen__container">

                <div class="main-screen__left">
                    <div class="main-screen__subtitle">
                        Lovely baby
                    </div>
                    <h1 class="main-screen__title title">
                        Всё самое нужное для вашего ребёнка
                    </h1>
                    <a href="{{ route('catalog') }}" class="main-screen__btn btn">
                        Открыть каталог
                    </a>
                </div>

                <div class="main-screen__right">
                    <div class="main-screen__products-container">
                        <div class="main-screen__products">

                            @foreach ($sliders as $slider)
                                <div class="main-screen__product">
                                    <div class="main-screen__product-header">
                                        <div class="main-screen__product-info">
                                            <div class="main-screen__product-name">
                                                {{ $slider->product->name }}
                                            </div>
                                            <div class="main-screen__product-category">
                                                {{ $slider->product->collection->name }}
                                            </div>
                                        </div>
                                        <a href="{{ route('product_detail', ['slug' => $slider->product->slug]) }}"
                                            class="main-screen__product-btn btn transparent">
                                            Смотреть
                                        </a>
                                    </div>
                                    <div class="main-screen__product-container">
                                        <div class="main-screen__product-image">
                                            <img src="{{ Storage::url($slider->product->images->first()->image ?? null) }}"
                                                alt="Хит продаж">
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="main-collection">
        <div class="cw">

            <div class="main-collection__header-nav slider-nav slider__nav">
                <div class="slider-nav__prev">
                    <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.0002 35.925C8.10019 35.925 0.0751953 27.9 0.0751953 18C0.0751953 8.09995 8.10019 0.0749512 18.0002 0.0749512C27.9002 0.0749512 35.9252 8.09995 35.9252 18C35.9252 27.9 27.9002 35.925 18.0002 35.925ZM18.0002 2.02495C9.22519 2.02495 2.02519 9.22495 2.02519 18C2.02519 26.775 9.22519 33.9749 18.0002 33.9749C26.7752 33.9749 33.9752 26.775 33.9752 18C33.9752 9.22495 26.7752 2.02495 18.0002 2.02495Z" />
                        <path
                            d="M18.3756 28.275L8.10059 18L18.3756 7.72498L19.7256 9.14998L10.9506 18L19.7256 26.85L18.3756 28.275Z" />
                        <path d="M9.52539 16.95H27.5254V19.05H9.52539V16.95Z" />
                    </svg>
                </div>
                <div class="slider-nav__next">
                    <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.9998 35.925C27.8998 35.925 35.9248 27.9 35.9248 18C35.9248 8.09995 27.8998 0.0749512 17.9998 0.0749512C8.09981 0.0749512 0.0748024 8.09995 0.0748024 18C0.0748024 27.9 8.09981 35.925 17.9998 35.925ZM17.9998 2.02495C26.7748 2.02495 33.9748 9.22495 33.9748 18C33.9748 26.775 26.7748 33.9749 17.9998 33.9749C9.22481 33.9749 2.02481 26.775 2.02481 18C2.02481 9.22495 9.22481 2.02495 17.9998 2.02495Z" />
                        <path
                            d="M17.6244 28.275L27.8994 18L17.6244 7.72498L16.2744 9.14998L25.0494 18L16.2744 26.85L17.6244 28.275Z" />
                        <path d="M26.4746 16.95H8.47461V19.05H26.4746V16.95Z" />
                    </svg>
                </div>
            </div>

            <div class="main-collection__slider-block">

                @foreach ($collections as $collection)
                    <div class="main-collection__wrapper">

                        <div class="main-collection__header">
                            <h2 class="main-collection__title section-title">
                                {{ $collection->name }}
                            </h2>

                        </div>

                        <div class="main-collection__slider-container">
                            <div class="main-collection__slider">
                                <div class="main-collection__container">
                                    <div class="main-collection__block">
                                        <div class="main-collection__image">
                                            <img src="{{ Storage::url($collection->image ?? null) }}" alt="Коллекции">
                                        </div>
                                        <div class="main-collection__products-container">
                                            <div class="main-collection__slider-container">
                                                <div class="main-collection__products">

                                                    @forelse ($collection->products->take(3) as $product)
                                                        <div class="product">
                                                            <div class="product__container">
                                                                <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__image">
                                                                    <img src="{{ Storage::url($product->images->first()->image ?? null) }}"
                                                                        alt="Кроватка">
                                                                </a>
                                                                <div class="product__info-block">
                                                                    <div class="product__info">
                                                                        <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__name">
                                                                            {{ $product->name }}
                                                                        </a>
                                                                    </div>
                                                                    <div class="product__links">
                                                                        <a href="{{ route('product_detail', ['slug' => $product->slug]) }}"
                                                                            class="product__btn btn transparent">Смотреть</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <div style="padding-bottom: 290px"></div>
                                                    @endforelse

                                                </div>
                                            </div>
                                            <a href="{{ route('collections') }}" class="main-collection__show-more btn">
                                                <span>Смотреть все коллекции</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </section>

    @foreach ($categories->take(1) as $category)
        <section class="products main">
            <div class="cw">
                <div class="products__wrapper stars">

                    <div class="products__header section-header">
                        <h2 class="section-title">{{ $category->name }}</h2>
                    </div>

                    <div class="products__container">

                        @foreach ($category->products as $product)
                            <div class="products__item product">
                                <div class="product__container">
                                    <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__image">
                                        <img src="{{ Storage::url($product->images->first()->image ?? null) }}"
                                            alt="Кроватка">
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
                                            <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__btn btn transparent">Смотреть</a>
                                            <a href="#" class="product__btn btn">Отправить заявку</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="products__item other-products">
                            <div class="other-products__container">
                                <img src="{{ asset('assets/images/product-5.png') }}" class="other-products__image"
                                    alt="Кровать">
                                <img src="{{ asset('assets/images/product-6.png') }}" class="other-products__image"
                                    alt="Кровать">
                                <img src="{{ asset('assets/images/product-7.png') }}" class="other-products__image"
                                    alt="Кровать">
                                <a href="{{ route('category_detail', ['slug' => $category->slug]) }}" class="other-products__show-more btn">
                                    Смотреть всё
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endforeach

    <section class="main-about">
        <div class="main-about__wrapper">

            <div class="main-about__left">

            </div>

            <div class="main-about__right">
                <div class="main-about__block">
                    <div class="main-about__header">
                        <div class="main-about__title">Lovely Baby</div>
                        <div class="main-about__subtitle">С заботой о вашем ребенке</div>
                    </div>
                    <div class="main-about__container">
                        <div class="main-about__text">
                            <p>Мы постоянно совершенствуем технологические процессы, наращиваем темпы производства и
                                расширяем ассортимент изготавливаемой продукции, в том числе новых видов отделок и
                                цветов.</p>
                            <p>Для производства современных мебельных фасадов фабрикой Lovely Baby регулярно
                                привлекаются дизайнеры.</p>
                            <p>Клиенты ценят нас за высокое качество продукции, быструю обработку заявок,
                                конкурентоспособные цены, программы скидок, бонусов и выгодные условия работы. Наши
                                покупатели получают качественную продукцию, профессиональное консультирование,
                                кратчайшие сроки поставок, в том числе и сложных позиций.</p>
                        </div>
                        <div class="main-about__links">
                            <a href="{{ route('about') }}" class="main-about__btn btn transparent">Подробнее</a>
                            <a href="" class="main-about__btn btn">Отправить заявку</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @foreach ($categories->splice(1) as $category)
        @if ($category->products->count() > 0)
            <section class="products main">
                <div class="cw">
                    <div class="products__wrapper stars">

                        <div class="products__header section-header">
                            <h2 class="section-title">{{ $category->name }}</h2>
                        </div>

                        <div class="products__container">

                            @foreach ($category->products as $product)
                                <div class="products__item product">
                                    <div class="product__container">
                                        <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__image">
                                            <img src="{{ Storage::url($product->images->first()->image ?? null) }}"
                                                alt="Кроватка">
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
                                                <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__btn btn transparent">Смотреть</a>
                                                <a href="#" class="product__btn btn">Отправить заявку</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="products__item other-products">
                                <div class="other-products__container">
                                    <img src="{{ asset('assets/images/product-5.png') }}" class="other-products__image"
                                        alt="Кровать">
                                    <img src="{{ asset('assets/images/product-6.png') }}" class="other-products__image"
                                        alt="Кровать">
                                    <img src="{{ asset('assets/images/product-7.png') }}" class="other-products__image"
                                        alt="Кровать">
                                    <a href="{{ route('category_detail', ['slug' => $category->slug]) }}" class="other-products__show-more btn">
                                        Смотреть всё
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif
    @endforeach

    @include('includes.form')
@endsection
