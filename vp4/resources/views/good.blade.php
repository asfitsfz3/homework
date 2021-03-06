<!DOCTYPE html>
<html lang="ru">
<head>
    <title>1product - ГеймсМаркет</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/css/libs.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">
</head>
<body>

<div class="main-wrapper">
    <header class="main-header">
        <div class="logotype-container"><a href="/" class="logotype-link"><img src="/img/logo.png" alt="Логотип"></a></div>
        <nav class="main-navigation">
            <ul class="nav-list">
                <li class="nav-list__item"><a href="/" class="nav-list__item__link">Главная</a></li>
                <li class="nav-list__item"><a href="/myorders" class="nav-list__item__link">Мои заказы</a></li>
                <li class="nav-list__item"><a href="/news" class="nav-list__item__link">Новости</a></li>
                <li class="nav-list__item"><a href="/about" class="nav-list__item__link">О компании</a></li>          </ul>
        </nav>
        <div class="header-contact">
            <div class="header-contact__phone"><a href="#" class="header-contact__phone-link">Телефон: 33-333-33</a></div>
        </div>
        <div class="header-container">
            <div class="payment-container">
                <div class="payment-basket__status">
                    <div class="payment-basket__status__icon-block"><a class="payment-basket__status__icon-block__link"><i class="fa fa-shopping-basket"></i></a></div>
                    <div class="payment-basket__status__basket"><span class="payment-basket__status__basket-value">0</span><span class="payment-basket__status__basket-value-descr">товаров</span></div>
                </div>
            </div>

            @if (Route::has('login'))

                @auth
                    <div class="authorization-block">
                        <a href="{{ url('/cabinet') }}" class="authorization-block__link">Личный кабинет</a>
                    </div>
                @else
                    <div class="authorization-block">
                        <a href="{{ route('register') }}" class="authorization-block__link">Регистрация</a>
                        <a href="{{ route('login') }}" class="authorization-block__link">Войти</a>
                    </div>
                @endauth

            @endif

        </div>
    </header>
    <div class="middle">
        <div class="sidebar">
            <div class="sidebar-item">
                <div class="sidebar-item__title">Категории</div>
                <div class="sidebar-item__content">
                    <ul class="sidebar-category">
                        @foreach ($arr['categories'] as $value)
                            <li class="sidebar-category__item"><a href="category/?id={{ $value['category_id'] }}" class="sidebar-category__item__link">{{ $value['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item__title">Последние новости</div>
                <div class="sidebar-item__content">
                    <div class="sidebar-news">
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="img/cover/game-2.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                            <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="img/cover/game-1.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                            <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="img/cover/game-4.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                            <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
                <div class="image-container"><img src="/img/slider.png" alt="Image" class="image-main"></div>
            </div>
            <div class="content-middle">
                <div class="content-head__container">
                    <div class="content-head__title-wrap">
                        <div class="content-head__title-wrap__title bcg-title">{{ $arr['good_name'] }} в разделе {{ $arr['category_name'] }}</div>
                    </div>
                    <div class="content-head__search-block">
                        <div class="search-container">
                            <form class="search-container__form" action="{{ url('/search') }}" method="GET">
                                <input type="text" name="word" class="search-container__form__input">
                                <button type="submit" class="search-container__form__btn">search</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="content-main__container">
                    <div class="product-container">
                        <div class="product-container__image-wrap"><img src="/img/cover/{{ $arr['good_pic'] }}" class="image-wrap__image-product"></div>
                        <div class="product-container__content-text">
                            <div class="product-container__content-text__title">{{ $arr['good_name'] }}</div>
                            <div class="product-container__content-text__price">
                                <div class="product-container__content-text__price__value">
                                    Цена: <b>{{ $arr['good_price'] }}</b>
                                    руб
                                </div><a href="#" class="btn btn-blue" onclick="message()">Купить</a>
                            </div>
                            <div class="product-container__content-text__description">
                                {{ $arr['good_description'] }}
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="content-bottom">
                <div class="line"></div>
                <div class="content-head__container">
                    <div class="content-head__title-wrap">
                        <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
                    </div>
                </div>
                <div class="content-main__container">
                    <div class="products-columns">
                        @foreach ($arr['goods'] as $value)


                            <div class="products-category__list__item">
                                <div class="products-category__list__item__title-product"><a href="good/?id={{ $value['good_id'] }}">{{ $value['name'] }}</a></div>
                                <div class="products-category__list__item__thumbnail"><a href="good/?id={{ $value['good_id'] }}" class="products-category__list__item__thumbnail__link"><img src="/img/cover/{{ $value['photo_id'] }}" alt="Preview-image"></a></div>
                                <div class="products-category__list__item__description"><span class="products-price">{{ $value['price'] }} руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                            </div>


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer__footer-content">

            <div class="random-product-container">
                <div class="random-product-container__head">Случайный товар</div>
                <div class="random-product-container__content">
                    <div class="item-product">
                        <div class="item-product__title-product"><a href="good/?id={{ $arr['random_good']['good_id'] }}" class="item-product__title-product__link">{{ $arr['random_good']['name'] }}</a></div>
                        <div class="item-product__thumbnail"><a href="good/?id={{ $arr['random_good']['good_id'] }}" class="item-product__thumbnail__link"><img src="/img/cover/{{ $arr['random_good']['photo_id'] }}" alt="Preview-image" class="item-product__thumbnail__link__img"></a></div>
                        <div class="item-product__description">
                            <div class="item-product__description__products-price"><span class="products-price">{{ $arr['random_good']['price'] }}</span></div>
                            <div class="item-product__description__btn-block"><a href="good/?id={{ $arr['random_good']['good_id'] }}" class="btn btn-blue">Купить</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__footer-content__main-content">
                <p>
                    Интернет-магазин компьютерных игр ГЕЙМСМАРКЕТ - это
                    онлайн-магазин игр для геймеров, существующий на рынке уже 5 лет.
                    У нас широкий спектр лицензионных игр на компьютер, ключей для игр - для активации
                    и авторизации, а также карты оплаты (game-card, time-card, игровые валюты и т.д.),
                    коды продления и многое друго. Также здесь всегда можно узнать последние новости
                    из области онлайн-игр для PC. На сайте предоставлены самые востребованные и
                    актуальные товары MMORPG, приобретение которых здесь максимально удобно и,
                    что немаловажно, выгодно!
                </p>
            </div>
        </div>
        <div class="footer__social-block">
            <ul class="social-block__list bcg-social">
                <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-facebook"></i></a></li>
                <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-twitter"></i></a></li>
                <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>
</div>


<script>
    function message()
    {
        function CreateRequest()
        {
            var Request = false;

            if (window.XMLHttpRequest)
            {

                Request = new XMLHttpRequest();
            }
            else if (window.ActiveXObject)
            {

                try
                {
                    Request = new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (CatchException)
                {
                    Request = new ActiveXObject("Msxml2.XMLHTTP");
                }
            }

            if (!Request)
            {
                alert("Невозможно создать XMLHttpRequest");
            }

            return Request;
        }







        if ("{{$arr['auth']}}"=='yes') {
            var name = prompt("Для связи с менеджером оставьте своё имя", "{{$arr['auth_name']}}");
            var email = prompt("Для связи с менеджером оставьте свой электронный адрес", "{{$arr['auth_email']}}");
            var good = "{{ $arr['good_id'] }}";
            alert("Ваш заказ принят.");

            var Request = CreateRequest();
            Request.open("GET", "/order/?e="+email+"&n="+name+"&g="+good, true);
            //alert("order/?e="+email+"&n="+name);
            Request.send(null);
        } else {
            alert("Авторизуйтесь, пожалуйста.");
        }

    }

</script>



</body>
</html>