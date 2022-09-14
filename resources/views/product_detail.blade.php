@extends('layouts.base')

@section('title')
    {{ $product->name }}
@endsection

@section('content')
    <section class="product-card">
        <div class="cw">

            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="breadcrumbs__item"><a href="{{ route('catalog') }}">Каталог</a></li>
                        <li class="breadcrumbs__item active"><a href="">{{ $product->name }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="product-card__wrapper">
                <div class="product-card__main">
                    <div class="product-card__header">
                        <h1 class="product-card__title title">{{ $product->name }}</h1>
                        <div class="product-card__category">{{ $product->collection->name }}</div>
                    </div>
                    <div class="product-card__slider-container">
                        <div class="product-card__slider-main">
                            <div class="product-card__slider">

                                @foreach ($product->images as $product_image)
                                    <div class="product-card__slider-item">
                                        <div class="product-card__image-container">
                                            <div class="product-card__image">
                                                <img src="{{ Storage::url($product_image->image ?? null) }}" alt="Кровать">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="product-card__slider-nav-container">
                            <div class="product-card__slider-navigation">
                                <div class="product-card__slider-nav-block">
                                    <div class="product-card__slider-nav">

                                        @foreach ($product->images as $product_image)
                                            <div class="product-card__nav-item">
                                                <div class="product-card__nav-image-container">
                                                    <div class="product-card__nav-image">
                                                        <img src="{{ Storage::url($product_image->image ?? null) }}"
                                                            alt="Кровать">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="product-card__slider-controls-block">
                                <div class="product-card__slider-controls">
                                    <div class="product-card__slider-controls-item">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.9992 41.925C14.0992 41.925 6.07422 33.9 6.07422 24C6.07422 14.1 14.0992 6.07501 23.9992 6.07501C33.8992 6.07501 41.9242 14.1 41.9242 24C41.9242 33.9 33.8992 41.925 23.9992 41.925ZM23.9992 8.02501C15.2242 8.02501 8.02422 15.225 8.02422 24C8.02422 32.775 15.2242 39.975 23.9992 39.975C32.7742 39.975 39.9742 32.775 39.9742 24C39.9742 15.225 32.7742 8.02501 23.9992 8.02501V8.02501Z" />
                                            <path
                                                d="M24.3746 34.275L14.0996 24L24.3746 13.725L25.7246 15.15L16.9496 24L25.7246 32.85L24.3746 34.275" />
                                            <path d="M15.5234 22.95H33.5234V25.05H15.5234V22.95Z" />
                                        </svg>
                                    </div>
                                    <div class="product-card__slider-controls-item">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.0008 41.925C33.9008 41.925 41.9258 33.9 41.9258 24C41.9258 14.1 33.9008 6.07501 24.0008 6.07501C14.1008 6.07501 6.07578 14.1 6.07578 24C6.07578 33.9 14.1008 41.925 24.0008 41.925ZM24.0008 8.02501C32.7758 8.02501 39.9758 15.225 39.9758 24C39.9758 32.775 32.7758 39.975 24.0008 39.975C15.2258 39.975 8.02578 32.775 8.02578 24C8.02578 15.225 15.2258 8.02501 24.0008 8.02501V8.02501Z" />
                                            <path
                                                d="M23.6254 34.275L33.9004 24L23.6254 13.725L22.2754 15.15L31.0504 24L22.2754 32.85L23.6254 34.275" />
                                            <path d="M32.4766 22.95H14.4766V25.05H32.4766V22.95Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card__block">
                        <div class="product-card__price">{{ $product->price }}₽</div>
                        <div class="product-card__links">
                            <a href="" class="product-card__btn btn">Отправить заявку</a>
                            @if ($product->instruction)
                                <a href="{{ Storage::url($product->instruction ?? null) }}"
                                    class="product-card__btn btn transparent">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
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
    </section>


    <section class="attributes">
        <div class="cw">
            <div class="product-card__attributes attributes">
                <div class="attributes__header">
                    <div data-tab="1" class="attributes__title title checked">
                        Характеристики
                    </div>
                    <div data-tab="2" class="attributes__title title">
                        Описание
                    </div>
                </div>
                <div class="attributes__content">
                    <div class="attributes__list-container attributes__content-block showed" data-tab="1">
                        <ul class="attributes__list">
                            @if ($product->material)
                                <li class="attributes__item attribute">
                                    <span class="attribute__name">
                                        Материал
                                    </span>
                                    <span class="attribute__value">
                                        {{ $product->material }}
                                    </span>
                                </li>
                            @endif
                            @if ($product->color)
                                <li class="attributes__item attribute">
                                    <span class="attribute__name">
                                        Цвет
                                    </span>
                                    <span class="attribute__value">
                                        {{ $product->color }}
                                    </span>
                                </li>
                            @endif
                            @if ($product->patina)
                                <li class="attributes__item attribute">
                                    <span class="attribute__name">
                                        Патина
                                    </span>
                                    <span class="attribute__value">
                                        {{ $product->patina }}
                                    </span>
                                </li>
                            @endif
                            @if ($product->made_in)
                                <li class="attributes__item attribute">
                                    <span class="attribute__name">
                                        Производство
                                    </span>
                                    <span class="attribute__value">
                                        {{ $product->made_in }}
                                    </span>
                                </li>
                            @endif
                            @if ($product->bed_size)
                                <li class="attributes__item attribute">
                                    <span class="attribute__name">
                                        Размеры (ДxШxВ)
                                    </span>
                                    <span class="attribute__value">
                                        {{ $product->bed_size }}
                                    </span>
                                </li>
                            @endif

                            @if ($product->additional_specifications)
                                @foreach ($product->additional_specifications as $specification)
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
                    <div class="attributes__desc attributes__content-block" data-tab="2">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="products">
        <div class="cw">
            <div class="products__wrapper">
                <div class="products__header section-header">
                    <h2 class="section-subtitle">В комплект входит</h2>
                </div>
                <div class="products__container">

                    @foreach ($product->collection->products as $collection_product)
                        <div class="products__item product">
                            <div class="product__container">
                                <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="product__image">
                                    <img src="{{ Storage::url($collection_product->images->first()->image ?? null) }}" alt="Кроватка">
                                </a>
                                <div class="product__info-block">
                                    <div class="product__info">
                                        <a href="{{ route('product_detail', ['slug' => $collection_product->slug]) }}" class="product__name">
                                            {{ $collection_product->name }}
                                        </a>
                                        <a href="{{ route('collection_detail', ['slug' => $collection_product->collection->slug]) }}" class="product__category">
                                            {{ $collection_product->collection->name }}
                                        </a>
                                    </div>
                                    <div class="product__links">
                                        @if ($collection_product->size)
                                            <div class="product__size-container">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M25.4082 18.944H16.9922L25.4402 12.928C25.6962 12.768 25.8562 12.48 25.8882 12.192C26.0162 11.968 26.0802 11.712 26.0802 11.456V8.79995C26.0802 7.90395 25.3442 7.19995 24.4802 7.19995H6.59219C5.69619 7.19995 4.99219 7.93595 4.99219 8.79995V11.456C4.99219 12.352 5.72819 13.056 6.59219 13.056H15.1362L6.46419 19.264C6.08019 19.552 5.88819 20 5.92019 20.448V23.2C5.92019 24.096 6.65619 24.8 7.52019 24.8H25.4082C26.3042 24.8 27.0082 24.064 27.0082 23.2V20.544C27.0082 19.648 26.3042 18.944 25.4082 18.944ZM5.63219 11.456V8.79995C5.63219 8.25595 6.08019 7.83995 6.59219 7.83995H24.4802C25.0242 7.83995 25.4402 8.28795 25.4402 8.79995V11.456C25.4402 11.616 25.3762 11.776 25.3122 11.936C25.2482 12.096 25.1202 12.192 24.9922 12.288C24.9922 12.288 24.9602 12.32 24.9282 12.32C24.8642 12.352 24.8322 12.384 24.7682 12.384C24.7362 12.384 24.7362 12.384 24.7042 12.416C24.6402 12.448 24.5442 12.448 24.4802 12.448H24.0002V11.808C24.0002 11.616 23.8722 11.488 23.6802 11.488C23.4882 11.488 23.3602 11.616 23.3602 11.808V12.448H21.6642V11.104C21.6642 10.912 21.5362 10.784 21.3442 10.784C21.1522 10.784 21.0242 10.912 21.0242 11.104V12.448H19.3282V11.808C19.3282 11.616 19.2002 11.488 19.0082 11.488C18.8162 11.488 18.6882 11.616 18.6882 11.808V12.448H16.9922V11.104C16.9922 10.912 16.8642 10.784 16.6722 10.784C16.4802 10.784 16.3522 10.912 16.3522 11.104V12.448H14.6562V11.808C14.6562 11.616 14.5282 11.488 14.3362 11.488C14.1442 11.488 14.0162 11.616 14.0162 11.808V12.448H12.3202V11.104C12.3202 10.912 12.1922 10.784 12.0002 10.784C11.8082 10.784 11.6802 10.912 11.6802 11.104V12.448H9.98419V11.808C9.98419 11.616 9.85619 11.488 9.66419 11.488C9.47219 11.488 9.34419 11.616 9.34419 11.808V12.448H8.00019V11.104C8.00019 10.912 7.87219 10.784 7.68019 10.784C7.48819 10.784 7.36019 10.912 7.36019 11.104V12.448H6.52819C6.04819 12.416 5.63219 12 5.63219 11.456ZM26.3682 23.2C26.3682 23.744 25.9202 24.16 25.4082 24.16H24.9602V23.52C24.9602 23.328 24.8322 23.2 24.6402 23.2C24.4482 23.2 24.3202 23.328 24.3202 23.52V24.16H22.6242V22.816C22.6242 22.624 22.4962 22.496 22.3042 22.496C22.1122 22.496 21.9842 22.624 21.9842 22.816V24.16H20.2882V23.52C20.2882 23.328 20.1602 23.2 19.9682 23.2C19.7762 23.2 19.6482 23.328 19.6482 23.52V24.16H17.9522V22.816C17.9522 22.624 17.8242 22.496 17.6322 22.496C17.4402 22.496 17.3122 22.624 17.3122 22.816V24.16H15.6162V23.52C15.6162 23.328 15.4882 23.2 15.2962 23.2C15.1042 23.2 14.9762 23.328 14.9762 23.52V24.16H13.2802V22.816C13.2802 22.624 13.1522 22.496 12.9602 22.496C12.7682 22.496 12.6402 22.624 12.6402 22.816V24.16H10.9442V23.52C10.9442 23.328 10.8162 23.2 10.6242 23.2C10.4322 23.2 10.3042 23.328 10.3042 23.52V24.16H8.60819V22.816C8.60819 22.624 8.48019 22.496 8.28819 22.496C8.09619 22.496 7.96819 22.624 7.96819 22.816V24.16H7.52019C6.97619 24.16 6.56019 23.712 6.56019 23.2V20.544C6.56019 20.48 6.56019 20.416 6.59219 20.384V20.352C6.59219 20.288 6.62419 20.256 6.62419 20.224V20.192C6.65619 20.16 6.65619 20.096 6.68819 20.064C6.68819 20.064 6.68819 20.032 6.72019 20.032C6.75219 20 6.78419 19.936 6.81619 19.904L6.84819 19.872C6.88019 19.84 6.94419 19.808 6.97619 19.776C7.00819 19.744 7.07219 19.712 7.13619 19.68C7.26419 19.616 7.39219 19.616 7.52019 19.616H25.4082C25.9522 19.616 26.3682 20.064 26.3682 20.576V23.2Z"
                                                        fill="#36393B" />
                                                </svg>
                                                <div class="product__size">
                                                    <span>ДxШxВ — </span>
                                                    <span>{{ $collection_product->size }}</span>
                                                </div>
                                            </div>
                                        @endif
                                        <a href="{{ route('product_detail', ['slug' => $collection_product->slug]) }}"
                                            class="product__btn btn transparent">Смотреть</a>

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

    <div class="js">
        <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script>
            let slider = tns({
                container: '.product-card__slider',
                mode: 'carousel',
                autoplay: false,
                items: 2,
                loop: false,
                fixedWidth: 192,
                navAsThumbnails: true,
                center: true,
                autoplayTimeout: 10000,
                arrowKeys: false,
                speed: 500,
                autoplayButtonOutput: false,
                mouseDrag: true,
                controlsPosition: 'bottom',
                controls: true,
                controlsContainer: '.product-card__slider-controls',
                nav: true,
                navContainer: '.product-card__slider-nav',
                responsive: {
                    481: {
                        fixedWidth: 250,
                    },
                    768: {
                        fixedWidth: false,
                    }
                }
            });


            slider.getInfo().slideItems[slider.getInfo().index].classList.add('current');
            document.querySelector('.product-card__nav-item[data-nav="0"]').classList.add('tns-nav-selected');


            slider.events.on('indexChanged', () => {
                const info = slider.getInfo();
                const indexCurr = info.index;

                document.querySelectorAll('.product-card__slider-item').forEach(function(e) {
                    e.classList.remove('current');
                });
                info.slideItems[indexCurr].classList.add('current');


                document.querySelectorAll('.product-card__nav-item').forEach(function(e) {
                    e.classList.remove('tns-nav-selected');
                });
                document.querySelector('.product-card__nav-item[data-nav="' + indexCurr + '"]').classList.add(
                    'tns-nav-selected');
            });

            let sliderNav = tns({
                container: '.product-card__slider-nav',
                mode: 'carousel',
                autoplay: false,
                items: 2,
                gutter: 8,
                loop: false,
                rewind: false,
                autoplayTimeout: 10000,
                arrowKeys: false,
                speed: 1000,
                autoplayButtonOutput: false,
                mouseDrag: true,
                controlsPosition: 'bottom',
                controls: false,
                nav: false,
                navPosition: 'right',
                responsive: {
                    768: {
                        items: 4,
                        gutter: 12,
                    }
                }
            });

            slider.events.on('transitionStart', function(e) {
                sliderNav.goTo(e.index - 1);
            });
        </script>
    </div>
@endsection
