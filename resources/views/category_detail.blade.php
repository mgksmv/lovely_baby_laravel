@extends('layouts.base')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
    <section class="products">
        <div class="cw">
            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="breadcrumbs__item active"><a href="">{{ $category->name }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="products main">
                <div class="cw">
                    <div class="products__wrapper">
                        <div class="products__header section-header">
                            <h1 class="title">{{ $category->name }}</h1>
                            <div class="subtitle">{{ $category->products->count() }} позиции</div>
                        </div>
                        <div class="products__container">

                            @foreach ($products as $product)
                                <div class="products__item product">
                                    <div class="product__container">
                                        <div class="product__images-container">
                                            <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__image">
                                                <img src="{{ Storage::url($product->images->first()->image ?? null) }}"
                                                    alt="Кроватка">
                                            </a>
                                            @if ($product->images->count() > 1)
                                                <div class="product__other-images">
                                                    @foreach ($product->images as $product_image)
                                                        <div class="product__other-image">
                                                            <img src="{{ Storage::url($product_image->image ?? null) }}"
                                                                alt="кровать">
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
                                                <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__btn btn transparent">Смотреть</a>
                                                <a href="" class="product__btn btn">Отправить заявку</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        @if ($products->hasPages())
                            <div class="pagination">
                                <div class="pagination__container">
                                    <ul class="pagination__list">
                                        @if ($products->previousPageUrl())
                                            <li class="pagination__item prev">
                                                <a href="{{ $products->previousPageUrl() }}"
                                                    data-title="Предыдущая"></a>
                                            </li>
                                        @else
                                            <li class="pagination__item prev" style="pointer-events:none; opacity:0.6;">
                                                <a href="#" data-title="Предыдущая"></a>
                                            </li>
                                        @endif

                                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                                            <li
                                                class="pagination__item page {{ $products->currentPage() == $i ? 'active' : '' }}">
                                                <a href="{{ $products->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        @if ($products->nextPageUrl())
                                            <li class="pagination__item next">
                                                <a href="{{ $products->nextPageUrl() }}" data-title="Следующая"></a>
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
                </div>
            </div>
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
