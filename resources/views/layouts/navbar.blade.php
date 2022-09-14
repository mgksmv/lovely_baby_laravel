<header>
    <div class="cw">
        <div class="header">

            <a href="{{ route('home') }}" class="header__logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Логотип">
            </a>

            <div class="header__nav-container">
                <ul class="header__nav">
                    <li class="header__nav-category"><a href="{{ route('home') }}">Главная</a></li>
                    <li class="header__nav-category composite">
                        <a href="{% url 'catalog' %}">Каталог</a>
                        <ul>
                            <li class="header__nav-subcategory composite">
                                <a href="{{ route('collections') }}">
                                    <div class="icon-frame">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.9019 5.50971L13.5 5.5901V6V14V14.4099L13.9019 14.4903L18.9019 15.4903L19.5 15.6099V15V5V4.3901L18.9019 4.50971L13.9019 5.50971Z" fill="url(#paint0_linear_364_600)" stroke="#93C3C9"/>
                                            <path d="M1.09806 4.50971L0.5 4.3901V5V15V15.6099L1.09806 15.4903L6.09806 14.4903L6.5 14.4099V14V6V5.5901L6.09806 5.50971L1.09806 4.50971Z" fill="url(#paint1_linear_364_600)" stroke="#93C3C9"/>
                                            <mask id="path-3-inside-1_364_600" fill="white">
                                                <path d="M4 5H16V15H4V5Z"/>
                                            </mask>
                                            <path d="M4 5H16V15H4V5Z" fill="white"/>
                                            <path d="M15 5V15H17V5H15ZM5 15V5H3V15H5Z" fill="#93C3C9" mask="url(#path-3-inside-1_364_600)"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_364_600" x1="19" y1="10" x2="10" y2="10" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_364_600" x1="1" y1="10" x2="10" y2="10" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <span>Комплекты</span>
                                </a>
                                <ul>
                                    @foreach ($collections_context as $collection)
                                        <li><a href="{{ route('collection_detail', ['slug' => $collection->slug]) }}">{{ $collection->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            @foreach ($categories_context as $category)
                                <li class="header__nav-subcategory">
                                    <a href="{{ route('category_detail', ['slug' => $category->slug]) }}">
                                        <div class="icon-frame">
                                            <img src="{{ Storage::url($category->image) ?? '' }}" alt="">
                                        </div>
                                        <span>{{ $category->name }}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="header__nav-category"><a href="{{ route('about') }}">О компании</a></li>
                    <li class="header__nav-category"><a href="{{ route('contacts') }}">Контакты</a></li>
                </ul>
            </div>

            <div class="header__feedback-btn">
                <a href="" class="btn">Стать партнером</a>
            </div>

            <a href="" class="mobile-menu-btn">
                <div class="line-container">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>

            <div class="mobile-menu">
                <div class="cw">
                    <div class="mobile-menu__container">

                    </div>
                </div>

            </div>

        </div>
    </div>
</header>