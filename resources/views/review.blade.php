@extends('layout')

@section('h1')
    Отзывы
@endsection
@section('descriprion'){{ $review->meta_description }}@endsection

@section('content')


    <main class="open-review">
        <div class="container">
            <div class="breadcrumbs">
                <div class="breadcrumbs__item">Главная</div>
                <div class="breadcrumbs__delimetr">/</div>
                <div class="breadcrumbs__item breadcrumbs__item--last">Отзывы</div>
            </div>

            <h2>{{ $review['title'] }}</h2>
        </div>
        <section class="open-review__main">
            <div class="container">
                <div class="open-review__main-left">
                    <div class="open-review__gallery sincing-slider">
                        <div class="open-review__gallery-open gallery-open">
                            @foreach($review['images'] as $image)
                            <div class="open-slide">
                                <picture>
                                    <source srcset="{{$image}}" type="image/webp">
                                    <img loading="lazy" src="{{ $image }}"/></picture>
                            </div>
                            @endforeach
                        </div>
                        <div class="open-review__gallery-carousel gallery-carousel">
                            @foreach($review['images'] as $image)
                                <div class="carousel-slide">
                                    <picture>
                                        <source srcset="{{$image}}" type="image/webp">
                                        <img loading="lazy" src="{{ $image }}"/></picture>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="open-review__main-right">
                    {!! $review['content'] !!}
                </div>
            </div>
        </section>

        <div class="banner-measuring">
            <div class="container">
                <div class="banner-measuring__title">Бесплатный замер</div>
                <form action="{{ route('request') }}" method="post" class="banner-measuring__grid" id="banner-measuring">
                    {!! csrf_field() !!}
                    <input type="hidden" name="form_name" value="setRequestMain">
                    <input type="text" placeholder="Ваше имя" name="name"/>
                    <input type="text" placeholder="Телефон" name="phone"/>
                    <div class="checkbox">
                        <input type="checkbox" name="" id="agreement"/>
                        <label for="agreement">
                            Я согласен с политикой конфиденциальности
                        </label>
                    </div>
                    <input type="submit" class="btn" value="Записаться">
                </form>
                <div id="banner-measuring-result-ok" style="display: none"><h3 style="color: white">Заявка успешно отправлена</h3></div>
            </div>
        </div>

        <section class="reviews services ">
            <h2>Другие отзывы пользователей:</h2>
            <div class="container">
                <div class="reviews__items">
                    @foreach($lastReviews as $_review)
                    <div>
                        <div class="reviews-item">
                            <div class="reviews__photo">
                                <picture>
                                    <img src="{{ $_review['images'][0] }}" alt="reviews__photo"/></picture>
                            </div>
                            <div class="reviews__header">
                                <h4 class="reviews__name">{{ $_review['name'] }}</h4>
                                <div class="reviews__city">{{ $_review['city'] }}</div>
                                <div class="reviews__date">{{ $_review['date'] }}</div>
                            </div>
                            <div class="reviews__content">
                                <div>

                                {!!  $_review['content'] !!}
                                </div>

                            </div>

                            <a href="/reviews/{{ $_review['id'] }}" class="btn reviews__btn">Подробнее</a>
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </section>

    </main>
    <script>
        $(document).ready(function () {
            if ($(window).width() >= "1440") {
                $(".reviews__items").slick({
                    slidesToShow: 3,
                    variableWidth: false,
                    dots: false,

                    prevArrow:
                        '<div class="arrow-prev arrow"></div>',
                    nextArrow:
                        '<div class="arrow-next arrow"></div>',
                    infinite: false,
                });
            } else if ($(window).width() >= "1200") {
                $(".reviews__items").slick({
                    slidesToShow: 2.5,
                    variableWidth: false,
                    dots: false,

                    prevArrow:
                        '<div class="arrow-prev arrow"></div>',
                    nextArrow:
                        '<div class="arrow-next arrow"></div>',

                    infinite: false,
                });
            } else if ($(window).width() >= "1024") {
                $(".reviews__items").slick({
                    slidesToShow: 2,
                    variableWidth: false,
                    dots: false,

                    prevArrow:
                        '<div class="arrow-prev arrow"></div>',
                    nextArrow:
                        '<div class="arrow-next arrow"></div>',

                    infinite: false,
                });
            } else if ($(window).width() >= "768") {
                $(".reviews__items").slick({
                    slidesToShow: 1.6,
                    variableWidth: false,
                    dots: false,

                    prevArrow:
                        '<div class="arrow-prev arrow"></div>',
                    nextArrow:
                        '<div class="arrow-next arrow"></div>',

                    infinite: false,
                });
            } else if ($(window).width() >= "568") {
                $(".reviews__items").slick({
                    slidesToShow: 1.2,
                    variableWidth: false,
                    dots: false,

                    dots: true,
                    arrows: false,
                    infinite: false,
                });
            } else if ($(window).width() >= "360") {
                $(".reviews__items").slick({
                    slidesToShow: 1,
                    variableWidth: false,

                    dots: true,
                    arrows: false,
                    infinite: false,
                });
            } else if ($(window).width() < "360") {
                $(".reviews__items").slick({
                    slidesToShow: 1,
                    variableWidth: false,
                    dots: false,

                    prevArrow:
                        '<div class="arrow-prev arrow"></div>',
                    nextArrow:
                        '<div class="arrow-next arrow"></div>',

                    infinite: false,
                });
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            if ($(window).width() >= "1440") {
                $(".gallery-open").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow:
                        '<div class="arrow-prev arrow"><picture><source srcset="/img/prev.svg" type="image/webp"><img src="/img/prev.svg"></picture></div>',
                    nextArrow:
                        '<div class="arrow-next arrow"><picture><source srcset="/img/next.svg" type="image/webp"><img src="/img/next.svg"></picture></div>',
                    fade: true,
                    asNavFor: ".gallery-carousel",
                });
                $(".gallery-carousel").slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    centerMode: true,
                    focusOnSelect: true,
                    infinite: true,
                    asNavFor: ".gallery-open",
                });
            } else if ($(window).width() >= "1024") {
                $(".gallery-carousel").slick({
                    slidesToShow: 2.3,
                    slidesToScroll: 1,
                    variableWidth: false,
                    dots: true,
                    infinite: false,
                });
            } else if ($(window).width() >= "1200") {
                $(".gallery-carousel").slick({
                    slidesToShow: 2.5,
                    slidesToScroll: 1,
                    variableWidth: false,
                    dots: true,
                    infinite: false,
                });
            } else if ($(window).width() >= "768") {
                $(".gallery-carousel").slick({
                    slidesToShow: 1.6,
                    variableWidth: false,
                    arrows: false,
                    dots: true,
                    infinite: false,
                });
            } else if ($(window).width() >= "568") {
                $(".gallery-carousel").slick({
                    slidesToShow: 1.4,
                    variableWidth: false,
                    arrows: false,
                    dots: true,
                    infinite: false,
                });
            } else if ($(window).width() >= "414") {
                $(".gallery-carousel").slick({
                    slidesToShow: 1.2,
                    variableWidth: false,
                    arrows: false,
                    dots: true,
                    infinite: false,
                });
            } else if ($(window).width() >= "360") {
                $(".gallery-carousel").slick({
                    slidesToShow: 1.1,
                    variableWidth: false,
                    arrows: false,
                    dots: true,
                    infinite: false,
                });
            } else if ($(window).width() < "360") {
                $(".gallery-carousel").slick({
                    slidesToShow: 1,
                    variableWidth: false,
                    arrows: false,
                    dots: true,
                    infinite: false,
                });
            }
        });
    </script>
@endsection
