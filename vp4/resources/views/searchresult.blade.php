<html>
<head>
</head>

<body>
<a href="/">Вернуться на главную страницу</a><br>
Вот что удалось найти:
@foreach ($arr as $value)
<br>

    <div class="products-category__list__item">
        <div class="products-category__list__item__title-product"><a href="good/?id={{ $value['good_id'] }}">{{ $value['name'] }}</a></div>
        <div class="products-category__list__item__thumbnail"><a href="good/?id={{ $value['good_id'] }}" class="products-category__list__item__thumbnail__link"><img src="/img/cover/{{ $value['photo_id'] }}" alt="Preview-image"></a></div>
        <div class="products-category__list__item__description"><span class="products-price">{{ $value['price'] }} руб</span><a href="good/?id={{ $value['good_id'] }}" class="btn btn-blue">Купить</a></div>
    </div>


@endforeach
</body>
</html>

