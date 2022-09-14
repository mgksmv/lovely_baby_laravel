@extends('layouts.base')

@section('title')
    Контакты
@endsection

@section('content')
    <section class="contacts">
        <div class="cw">
            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="breadcrumbs__item active"><a href="">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="contacts__wrapper">
                <div class="contacts__container">
                    <div class="contacts__main">
                        <div class="contacts__left">
                            <h1 class="contacts__title title">
                                Контакты
                            </h1>
                            <div class="contacts__block">
                                <a href="" class="contacts__item">
                                    <div class="contacts__item-icon">
                                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8 10C8.55 10 9.021 9.804 9.413 9.412C9.80433 9.02067 10 8.55 10 8C10 7.45 9.80433 6.979 9.413 6.587C9.021 6.19567 8.55 6 8 6C7.45 6 6.97933 6.19567 6.588 6.587C6.196 6.979 6 7.45 6 8C6 8.55 6.196 9.02067 6.588 9.412C6.97933 9.804 7.45 10 8 10ZM8 20C5.31667 17.7167 3.31267 15.5957 1.988 13.637C0.662667 11.679 0 9.86667 0 8.2C0 5.7 0.804333 3.70833 2.413 2.225C4.021 0.741667 5.88333 0 8 0C10.1167 0 11.979 0.741667 13.587 2.225C15.1957 3.70833 16 5.7 16 8.2C16 9.86667 15.3377 11.679 14.013 13.637C12.6877 15.5957 10.6833 17.7167 8 20Z" />
                                        </svg>
                                    </div>
                                    <span>г. Махачкала, пр. Шамиля 31г</span>
                                </a>
                                <a href="tel:88002000600" class="contacts__item">
                                    <div class="contacts__item-icon">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.05 18C0.75 18 0.5 17.9 0.3 17.7C0.0999999 17.5 0 17.25 0 16.95V12.9C0 12.6667 0.0749999 12.4623 0.225 12.287C0.375 12.1123 0.566667 12 0.8 11.95L4.25 11.25C4.48333 11.2167 4.721 11.2373 4.963 11.312C5.20433 11.3873 5.4 11.5 5.55 11.65L7.9 14C9.16667 13.2333 10.325 12.325 11.375 11.275C12.425 10.225 13.3 9.1 14 7.9L11.6 5.45C11.45 5.3 11.354 5.129 11.312 4.937C11.2707 4.74567 11.2667 4.53333 11.3 4.3L11.95 0.8C11.9833 0.566667 12.0917 0.375 12.275 0.225C12.4583 0.0749999 12.6667 0 12.9 0H16.95C17.25 0 17.5 0.0999999 17.7 0.3C17.9 0.5 18 0.75 18 1.05C18 3.2 17.5207 5.29567 16.562 7.337C15.604 9.379 14.3373 11.1873 12.762 12.762C11.1873 14.3373 9.37933 15.604 7.338 16.562C5.296 17.5207 3.2 18 1.05 18Z" />
                                        </svg>
                                    </div>
                                    <span>8 (800) 200 06 00</span>
                                </a>
                                <a href="mailto:support@lovelybaby.ru" class="contacts__item">
                                    <div class="contacts__item-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 20C8.63333 20 7.34167 19.7373 6.125 19.212C4.90833 18.6873 3.846 17.9707 2.938 17.062C2.02933 16.154 1.31267 15.0917 0.788 13.875C0.262667 12.6583 0 11.3667 0 10C0 8.61667 0.262667 7.321 0.788 6.113C1.31267 4.90433 2.02933 3.846 2.938 2.938C3.846 2.02933 4.90833 1.31233 6.125 0.787C7.34167 0.262333 8.63333 0 10 0C11.3833 0 12.679 0.262333 13.887 0.787C15.0957 1.31233 16.154 2.02933 17.062 2.938C17.9707 3.846 18.6873 4.90433 19.212 6.113C19.7373 7.321 20 8.61667 20 10V11.45C20 12.4333 19.6627 13.2707 18.988 13.962C18.3127 14.654 17.4833 15 16.5 15C15.9 15 15.3417 14.8667 14.825 14.6C14.3083 14.3333 13.8833 13.9833 13.55 13.55C13.1 14 12.571 14.3543 11.963 14.613C11.3543 14.871 10.7 15 10 15C8.61667 15 7.43767 14.5123 6.463 13.537C5.48767 12.5623 5 11.3833 5 10C5 8.61667 5.48767 7.43733 6.463 6.462C7.43767 5.48733 8.61667 5 10 5C11.3833 5 12.5627 5.48733 13.538 6.462C14.5127 7.43733 15 8.61667 15 10V11.45C15 11.9333 15.15 12.3123 15.45 12.587C15.75 12.8623 16.1 13 16.5 13C16.9 13 17.25 12.8623 17.55 12.587C17.85 12.3123 18 11.9333 18 11.45V10C18 7.81667 17.2123 5.93733 15.637 4.362C14.0623 2.78733 12.1833 2 10 2C7.81667 2 5.93733 2.78733 4.362 4.362C2.78733 5.93733 2 7.81667 2 10C2 12.1833 2.78733 14.0623 4.362 15.637C5.93733 17.2123 7.81667 18 10 18H15V20H10ZM10 13C10.8333 13 11.5417 12.7083 12.125 12.125C12.7083 11.5417 13 10.8333 13 10C13 9.16667 12.7083 8.45833 12.125 7.875C11.5417 7.29167 10.8333 7 10 7C9.16667 7 8.45833 7.29167 7.875 7.875C7.29167 8.45833 7 9.16667 7 10C7 10.8333 7.29167 11.5417 7.875 12.125C8.45833 12.7083 9.16667 13 10 13Z" />
                                        </svg>

                                    </div>
                                    <span>support@lovelybaby.ru</span>
                                </a>
                            </div>
                        </div>
                        <div class="contacts__right">
                            <div class="contacts__map">
                                <img src="{{ asset('assets/images/map.png') }}" alt="Карта">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacts__feedback">
                    <div class="contacts__feedback-header">
                        <div class="contacts__feedback-title">
                            Хотите получить коммерческое предложение?
                        </div>
                        <div class="contacts__feedback-subtitle">
                            Оставьте ваш номер или email
                        </div>
                    </div>
                    <div class="contacts__feedback-container">
                        <form action="">
                            <div class="contacts__feedback-form">
                                <div class="form-field">
                                    <input type="text" placeholder="Введите имя">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Введите номер или email">
                                </div>
                                <div class="form-field">
                                    <input type="submit" value="Отправить заявку" class="btn black">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
