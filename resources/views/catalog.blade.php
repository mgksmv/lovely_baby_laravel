@extends('layouts.base')

@section('title')
    Каталог
@endsection

@section('content')
    <section class="products">
        <div class="cw">
            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="breadcrumbs__item active"><a href="">Каталог</a></li>
                    </ul>
                </div>
            </div>

            @foreach ($categories as $category)
                @if ($category->products->count() > 0)
                    <div class="products main">
                        <div class="cw">
                            <div class="products__wrapper">
                                <div class="products__header section-header">
                                    <h1 class="title">{{ $category->name }}</h1>
                                    <div class="subtitle">{{ $category->products->count() }} позиции</div>
                                </div>
                                <div class="products__container">

                                    @foreach ($category->products->take(5) as $product)
                                        <div class="products__item product">
                                            <div class="product__container">
                                                <div class="product__images-container">
                                                    <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__image">
                                                        <img src="{{ Storage::url($product->images->first()->image ?? null) }}" alt="Кроватка">
                                                    </a>
                                                    @if ($product->images->count() > 1)
                                                        <div class="product__other-images">
                                                            @foreach ($product->images->slice(1, 5) as $product_image)
                                                                <div class="product__other-image">
                                                                    <img src="{{ Storage::url($product_image->image ?? null) }}" alt="кровать">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="product__info-block">
                                                    <div class="product__info">
                                                        <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__name">
                                                            {{ $product->name }}
                                                        </a>
                                                        <a href="{{ route('collection_detail', ['slug' => $product->collection->slug]) }}" class="product__category">
                                                            {{ $product->collection->name }}
                                                        </a>
                                                        <div class="product__price">
                                                            {{ $product->price }}₽
                                                        </div>
                                                    </div>
                                                    <div class="product__links">
                                                        <a href="{{ route('product_detail', ['slug' => $product->slug]) }}"
                                                            class="product__btn btn transparent">Смотреть</a>
                                                        <a href="" class="product__btn btn">Отправить заявку</a>
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
                    </div>
                @endif
            @endforeach

            @if ($categories->hasPages())
                <div class="pagination">
                    <div class="pagination__container">
                        <ul class="pagination__list">
                            @if ($categories->previousPageUrl())
                                <li class="pagination__item prev">
                                    <a href="{{ $categories->previousPageUrl() }}" data-title="Предыдущая"></a>
                                </li>
                            @else
                                <li class="pagination__item prev" style="pointer-events:none; opacity:0.6;">
                                    <a href="#" data-title="Предыдущая"></a>
                                </li>
                            @endif

                            @for ($i = 1; $i <= $categories->lastPage(); $i++)
                                <li class="pagination__item page {{ $categories->currentPage() == $i ? 'active' : '' }}"><a
                                        href="{{ $categories->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            @if ($categories->nextPageUrl())
                                <li class="pagination__item next">
                                    <a href="{{ $categories->nextPageUrl() }}" data-title="Следующая"></a>
                                </li>
                            @else
                                <li class="pagination__item next" style="pointer-events:none; opacity:0.6;">
                                    <a href="#" data-title="Следующая"></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endif

        </div>
    </section>

    <section class="seo">
        <div class="cw">
            <div class="seo__container">
                <div class="default-text">
                    <p>Мы постоянно совершенствуем технологические процессы, наращиваем темпы производства и расширяем
                        ассортимент изготавливаемой продукции, в том числе новых видов отделок и цветов.</p>
                    <p>Для производства современных мебельных фасадов фабрикой Lovely Baby регулярно привлекаются
                        дизайнеры.</p>
                    <p>Клиенты ценят нас за высокое качество продукции, быструю обработку заявок, конкурентоспособные
                        цены, программы скидок, бонусов и выгодные условия работы. Наши покупатели получают качественную
                        продукцию, профессиональное консультирование, кратчайшие сроки поставок, в том числе и сложных
                        позиций.</p>
                </div>
            </div>
        </div>
    </section>
@endsection