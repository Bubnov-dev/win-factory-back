@php
    $type = "window";
@endphp

@extends('layout')

@section('title')
    Остекление домов и коттеджей во Владивостоке, Артёме, Уссурийске | Оконный Завод
@endsection

@section('descriprion')
    Остекление загородных домов, терасс, коттеджей во Владивостоке, Артёме и Уссурийске. Недорого. Цены от 5600 рублей за м2
@endsection

@section('h1')
    Окна для домов и коттеджей
@endsection

@section('more_js')
    <script type="text/javascript" src="js/window.js"></script>
    <script type="text/javascript" src="js/options.js"></script>
    <script type="text/javascript" src="js/balconies.js"></script>
@endsection

@section('content')
    <main class="window">
        <section class="window__services services old-sec white-sec">
            <div class="container">
                <h2>Возможности остекления</h2>
                <div class="services-content">
                    <div class="services__tabs">
                        <div class="tab tab-active" id="service-tab-1"><span>Панорамные<br>витражи</span></div>
                        <div class="tabs-line" id="tab-line-2"></div>
                        <div class="tab" id="service-tab-2"><span>Ламинация.<br>Форма</span></div>
                        <div class="tabs-line" id="tab-line-3"></div>
                        <div class="tab" id="service-tab-3"><span>Декорирование<br>стеклопакета</span></div>
                        <div class="tabs-line" id="tab-line-4"></div>
                        <div class="tab" id="service-tab-4"><span>Энергосберегающие<br>окна и двери</span></div>
                    </div>
                    <div class="services-slider">
                        <div class="slide" id="service-1">
                            <div class="services__capability">
                                <div class="service__main">
                                    <h3>Панорамные витражи</h3>
                                    <p>Окна должны быть красивыми. Даже простые геометрические раскладки добавляют окну
                                        изящества.</p>
                                    <button class="btn">Бесплатный замер</button>
                                </div>
                                <div class="service__list">
                                    <ul>
                                        <li>
                                            <h4>Раскладка «солнышко»</h4>
                                            <p>Раскладка «солнышко» позволяет добиться гармоничного рисунка в арочных и
                                                сегментно-арочных окнах.</p>
                                        </li>
                                        <li>
                                            <h4>Декоративные вензеля</h4>
                                            <p>Декоративные вензеля придают объем прозрачному заполнению окна, а окну в
                                                целом -
                                                роскошный вид.</p>
                                        </li>
                                        <li>
                                            <h4>Окна с фальш-переплетом</h4>
                                            <p>Окна с фальш-переплетом визуально разделяют световой проем на декоративные
                                                части,
                                                сохраняя при этом цельность изделия.</p>
                                        </li>
                                        <li>
                                            <h4>Ламинация фальш-переплета</h4>
                                            <p>Ламинация фальш-переплета декоративными пленками в цвет окна помогает
                                                реализовать
                                                нестандартные дизайнерские идеи. Декоративный элемент «солнышко» в арочных
                                                окнах
                                                с использованием согнутого в форме арки фальш-переплета имитирует арочный
                                                переплет, выполненный из дерева.</p>
                                        </li>
                                        <li>
                                            <h4>Окна с витражным стеклом</h4>
                                            <p>Окна с витражным стеклом - самый эксклюзивный вариант декора. Каждое
                                                витражный
                                                рисунок - это авторская, единичная работа.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide" id="service-2">
                            <div class="services__capability">
                                <div class="service__main">
                                    <h3>Ламинация. Форма</h3>
                                    <p>Окна должны быть красивыми. Даже простые геометрические раскладки добавляют окну
                                        изящества.</p>
                                    <button class="btn">Бесплатный замер</button>
                                </div>
                                <div class="service__list">
                                    <ul>
                                        <li>
                                            <h4>Раскладка «солнышко»</h4>
                                            <p>Раскладка «солнышко» позволяет добиться гармоничного рисунка в арочных и
                                                сегментно-арочных окнах.</p>
                                        </li>
                                        <li>
                                            <h4>Декоративные вензеля</h4>
                                            <p>Декоративные вензеля придают объем прозрачному заполнению окна, а окну в
                                                целом -
                                                роскошный вид.</p>
                                        </li>
                                        <li>
                                            <h4>Окна с фальш-переплетом</h4>
                                            <p>Окна с фальш-переплетом визуально разделяют световой проем на декоративные
                                                части,
                                                сохраняя при этом цельность изделия.</p>
                                        </li>
                                        <li>
                                            <h4>Ламинация фальш-переплета</h4>
                                            <p>Ламинация фальш-переплета декоративными пленками в цвет окна помогает
                                                реализовать
                                                нестандартные дизайнерские идеи. Декоративный элемент «солнышко» в арочных
                                                окнах
                                                с использованием согнутого в форме арки фальш-переплета имитирует арочный
                                                переплет, выполненный из дерева.</p>
                                        </li>
                                        <li>
                                            <h4>Окна с витражным стеклом</h4>
                                            <p>Окна с витражным стеклом - самый эксклюзивный вариант декора. Каждое
                                                витражный
                                                рисунок - это авторская, единичная работа.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide" id="service-3">
                            <div class="services__capability">
                                <div class="service__main">
                                    <h3>Декорирование стеклопакета</h3>
                                    <p>Окна должны быть красивыми. Даже простые геометрические раскладки добавляют окну
                                        изящества.</p>
                                    <button class="btn">Бесплатный замер</button>
                                </div>
                                <div class="service__list">
                                    <ul>
                                        <li>
                                            <h4>Раскладка «солнышко»</h4>
                                            <p>Раскладка «солнышко» позволяет добиться гармоничного рисунка в арочных и
                                                сегментно-арочных окнах.</p>
                                        </li>
                                        <li>
                                            <h4>Декоративные вензеля</h4>
                                            <p>Декоративные вензеля придают объем прозрачному заполнению окна, а окну в
                                                целом -
                                                роскошный вид.</p>
                                        </li>
                                        <li>
                                            <h4>Окна с фальш-переплетом</h4>
                                            <p>Окна с фальш-переплетом визуально разделяют световой проем на декоративные
                                                части,
                                                сохраняя при этом цельность изделия.</p>
                                        </li>
                                        <li>
                                            <h4>Ламинация фальш-переплета</h4>
                                            <p>Ламинация фальш-переплета декоративными пленками в цвет окна помогает
                                                реализовать
                                                нестандартные дизайнерские идеи. Декоративный элемент «солнышко» в арочных
                                                окнах
                                                с использованием согнутого в форме арки фальш-переплета имитирует арочный
                                                переплет, выполненный из дерева.</p>
                                        </li>
                                        <li>
                                            <h4>Окна с витражным стеклом</h4>
                                            <p>Окна с витражным стеклом - самый эксклюзивный вариант декора. Каждое
                                                витражный
                                                рисунок - это авторская, единичная работа.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide" id="service-4">
                            <div class="services__capability">
                                <div class="service__main">
                                    <h3>Энергосберегающие окна и двери</h3>
                                    <p>Окна должны быть красивыми. Даже простые геометрические раскладки добавляют окну
                                        изящества.</p>
                                    <button class="btn">Бесплатный замер</button>
                                </div>
                                <div class="service__list">
                                    <ul>
                                        <li>
                                            <h4>Раскладка «солнышко»</h4>
                                            <p>Раскладка «солнышко» позволяет добиться гармоничного рисунка в арочных и
                                                сегментно-арочных окнах.</p>
                                        </li>
                                        <li>
                                            <h4>Декоративные вензеля</h4>
                                            <p>Декоративные вензеля придают объем прозрачному заполнению окна, а окну в
                                                целом -
                                                роскошный вид.</p>
                                        </li>
                                        <li>
                                            <h4>Окна с фальш-переплетом</h4>
                                            <p>Окна с фальш-переплетом визуально разделяют световой проем на декоративные
                                                части,
                                                сохраняя при этом цельность изделия.</p>
                                        </li>
                                        <li>
                                            <h4>Ламинация фальш-переплета</h4>
                                            <p>Ламинация фальш-переплета декоративными пленками в цвет окна помогает
                                                реализовать
                                                нестандартные дизайнерские идеи. Декоративный элемент «солнышко» в арочных
                                                окнах
                                                с использованием согнутого в форме арки фальш-переплета имитирует арочный
                                                переплет, выполненный из дерева.</p>
                                        </li>
                                        <li>
                                            <h4>Окна с витражным стеклом</h4>
                                            <p>Окна с витражным стеклом - самый эксклюзивный вариант декора. Каждое
                                                витражный
                                                рисунок - это авторская, единичная работа.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="products">
            <h2>Профильные системы</h2>

            <div class="slide-container">
                <div class="products__content">
                    <div class="products__wrapper">
                        <div class="products__item">
                            <picture>
                                <img src="/img/window/photo.webp" alt="photo">
                            </picture>


                            <h3>WHS 60 by VEKA</h3>

                            <div class="products__info">
                                <div class="products__info-item">
                                    <div class="products__info-name">Профиль</div>
                                    <div class="products__info-value">SLIDORS</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Стеклопакет</div>
                                    <div class="products__info-value">16 мм</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Фасад</div>
                                    <div class="products__info-value">3000х1500</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Торцы</div>
                                    <div class="products__info-value">900х1500</div>
                                </div>
                            </div>

                            <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                            <a href="" class="btn">Подробнее</a>
                        </div>
                    </div>

                    <div class="products__wrapper">
                        <div class="products__item">
                            <picture>
                                <img src="/img/window/photo.webp" alt="photo">
                            </picture>


                            <h3>WHS 60 by VEKA</h3>

                            <div class="products__info">
                                <div class="products__info-item">
                                    <div class="products__info-name">Профиль</div>
                                    <div class="products__info-value">SLIDORS</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Стеклопакет</div>
                                    <div class="products__info-value">16 мм</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Фасад</div>
                                    <div class="products__info-value">3000х1500</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Торцы</div>
                                    <div class="products__info-value">900х1500</div>
                                </div>
                            </div>

                            <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                            <a href="" class="btn">Подробнее</a>
                        </div>
                    </div>

                    <div class="products__wrapper">
                        <div class="products__item">
                            <picture>
                                <img src="/img/window/photo.webp" alt="photo">
                            </picture>


                            <h3>WHS 60 by VEKA</h3>

                            <div class="products__info">
                                <div class="products__info-item">
                                    <div class="products__info-name">Профиль</div>
                                    <div class="products__info-value">SLIDORS</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Стеклопакет</div>
                                    <div class="products__info-value">16 мм</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Фасад</div>
                                    <div class="products__info-value">3000х1500</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Торцы</div>
                                    <div class="products__info-value">900х1500</div>
                                </div>
                            </div>

                            <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                            <a href="" class="btn">Подробнее</a>
                        </div>
                    </div>

                    <div class="products__wrapper">
                        <div class="products__item">
                            <picture>
                                <img src="/img/window/photo.webp" alt="photo">
                            </picture>


                            <h3>WHS 60 by VEKA</h3>

                            <div class="products__info">
                                <div class="products__info-item">
                                    <div class="products__info-name">Профиль</div>
                                    <div class="products__info-value">SLIDORS</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Стеклопакет</div>
                                    <div class="products__info-value">16 мм</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Фасад</div>
                                    <div class="products__info-value">3000х1500</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Торцы</div>
                                    <div class="products__info-value">900х1500</div>
                                </div>
                            </div>

                            <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                            <a href="" class="btn">Подробнее</a>
                        </div>
                    </div>

                    <div class="products__wrapper">
                        <div class="products__item">
                            <picture>
                                <img src="/img/window/photo.webp" alt="photo">
                            </picture>


                            <h3>WHS 60 by VEKA</h3>

                            <div class="products__info">
                                <div class="products__info-item">
                                    <div class="products__info-name">Профиль</div>
                                    <div class="products__info-value">SLIDORS</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Стеклопакет</div>
                                    <div class="products__info-value">16 мм</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Фасад</div>
                                    <div class="products__info-value">3000х1500</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Торцы</div>
                                    <div class="products__info-value">900х1500</div>
                                </div>
                            </div>

                            <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                            <a href="" class="btn">Подробнее</a>
                        </div>
                    </div>

                    <div class="products__wrapper">
                        <div class="products__item">
                            <picture>
                                <img src="/img/window/photo.webp" alt="photo">
                            </picture>


                            <h3>WHS 60 by VEKA</h3>

                            <div class="products__info">
                                <div class="products__info-item">
                                    <div class="products__info-name">Профиль</div>
                                    <div class="products__info-value">SLIDORS</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Стеклопакет</div>
                                    <div class="products__info-value">16 мм</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Фасад</div>
                                    <div class="products__info-value">3000х1500</div>
                                </div>

                                <div class="products__info-item">
                                    <div class="products__info-name">Торцы</div>
                                    <div class="products__info-value">900х1500</div>
                                </div>
                            </div>

                            <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                            <a href="" class="btn">Подробнее</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="window__options options pink-sec">
            <div class="pop-up__wall">
                <div class="options__pop-up" id="pop-up-1">
                    <div class="pop-up">
                        <div class="pop-up__close-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3256 12.0008L23.7252 1.60119C24.0913 1.23505 24.0913 0.64143 23.7252 0.275337C23.359 -0.0907557 22.7654 -0.0908025 22.3993 0.275337L11.9997 10.6749L1.60022 0.275337C1.23408 -0.0908025 0.640454 -0.0908025 0.274361 0.275337C-0.0917323 0.641477 -0.0917791 1.2351 0.274361 1.60119L10.6739 12.0007L0.274361 22.4003C-0.0917791 22.7664 -0.0917791 23.3601 0.274361 23.7261C0.457407 23.9092 0.69736 24.0007 0.937313 24.0007C1.17727 24.0007 1.41717 23.9092 1.60026 23.7261L11.9997 13.3266L22.3993 23.7261C22.5823 23.9092 22.8223 24.0007 23.0622 24.0007C23.3022 24.0007 23.5421 23.9092 23.7252 23.7261C24.0913 23.36 24.0913 22.7664 23.7252 22.4003L13.3256 12.0008Z"
                                      fill="#041B35"/>
                            </svg>
                        </div>
                        <div class="pop-up__content">
                            <div class="pop-up__text">
                                <h3>Формы окон</h3>
                                <p>Одним из элементов оконного дизайна является форма оконного блока. Окна
                                    многоугольные, арочные относятся к оконным конструкциям нестандартной формы.
                                    Особенностью производства окон с непрямыми углами является индивидуальная
                                    комплектация заказа, точный просчет каждого элемента такой конструкции.</p>
                                <button class="btn">Бесплатный замер</button>
                            </div>
                            <div class="pop-up__photo">
                                <div class="image">
                                    <img src="./img/window/win-forms.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="options__pop-up" id="pop-up-2">
                    <div class="pop-up">
                        <div class="pop-up__close-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3256 12.0008L23.7252 1.60119C24.0913 1.23505 24.0913 0.64143 23.7252 0.275337C23.359 -0.0907557 22.7654 -0.0908025 22.3993 0.275337L11.9997 10.6749L1.60022 0.275337C1.23408 -0.0908025 0.640454 -0.0908025 0.274361 0.275337C-0.0917323 0.641477 -0.0917791 1.2351 0.274361 1.60119L10.6739 12.0007L0.274361 22.4003C-0.0917791 22.7664 -0.0917791 23.3601 0.274361 23.7261C0.457407 23.9092 0.69736 24.0007 0.937313 24.0007C1.17727 24.0007 1.41717 23.9092 1.60026 23.7261L11.9997 13.3266L22.3993 23.7261C22.5823 23.9092 22.8223 24.0007 23.0622 24.0007C23.3022 24.0007 23.5421 23.9092 23.7252 23.7261C24.0913 23.36 24.0913 22.7664 23.7252 22.4003L13.3256 12.0008Z"
                                      fill="#041B35"/>
                            </svg>
                        </div>
                        <div class="pop-up__content">
                            <div class="pop-up__text">
                                <h3>Формы окон</h3>
                                <p>Одним из элементов оконного дизайна является форма оконного блока. Окна
                                    многоугольные, арочные относятся к оконным конструкциям нестандартной формы.
                                    Особенностью производства окон с непрямыми углами является индивидуальная
                                    комплектация заказа, точный просчет каждого элемента такой конструкции.</p>
                                <button class="btn">Бесплатный замер</button>
                            </div>
                            <div class="pop-up__photo">
                                <div class="image">
                                    <img src="./img/window/win-forms.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="options__pop-up" id="pop-up-3">
                    <div class="pop-up">
                        <div class="pop-up__close-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3256 12.0008L23.7252 1.60119C24.0913 1.23505 24.0913 0.64143 23.7252 0.275337C23.359 -0.0907557 22.7654 -0.0908025 22.3993 0.275337L11.9997 10.6749L1.60022 0.275337C1.23408 -0.0908025 0.640454 -0.0908025 0.274361 0.275337C-0.0917323 0.641477 -0.0917791 1.2351 0.274361 1.60119L10.6739 12.0007L0.274361 22.4003C-0.0917791 22.7664 -0.0917791 23.3601 0.274361 23.7261C0.457407 23.9092 0.69736 24.0007 0.937313 24.0007C1.17727 24.0007 1.41717 23.9092 1.60026 23.7261L11.9997 13.3266L22.3993 23.7261C22.5823 23.9092 22.8223 24.0007 23.0622 24.0007C23.3022 24.0007 23.5421 23.9092 23.7252 23.7261C24.0913 23.36 24.0913 22.7664 23.7252 22.4003L13.3256 12.0008Z"
                                      fill="#041B35"/>
                            </svg>
                        </div>
                        <div class="pop-up__content">
                            <div class="pop-up__text">
                                <h3>Формы окон</h3>
                                <p>Одним из элементов оконного дизайна является форма оконного блока. Окна
                                    многоугольные, арочные относятся к оконным конструкциям нестандартной формы.
                                    Особенностью производства окон с непрямыми углами является индивидуальная
                                    комплектация заказа, точный просчет каждого элемента такой конструкции.</p>
                                <button class="btn">Бесплатный замер</button>
                            </div>
                            <div class="pop-up__photo">
                                <div class="image">
                                    <img src="./img/window/win-forms.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="options__pop-up" id="pop-up-4">
                    <div class="pop-up">
                        <div class="pop-up__close-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3256 12.0008L23.7252 1.60119C24.0913 1.23505 24.0913 0.64143 23.7252 0.275337C23.359 -0.0907557 22.7654 -0.0908025 22.3993 0.275337L11.9997 10.6749L1.60022 0.275337C1.23408 -0.0908025 0.640454 -0.0908025 0.274361 0.275337C-0.0917323 0.641477 -0.0917791 1.2351 0.274361 1.60119L10.6739 12.0007L0.274361 22.4003C-0.0917791 22.7664 -0.0917791 23.3601 0.274361 23.7261C0.457407 23.9092 0.69736 24.0007 0.937313 24.0007C1.17727 24.0007 1.41717 23.9092 1.60026 23.7261L11.9997 13.3266L22.3993 23.7261C22.5823 23.9092 22.8223 24.0007 23.0622 24.0007C23.3022 24.0007 23.5421 23.9092 23.7252 23.7261C24.0913 23.36 24.0913 22.7664 23.7252 22.4003L13.3256 12.0008Z"
                                      fill="#041B35"/>
                            </svg>
                        </div>
                        <div class="pop-up__content">
                            <div class="pop-up__text">
                                <h3>Формы окон</h3>
                                <p>Одним из элементов оконного дизайна является форма оконного блока. Окна
                                    многоугольные, арочные относятся к оконным конструкциям нестандартной формы.
                                    Особенностью производства окон с непрямыми углами является индивидуальная
                                    комплектация заказа, точный просчет каждого элемента такой конструкции.</p>
                                <button class="btn">Бесплатный замер</button>
                            </div>
                            <div class="pop-up__photo">
                                <div class="image">
                                    <img src="./img/window/win-forms.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-container">
                <h2>Опции и аксессуары</h2>
                <div class="options-content options-slider">
                    <div class="slide">
                        <div class="options__card" id="card-1">
                            <div class="card-image">
                                <img src="./img/window/window-icon.webp">
                            </div>
                            <h4 class="card-title">Формы окон</h4>
                            <span class="card-link">Узнать больше</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="options__card" id="card-2">
                            <div class="card-image">
                                <img src="./img/window/handle-icon.webp">
                            </div>
                            <h4 class="card-title">Фурнитура</h4>
                            <span class="card-link">Узнать больше</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="options__card" id="card-3">
                            <div class="card-image">
                                <img src="./img/window/soundproofing-icon.webp">
                            </div>
                            <h4 class="card-title">Шумозащитный стеклопакет</h4>
                            <span class="card-link">Узнать больше</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="options__card" id="card-4">
                            <div class="card-image">
                                <img src="./img/window/energysaving-icon.webp">
                            </div>
                            <h4 class="card-title">Энергосберегающий стеклопакет</h4>
                            <span class="card-link">Узнать больше</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="window__examples examples old-sec white-sec">
            <div class="container">
                <h2>Примеры работ</h2>
                <div class="examples-slider">
                    <div class="slide">
                        <div class="examples__card">
                            <div class="image examples__image" id="image-1">
                                <img loading="lazy" src="./img/window/examples1.webp" class="minimized">
                                <div class="filter"></div>
                                <div class="filter-hover">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.5649 35.4653L26.8439 24.7442C31.7285 18.8012 31.3962 9.97886 25.8456 4.42833C19.9408 -1.47644 10.3331 -1.47644 4.42833 4.42833C-1.47644 10.3331 -1.47644 19.9408 4.42833 25.8456C9.97737 31.3946 18.7986 31.7306 24.7442 26.8439L35.4653 37.5649C36.0451 38.1447 36.9851 38.1447 37.5649 37.5649C38.1447 36.9851 38.1447 36.0451 37.5649 35.4653ZM23.746 23.7459C18.999 28.4929 11.275 28.4929 6.52798 23.7459C1.78095 18.9989 1.78095 11.2749 6.52798 6.52791C11.2749 1.7811 18.9988 1.78073 23.746 6.52791C28.493 11.2749 28.493 18.9989 23.746 23.7459Z"
                                              fill="white"/>
                                        <path d="M22.4064 13.6526H16.6218V7.86797C16.6218 7.048 15.9571 6.3833 15.1371 6.3833C14.3172 6.3833 13.6525 7.048 13.6525 7.86797V13.6526H7.86785C7.04788 13.6526 6.38318 14.3173 6.38318 15.1373C6.38318 15.9572 7.04788 16.6219 7.86785 16.6219H13.6525V22.4065C13.6525 23.2265 14.3172 23.8912 15.1371 23.8912C15.9571 23.8912 16.6218 23.2265 16.6218 22.4065V16.6219H22.4064C23.2264 16.6219 23.8911 15.9572 23.8911 15.1373C23.8911 14.3173 23.2264 13.6526 22.4064 13.6526Z"
                                              fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-text">
                                <h3>Панорамные витражи</h3>
                                <p>г. Санкт-Петербург, ул. Пушкина</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="examples__card">
                            <div class="image examples__image" id="image-2">
                                <img loading="lazy" src="./img/window/examples2.webp">
                                <div class="filter"></div>
                                <div class="filter-hover">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.5649 35.4653L26.8439 24.7442C31.7285 18.8012 31.3962 9.97886 25.8456 4.42833C19.9408 -1.47644 10.3331 -1.47644 4.42833 4.42833C-1.47644 10.3331 -1.47644 19.9408 4.42833 25.8456C9.97737 31.3946 18.7986 31.7306 24.7442 26.8439L35.4653 37.5649C36.0451 38.1447 36.9851 38.1447 37.5649 37.5649C38.1447 36.9851 38.1447 36.0451 37.5649 35.4653ZM23.746 23.7459C18.999 28.4929 11.275 28.4929 6.52798 23.7459C1.78095 18.9989 1.78095 11.2749 6.52798 6.52791C11.2749 1.7811 18.9988 1.78073 23.746 6.52791C28.493 11.2749 28.493 18.9989 23.746 23.7459Z"
                                              fill="white"/>
                                        <path d="M22.4064 13.6526H16.6218V7.86797C16.6218 7.048 15.9571 6.3833 15.1371 6.3833C14.3172 6.3833 13.6525 7.048 13.6525 7.86797V13.6526H7.86785C7.04788 13.6526 6.38318 14.3173 6.38318 15.1373C6.38318 15.9572 7.04788 16.6219 7.86785 16.6219H13.6525V22.4065C13.6525 23.2265 14.3172 23.8912 15.1371 23.8912C15.9571 23.8912 16.6218 23.2265 16.6218 22.4065V16.6219H22.4064C23.2264 16.6219 23.8911 15.9572 23.8911 15.1373C23.8911 14.3173 23.2264 13.6526 22.4064 13.6526Z"
                                              fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-text">
                                <h3>Панорамные витражи</h3>
                                <p>г. Санкт-Петербург, ул. Пушкина</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="examples__card">
                            <div class="image examples__image" id="image-3">
                                <img loading="lazy" src="./img/window/examples1.webp">
                                <div class="filter"></div>
                                <div class="filter-hover">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.5649 35.4653L26.8439 24.7442C31.7285 18.8012 31.3962 9.97886 25.8456 4.42833C19.9408 -1.47644 10.3331 -1.47644 4.42833 4.42833C-1.47644 10.3331 -1.47644 19.9408 4.42833 25.8456C9.97737 31.3946 18.7986 31.7306 24.7442 26.8439L35.4653 37.5649C36.0451 38.1447 36.9851 38.1447 37.5649 37.5649C38.1447 36.9851 38.1447 36.0451 37.5649 35.4653ZM23.746 23.7459C18.999 28.4929 11.275 28.4929 6.52798 23.7459C1.78095 18.9989 1.78095 11.2749 6.52798 6.52791C11.2749 1.7811 18.9988 1.78073 23.746 6.52791C28.493 11.2749 28.493 18.9989 23.746 23.7459Z"
                                              fill="white"/>
                                        <path d="M22.4064 13.6526H16.6218V7.86797C16.6218 7.048 15.9571 6.3833 15.1371 6.3833C14.3172 6.3833 13.6525 7.048 13.6525 7.86797V13.6526H7.86785C7.04788 13.6526 6.38318 14.3173 6.38318 15.1373C6.38318 15.9572 7.04788 16.6219 7.86785 16.6219H13.6525V22.4065C13.6525 23.2265 14.3172 23.8912 15.1371 23.8912C15.9571 23.8912 16.6218 23.2265 16.6218 22.4065V16.6219H22.4064C23.2264 16.6219 23.8911 15.9572 23.8911 15.1373C23.8911 14.3173 23.2264 13.6526 22.4064 13.6526Z"
                                              fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-text">
                                <h3>Панорамные витражи</h3>
                                <p>г. Санкт-Петербург, ул. Пушкина</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="examples__card">
                            <div class="image examples__image" id="image-4">
                                <img loading="lazy" src="./img/window/examples2.webp">
                                <div class="filter"></div>
                                <div class="filter-hover">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.5649 35.4653L26.8439 24.7442C31.7285 18.8012 31.3962 9.97886 25.8456 4.42833C19.9408 -1.47644 10.3331 -1.47644 4.42833 4.42833C-1.47644 10.3331 -1.47644 19.9408 4.42833 25.8456C9.97737 31.3946 18.7986 31.7306 24.7442 26.8439L35.4653 37.5649C36.0451 38.1447 36.9851 38.1447 37.5649 37.5649C38.1447 36.9851 38.1447 36.0451 37.5649 35.4653ZM23.746 23.7459C18.999 28.4929 11.275 28.4929 6.52798 23.7459C1.78095 18.9989 1.78095 11.2749 6.52798 6.52791C11.2749 1.7811 18.9988 1.78073 23.746 6.52791C28.493 11.2749 28.493 18.9989 23.746 23.7459Z"
                                              fill="white"/>
                                        <path d="M22.4064 13.6526H16.6218V7.86797C16.6218 7.048 15.9571 6.3833 15.1371 6.3833C14.3172 6.3833 13.6525 7.048 13.6525 7.86797V13.6526H7.86785C7.04788 13.6526 6.38318 14.3173 6.38318 15.1373C6.38318 15.9572 7.04788 16.6219 7.86785 16.6219H13.6525V22.4065C13.6525 23.2265 14.3172 23.8912 15.1371 23.8912C15.9571 23.8912 16.6218 23.2265 16.6218 22.4065V16.6219H22.4064C23.2264 16.6219 23.8911 15.9572 23.8911 15.1373C23.8911 14.3173 23.2264 13.6526 22.4064 13.6526Z"
                                              fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-text">
                                <h3>Панорамные витражи</h3>
                                <p>г. Санкт-Петербург, ул. Пушкина</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
