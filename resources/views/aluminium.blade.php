@php
    $type = "aluminium";
@endphp

@extends('layout')

@section('title')
    Алюминиевые двери и окна, дверные блоки продажа от производителя во Владивостоке, Артёме, Уссурийске | Оконный Завод
@endsection

@section('descriprion')
    Продажа и производство алюминиевых дверей и окон от производителя во Владивостоке, Артёме, Уссурийске от 6500 рублей за м2
@endsection

@section('h1')
    Алюминиевые изделия
@endsection

@section('more_js')
    <script type="text/javascript" src="/js/aluminium.js"></script>
@endsection

@section('content')
    <main class="aluminium">
        <section class="pink-sec types">
            <div class="container">
                <h2>«Холодные» и «тёплые» системы</h2>
                <div class="sub-title">
                    «Оконный ЗАВОД» на собственном производстве изготавливает конструкции из алюминиевого профиля в двух
                    вариантах исполнения: «холодные» и «теплые».
                </div>
                <div class="types__content">
                    <div class="type">
                        <div class="type__title">
                            <h3>Холодный алюминий</h3>
                        </div>

                        <div class="type__short-desc">
                            Холодный алюминий - пустотелый однокамерный профиль без утепляющих термовставок. Цена окна из
                            холодного алюминиевого профиля существенно ниже утепленных аналогов.
                        </div>

                        <h4>Применение</h4>
                        <ul class="type__list">
                            <li>Внутренние окна/двери</li>
                            <li>Межкомнатные двери</li>
                            <li>Офисные двери и перегородки</li>
                        </ul>

                        <h4>Характеристики</h4>
                        <ul class="type__characteristic">
                            <li><span>Термовставка</span> <span>нет</span></li>
                            <li><span>Ширина профиля</span> <span>48 мм</span></li>
                            <li><span>Количество камер</span> <span>1 шт</span></li>
                            <li><span>Толщина заполнения</span> <span>4 - 24 мм</span></li>
                            <li><span>Теплопроводность</span> <span>0,19 м²С/Вт</span></li>
                        </ul>
                    </div>

                    <div class="type">
                        <div class="type__title">
                            <h3>Теплый алюминий</h3>
                        </div>

                        <div class="type__short-desc">
                            Теплый алюминий - это комбинированный профиль из двух частей: наружной и внутренней. Наружная и
                            внутренняя части системы изолированы друг от друга термомостом. Термическое разделение
                            материалов уменьшает теплопроводность профиля и надежно защищает от холода.
                        </div>

                        <h4>Применение</h4>
                        <ul class="type__list">
                            <li>Входные двери</li>
                            <li>Наружные окна</li>
                        </ul>

                        <h4>Характеристики</h4>
                        <ul class="type__characteristic">
                            <li><span>Термовставка</span> <span>есть</span></li>
                            <li><span>Ширина профиля</span> <span>62 мм</span></li>
                            <li><span>Количество камер</span> <span>3 шт</span></li>
                            <li><span>Толщина заполнения</span> <span>24 - 32 мм</span></li>
                            <li><span>Теплопроводность</span> <span>0,45 м²С/Вт</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="promo white-sec old-sec">
            <div class="container">
                <div class="promo__card">
                    <h2>Почему алюминий?</h2>
                    <div class="promo__content">
                        <div class="card__content">
                            <ul>
                                <li>Алюминий в 2 раза прочнее ПВХ</li>
                                <li>Высокий срок службы профиля: 50 лет</li>
                                <li>Больше света и пространства</li>
                                <li>Огнестойкий, негорючий материал</li>
                                <li>Фурнитура рассчитана на 30 лет использования</li>
                                <li>Защитное покрытие 60 мкм долговечно
                                    и устойчиво к различным видам воздействия
                                </li>
                            </ul>
                            <button class="btn show-modal">Бесплатный замер</button>
                        </div>
                        <div class="card__image">
                            <img src="/img/aluminium/illustr.webp">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="aluminium-product old-sec">
            <div class="slide-container">
                <h2>Алюминиевые окна</h2>
                <div class="aluminium-product__content">
                    <div class="aluminium-product__text">
                        <p>Для алюминиевых оконных блоков существует своя специальная фурнитура. Мы устанавливаем немецкую
                            фурнитуру ROTO AluVision T300 (от мирового лидера фурнитурного рынка компании ROTO Ag):</p>
                        <ul>
                            <li>Поворотная;</li>
                            <li>Поворотно-откидная.</li>
                        </ul>
                        <div class="window-option">
                            <h4>Различные формы окон</h4>
                            <div class="window-option__forms">
                                <div class="form">
                                    <img src="/img/aluminium/windows-form-1.webp">
                                    <p>Косоугольные</p>
                                </div>
                                <div class="form">
                                    <img src="/img/aluminium/windows-form-2.webp">
                                    <p>Трапециевидные</p>
                                </div>
                            </div>

                        </div>
                        <button class="btn">Бесплатный замер</button>
                    </div>
                    <div class="aluminium-product__products">
                        <div class="products-slider">
                            <div class="products__content">
                                <div class="products__wrapper">
                                    <div class="products__item">
                                        <picture>
                                            <img src="/img/aluminium/aluminium-window.webp" alt="photo">
                                        </picture>


                                        <h3>Двустворчатое окно</h3>
                                        <span class="products__subtitle">Теплое остекление</span>

                                        <div class="products__info">
                                            <div class="products__info-item">
                                                <div class="products__info-name">Профиль</div>
                                                <div class="products__info-value">SLIDORS</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Фурнитура</div>
                                                <div class="products__info-value">ROTO</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Стеклопакет</div>
                                                <div class="products__info-value">32 мм</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Монтажная ширина</div>
                                                <div class="products__info-value">62 мм</div>
                                            </div>
                                        </div>

                                        <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                                        <a href="" class="btn">Подробнее</a>
                                    </div>
                                </div>
                                <div class="products__wrapper">
                                    <div class="products__item">
                                        <picture>
                                            <img src="/img/aluminium/aluminium-window.webp" alt="photo">
                                        </picture>


                                        <h3>Трехстворчатое окно</h3>
                                        <span class="products__subtitle">Теплое остекление</span>

                                        <div class="products__info">
                                            <div class="products__info-item">
                                                <div class="products__info-name">Профиль</div>
                                                <div class="products__info-value">SLIDORS</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Фурнитура</div>
                                                <div class="products__info-value">ROTO</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Стеклопакет</div>
                                                <div class="products__info-value">32 мм</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Монтажная ширина</div>
                                                <div class="products__info-value">62 мм</div>
                                            </div>
                                        </div>

                                        <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                                        <a href="" class="btn">Подробнее</a>
                                    </div>
                                </div>
                                <div class="products__wrapper">
                                    <div class="products__item">
                                        <picture>
                                            <img src="/img/aluminium/aluminium-window.webp" alt="photo">
                                        </picture>


                                        <h3>Двустворчатое окно</h3>
                                        <span class="products__subtitle">Теплое остекление</span>

                                        <div class="products__info">
                                            <div class="products__info-item">
                                                <div class="products__info-name">Профиль</div>
                                                <div class="products__info-value">SLIDORS</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Фурнитура</div>
                                                <div class="products__info-value">ROTO</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Стеклопакет</div>
                                                <div class="products__info-value">32 мм</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Монтажная ширина</div>
                                                <div class="products__info-value">62 мм</div>
                                            </div>
                                        </div>

                                        <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                                        <a href="" class="btn">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="aluminium-product pink-sec">
            <div class="slide-container">
                <h2>Алюминиевые двери</h2>
                <div class="aluminium-product__content aluminium-product__doors">
                    <div class="aluminium-product__text">
                        <p>Производство и монтаж алюминиевых дверей во Владивостоке.</p>
                        <p>“Оконный ЗАВОД” проектирует, производит, доставляет на объект и устанавливает конструкции из
                            алюминия по индивидуальным размерам, с точными сроками монтажа и гарантийными обязательствами.
                            Мы даем гарантию на изделие и на монтажные работы. Вся наша продукция сертифицирована и
                            рассчитана на длительный срок эксплуатации даже при интенсивной нагрузке.</p>
                        <p><span>Область применения:</span> входные, офисные и межкомнатные двери в помещении офисных
                            центров, квартир,
                            домов.</p>
                        <button class="btn">Бесплатный замер</button>
                    </div>
                    <div class="aluminium-product__products">
                        <div class="products-slider">
                            <div class="products__content">
                                <div class="products__wrapper">
                                    <div class="products__item">
                                        <picture>
                                            <img src="/img/aluminium/aluminium-doors.webp" alt="photo">
                                        </picture>


                                        <h3>Холодный алюминий</h3>
                                        <span class="products__subtitle">Для внутреннего остекления</span>

                                        <div class="products__info">
                                            <div class="products__info-item">
                                                <div class="products__info-name">Профиль</div>
                                                <div class="products__info-value">SLIDORS</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Размер</div>
                                                <div class="products__info-value">900х2100</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Материал</div>
                                                <div class="products__info-value">Алюминий</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Стеклопакет</div>
                                                <div class="products__info-value">24 мм</div>
                                            </div>
                                        </div>

                                        <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                                        <a href="" class="btn">Подробнее</a>
                                    </div>
                                </div>
                                <div class="products__wrapper">
                                    <div class="products__item">
                                        <picture>
                                            <img src="/img/aluminium/aluminium-doors.webp" alt="photo">
                                        </picture>


                                        <h3>Холодный алюминий</h3>
                                        <span class="products__subtitle">Для внутреннего остекления</span>

                                        <div class="products__info">
                                            <div class="products__info-item">
                                                <div class="products__info-name">Профиль</div>
                                                <div class="products__info-value">SLIDORS</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Размер</div>
                                                <div class="products__info-value">900х2100</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Материал</div>
                                                <div class="products__info-value">Алюминий</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Стеклопакет</div>
                                                <div class="products__info-value">24 мм</div>
                                            </div>
                                        </div>

                                        <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                                        <a href="" class="btn">Подробнее</a>
                                    </div>
                                </div>
                                <div class="products__wrapper">
                                    <div class="products__item">
                                        <picture>
                                            <img src="/img/aluminium/aluminium-doors.webp" alt="photo">
                                        </picture>


                                        <h3>Холодный алюминий</h3>
                                        <span class="products__subtitle">Для внутреннего остекления</span>

                                        <div class="products__info">
                                            <div class="products__info-item">
                                                <div class="products__info-name">Профиль</div>
                                                <div class="products__info-value">SLIDORS</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Размер</div>
                                                <div class="products__info-value">900х2100</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Материал</div>
                                                <div class="products__info-value">Алюминий</div>
                                            </div>

                                            <div class="products__info-item">
                                                <div class="products__info-name">Стеклопакет</div>
                                                <div class="products__info-value">24 мм</div>
                                            </div>
                                        </div>

                                        <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                                        <a href="" class="btn">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="aluminium-product old-sec white-sec">
            <div class="slide-container">
                <h2>Алюминиевые перегородки</h2>
                <div class="aluminium-product__content aluminium-product__partitions">
                    <div class="aluminium-product__text">
                        <p>Алюминиевые перегородки:</p>
                        <ul>
                            <li>Зонирование пространства;</li>
                            <li>Демократичная цена;</li>
                            <li>Компактность.</li>
                        </ul>
                        <p><span>Область применения:</span> рабочие кабинеты, переговорные, холлы, торговые центры, зоны
                            обслуживания покупателей и т.д.</p>
                        <p>Декоративные перегородки не требуют согласования перепланировки, могут быть изготовлены с
                            дверными блоками и просты в обслуживании.</p>
                        <button class="btn">Бесплатный замер</button>
                    </div>
                    <div class="aluminium-product__products">
                        <div class="products-slider">
                            <div class="products__content">
                                <div class="products__wrapper">
                                    <div class="products__item">
                                        <picture>
                                            <img src="/img/aluminium/aluminium-partitions.webp" alt="photo">
                                        </picture>


                                        <h3>Стеклянные
                                            перегородки</h3>
                                        <span class="products__subtitle">Для офисных помещений</span>

                                        <div class="products__info">
                                            <p>Стеклянное заполнение хорошо пропускает свет, создает ощущение свободы
                                                пространства. Для заполнения используется стекло (5, 6 мм).</p>
                                        </div>

                                        <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                                        <a href="" class="btn">Подробнее</a>
                                    </div>
                                </div>
                                <div class="products__wrapper">
                                    <div class="products__item">
                                        <picture>
                                            <img src="/img/aluminium/aluminium-partitions.webp" alt="photo">
                                        </picture>


                                        <h3>Стеклянные
                                            перегородки</h3>
                                        <span class="products__subtitle">Для офисных помещений</span>

                                        <div class="products__info">
                                            <p>Стеклянное заполнение хорошо пропускает свет, создает ощущение свободы
                                                пространства. Для заполнения используется стекло (5, 6 мм).</p>
                                        </div>

                                        <div class="products__price">от 9704 ₽/м<sup>2</sup></div>

                                        <a href="" class="btn">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="options pink-sec">
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
                                <h3>Солнцезащитные стеклопакеты</h3>
                                <p>Одним из элементов оконного дизайна является форма оконного блока. Окна
                                    многоугольные, арочные относятся к оконным конструкциям нестандартной формы.
                                    Особенностью производства окон с непрямыми углами является индивидуальная
                                    комплектация заказа, точный просчет каждого элемента такой конструкции.</p>
                                <button class="btn">Бесплатный замер</button>
                            </div>
                            <div class="pop-up__photo">
                                <div class="image">
                                    <img src="/img/window/win-forms.webp">
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
                                <h3>Фурнитура</h3>
                                <p>Одним из элементов оконного дизайна является форма оконного блока. Окна
                                    многоугольные, арочные относятся к оконным конструкциям нестандартной формы.
                                    Особенностью производства окон с непрямыми углами является индивидуальная
                                    комплектация заказа, точный просчет каждого элемента такой конструкции.</p>
                                <button class="btn">Бесплатный замер</button>
                            </div>
                            <div class="pop-up__photo">
                                <div class="image">
                                    <img src="/img/window/win-forms.webp">
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
                                <h3>Цвет</h3>
                                <p>Одним из элементов оконного дизайна является форма оконного блока. Окна
                                    многоугольные, арочные относятся к оконным конструкциям нестандартной формы.
                                    Особенностью производства окон с непрямыми углами является индивидуальная
                                    комплектация заказа, точный просчет каждого элемента такой конструкции.</p>
                                <button class="btn">Бесплатный замер</button>
                            </div>
                            <div class="pop-up__photo">
                                <div class="image">
                                    <img src="/img/window/win-forms.webp">
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
                                <img src="/img/aluminium/sunprot-icon.webp">
                            </div>
                            <h4 class="card-title">Солнцезащитные стеклопакеты</h4>
                            <span class="card-link">Узнать больше</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="options__card" id="card-2">
                            <div class="card-image">
                                <img src="/img/aluminium/lock-icon.webp">
                            </div>
                            <h4 class="card-title">Фурнитура</h4>
                            <span class="card-link">Узнать больше</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="options__card" id="card-3">
                            <div class="card-image">
                                <img src="/img/aluminium/color-icon.webp">
                            </div>
                            <h4 class="card-title">Цвет</h4>
                            <span class="card-link">Узнать больше</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="examples old-sec white-sec">
            <div class="container">
                <h2>Примеры работ</h2>
                <div class="examples-slider">
                    <div class="slide">
                        <div class="examples__card">
                            <div class="image examples__image" id="image-1">
                                <img loading="lazy" src="/img/window/examples1.webp" class="minimized">
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
                                <img loading="lazy" src="/img/window/examples2.webp">
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
                                <img loading="lazy" src="/img/window/examples1.webp">
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
                                <img loading="lazy" src="/img/window/examples2.webp">
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
