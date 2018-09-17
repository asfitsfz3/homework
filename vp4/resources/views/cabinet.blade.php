<html>
<head>
</head>

<body>
Добро пожаловать в личный кабинет пользователя <b>{{ $arr['auth_name'] }}</b>!<br>
{{ $arr['admin_message'] }}<br>
<br>
<a href="/fast_logout">Разлогиниться</a><br>
<a href="/">Вернуться на начальную страницу</a><br>
<br>
@If ($arr['admin']==1)

    --------------------------------------------------------------<br>
<form action="{{ url('/changeemail') }}" method="GET">
    Изменить e-mail для получения уведомлений о заказах:<br>
    <input type="text" name="name"><br>
    <input type="submit">
</form><br>
Список категорий:<br>
--------------------------------------------------------------<br>
@foreach ($arr['category'] as $value)
{{ $value['category_id'] }} <b>{{ $value['name'] }}</b> {{ $value['description'] }}<br>
@endforeach
--------------------------------------------------------------<br>

<form action="{{ url('/createcat') }}" method="GET">
    Создать новую категорию:<br>
    Название: <input type="text" name="name"><br>
    Описание: <input type="text" name="description"><br>
    <input type="submit">
</form><br>
<form action="{{ url('/editcat') }}" method="GET">
    Редактировать существующую категорию:<br>
    Название: <input type="text" name="oldname"><br>
    Новое название: <input type="text" name="name"><br>
    Новое описание: <input type="text" name="description"><br>
    <input type="submit">
</form><br>
<form action="{{ url('/deletecat') }}" method="GET">
    Удалить существующую категорию:<br>
    Введите название категории, которую нужно удалить:<br>
    <input type="text" name="name" value=""><br>
    <input type="submit">
</form><br>
--------------------------------------------------------------<br>
Список товаров:<br>
--------------------------------------------------------------<br>
<table>
    <tr align="center">
        <td>id товара </td>
        <td>название товара</td>
        <td>id категории</td>
        <td>цена</td>
        <td>картинка</td>
        <td>описание</td>
    </tr>
    @foreach ($arr['goods'] as $value)
        <tr align="center">

            <td> {{ $value['good_id'] }}   </td>
            <td>{{ $value['name'] }} </td>
            <td> {{ $value['category_id'] }}   </td>
            <td> {{ $value['price'] }}  </td>
            <td> {{ $value['photo_id'] }}  </td>
            <td> {{ $value['description'] }}  </td>
        </tr>
    @endforeach
</table>
<form action="{{ url('/creategood') }}" method="GET">
    Создать новый товар:<br>
    Название: <input type="text" name="name"><br>
    ID категории: <input type="text" name="category_id"><br>
    Цена: <input type="text" name="price"><br>
    Картинка: <input type="text" name="photo_id"><br>
    Описание: <input type="text" name="description"><br>
    <input type="submit">
</form><br>
<form action="{{ url('/editgood') }}" method="GET">
    Редактировать существующий товар:<br>
    Старое азвание: <input type="text" name="oldname"><br>
    Название: <input type="text" name="name"><br>
    ID категории: <input type="text" name="category_id"><br>
    Цена: <input type="text" name="price"><br>
    Картинка: <input type="text" name="photo_id"><br>
    Описание: <input type="text" name="description"><br>
    <input type="submit">
</form><br>
<form action="{{ url('/deletegood') }}" method="GET">
    Удалить товар:<br>
    Введите название товара, который нужно удалить:<br>
    <input type="text" name="name" value=""><br>
    <input type="submit">
</form><br>
--------------------------------------------------------------<br>
<br>
Список заказов:<br>
--------------------------------------------------------------<br>
<table>
    <tr>
        <td>id заказа </td>
        <td>id товара</td>
        <td>имя получателя</td>
        <td>email получателя</td>
    </tr>
    @foreach ($arr['orders'] as $value)
        <tr align="center">

            <td> {{ $value['order_id'] }}   </td>
            <td>{{ $value['good_id'] }} </td>
            <td> {{ $value['name'] }}   </td>
            <td> {{ $value['email'] }}  </td>
        </tr>
    @endforeach
</table>
--------------------------------------------------------------<br>
@endif
</body>
</html>

