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
Список категорий:<br>
--------------------------------------------------------------<br>
@foreach ($arr['category'] as $value)


<b>{{ $value['name'] }}</b> {{ $value['description'] }}<br>


@endforeach
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
</body>
</html>

