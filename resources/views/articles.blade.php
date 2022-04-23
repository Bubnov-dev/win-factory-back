@extends('layout')

@section('h1')
    Статьи
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="breadcrumbs">
                <div class="breadcrumbs__item">Главная</div>
                <div class="breadcrumbs__delimetr">/</div>
                <div class="breadcrumbs__item breadcrumbs__item--last">Статьи</div>
            </div>
            <h2 class="h2">Статьи</h2>

            <div class="articles-list">
                @for($i = 0; min(6, $i<count($data)); $i++)
                    <div class="articles-item">
                        <a href="/articles/{{ $data[$i]['id']}}" class="articles-item__photo">
                            <picture>
                                <source srcset="{{ $data[$i]['main_img'] }}" type="image/webp">
                                <img src="{{ $data[$i]['main_img'] }}" alt=""/></picture>
                        </a>
                        <a href="" class="articles-item__title">
                            {{ $data[$i]['title'] }}
                        </a>
                        <div class="articles-item__desc">
                            {{ $data[$i]['description'] }}
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="banner-measuring">
            <div class="container">
                <div class="banner-measuring__title">Бесплатный замер</div>
                <form action="{{ route('request') }}" method="post" class="banner-measuring__grid"
                      id="banner-measuring">
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
                <div id="banner-measuring-result-ok" style="display: none"><h3 style="color: white">Заявка успешно
                        отправлена</h3></div>
            </div>
        </div>

        <div class="container">
            @if(count($data)>6)
                <div class="articles-list">
                    @for($i = 6; min(12, $i<count($data)); $i++)
                        <div class="articles-item">
                            <a href="/articles/{{ $data[$i]['id']}}" class="articles-item__photo">
                                <picture>
                                    <source srcset="{{ $data[$i]['main_img'] }}" type="image/webp">
                                    <img src="{{ $data[$i]['main_img'] }}" alt=""/></picture>
                            </a>
                            <a href="" class="articles-item__title">
                                {{ $data[$i]['title'] }}
                            </a>
                            <div class="articles-item__desc">
                                {{ $data[$i]['description'] }}
                            </div>
                        </div>
                    @endfor
                </div>
            @endif

            <div class="paginate">
                @if($current_page>1)
                    <a href="{{ $prev_page_url }}" class="paginate-item">
                        <svg
                            width="11"
                            height="20"
                            viewBox="0 0 11 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M0.461776 9.74459L9.20358 1.02696C9.49 0.741505 9.95371 0.741985 10.2396 1.02844C10.5254 1.31485 10.5246 1.77882 10.2382 2.0645L2.0167 10.2633L10.2385 18.462C10.5249 18.7477 10.5256 19.2114 10.2399 19.4978C10.0966 19.6414 9.90882 19.7132 9.72104 19.7132C9.53374 19.7132 9.3467 19.6419 9.20362 19.4993L0.461776 10.7819C0.323829 10.6447 0.24642 10.4579 0.24642 10.2633C0.24642 10.0687 0.32405 9.88209 0.461776 9.74459Z"
                                fill="#000"
                            />
                            <defs>
                                <linearGradient
                                    id="paint0_linear_7_1173"
                                    x1="5.35008"
                                    y1="0.813232"
                                    x2="5.35008"
                                    y2="19.7132"
                                    gradientUnits="userSpaceOnUse"
                                >
                                    <stop stop-color="#000"/>
                                    <stop offset="0.588542" stop-color="#000"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <a href="{{ $prev_page_url }}" class="paginate-item">{{$current_page-1}}</a>

                @endif
                <div class="paginate-item">{{$current_page}}</div>

                @if($current_page<$last_page)
                    <a href="{{$next_page_url}}" class="paginate-item">{{$current_page+1}}</a>

                    <a href="{{$next_page_url}}" class="paginate-item">
                        <svg
                            width="11"
                            height="20"
                            viewBox="0 0 11 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M10.5381 9.74459L1.7963 1.02696C1.50988 0.741505 1.04617 0.741985 0.760235 1.02844C0.474521 1.31485 0.47526 1.77882 0.761711 2.0645L8.98318 10.2633L0.761416 18.462C0.475001 18.7477 0.474263 19.2114 0.759939 19.4978C0.903276 19.6414 1.09106 19.7132 1.27884 19.7132C1.46614 19.7132 1.65318 19.6419 1.79626 19.4993L10.5381 10.7819C10.676 10.6447 10.7535 10.4579 10.7535 10.2633C10.7535 10.0687 10.6758 9.88209 10.5381 9.74459Z"
                                fill="black"
                            />
                        </svg>
                    </a>
                @endif
            </div>
        </div>

    </main>
@endsection
