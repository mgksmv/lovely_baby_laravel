@extends('layouts.base')

@section('title')
    Каталог
@endsection

@section('content')
    <section class="collections main">
        <div class="cw">
            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="breadcrumbs__item active"><a href="">Комплекты</a></li>
                    </ul>
                </div>
            </div>
            <div class="collections__wrapper">
                <div class="collections__header section-header">
                    <h1 class="title">Комплекты</h1>
                    <div class="subtitle">{{ $collections->count() }} позиции</div>
                </div>
                <div class="collections__container">

                    @foreach ($collections->take(1) as $collection)
                        <div class="collections__item collection">
                            <div class="collection__container">

                                <div class="collection__image">
                                    <img src="{{ Storage::url($collection->image) ?? null }}" alt="Коллекция">
                                </div>
                                <div class="collection__overlay">

                                </div>
                                <div class="collection__info-block">
                                    <div class="collection__title">
                                        {{ $collection->name }}
                                    </div>
                                    <div class="collection__links">
                                        <a href="{{ route('collection_detail', ['slug' => $collection->slug]) }}"
                                        class="collection__btn btn transparent">Смотреть</a>
                                        <a href="" class="collection__btn btn">Отправить заявку</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($collections->splice(1) as $collection)
                        <div class="collections__item collection">
                            <div class="collection__container">
                                <div class="collection__image">
                                    <img src="{{ Storage::url($collection->image) ?? null }}" alt="Коллекция">
                                </div>
                                <div class="collection__overlay">

                                </div>
                                <div class="collection__info-block">
                                    <div class="collection__title">
                                        {{ $collection->name }}
                                    </div>
                                    <div class="collection__links">
                                        <a href="{{ route('collection_detail', ['slug' => $collection->slug]) }}"
                                            class="collection__btn btn transparent">Смотреть</a>
                                        <a href="" class="collection__btn btn">Отправить заявку</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                @if ($collections->hasPages())
                    <div class="pagination">
                        <div class="pagination__container">
                            <ul class="pagination__list">
                                @if ($collections->previousPageUrl())
                                    <li class="pagination__item prev">
                                        <a href="{{ $collections->previousPageUrl() }}" data-title="Предыдущая"></a>
                                    </li>
                                @else
                                    <li class="pagination__item prev" style="pointer-events:none; opacity:0.6;">
                                        <a href="#" data-title="Предыдущая"></a>
                                    </li>
                                @endif

                                @for ($i = 1; $i <= $collections->lastPage(); $i++)
                                    <li class="pagination__item page {{ $collections->currentPage() == $i ? 'active' : '' }}"><a
                                            href="{{ $collections->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                @if ($collections->nextPageUrl())
                                    <li class="pagination__item next">
                                        <a href="{{ $collections->nextPageUrl() }}" data-title="Следующая"></a>
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