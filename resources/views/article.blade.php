@extends('layout')

@section('h1')
    Статьи
@endsection
@section('descriprion'){{ $article->meta_description }}@endsection
@section('content')
    <main>
        <div class="container">
            <div class="breadcrumbs">
                <div class="breadcrumbs__item">Главная</div>
                <div class="breadcrumbs__delimetr">/</div>
                <div class="breadcrumbs__item breadcrumbs__item">статьи</div>
                <div class="breadcrumbs__delimetr">/</div>
                <div class="breadcrumbs__item breadcrumbs__item--last">{{ $article->title }}</div>
            </div>
            <div class="article">
                <div class="article-content">
                    <h2 class="h2">{{ $article->title }}</h2>
                    <picture><source srcset="{{ $article->main_img }}p" type="image/webp"><img src="{{ $article->main_img }}" alt="" /></picture>


                    {!! $article->content !!}
                </div>
                <div class="article-right">
                    <h3 class="article-right__title">Читайте также</h3>
                    <div class="article-right__list">
                        @foreach($lastArticles as $item)
                        <div class="articles-item">
                            <a href="{{ $item->id }}" class="articles-item__photo">
                                <picture><source srcset="{{ $item->main_img }}" type="image/webp"><img src="{{ $item->main_img }}" alt="" /></picture>
                            </a>
                            <a href="" class="articles-item__title">
                                {{ $item->title }}
                            </a>
                            <div class="articles-item__desc">
                                {{ $item->description }}
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
