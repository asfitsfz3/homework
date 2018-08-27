<?php
require("src/functions.php");

$email = $_POST['email'];
$name = $_POST['name'];
$phone_number = $_POST['phone'];

$street = $_POST['street'];
$home = $_POST['home'];
$part = $_POST['part'];
$appt = $_POST['appt'];
$floor = $_POST['floor'];
$comment = $_POST['comment'];

$payment = $_POST['payment'];

if (($_POST['callback']!=null)) {
    $callback=0;
} else {
    $callback=1;
}

$answer  = "Ваш заказ будет доставлен по адресу:\n";
$answer .= "Улица " . $street . ", ";
$answer .= "дом " . $home . ", ";
$answer .= "корпус " . $part . ", ";
$answer .= "этаж " . $floor . ", ";
$answer .= "квартира " . $appt . ".\n";
$answer .= "Содержимое заказа: DarkBeefBurger (500 р.) - 1 шт.\n";

if (($email!=null) and ($phone_number!=null)) {
    $user_id = check_email($email);

    if ($user_id=="not_exists") {
        $user_id = create_user($email, $name, $phone_number);
    }

    $order_id = make_order($user_id, $street, $home, $part, $appt, $floor, $comment, $payment, $callback);
    $c_orders = count_orders($user_id);

    if ($c_orders==1) {
        $answer .= "Спасибо. Это ваш первый заказ.";
    } else {
        $answer .= "Спасибо. Это ваш " . $c_orders . " заказ.";
    }

    mail($email, "Заказ № " . $order_id, $answer);
    echo "Заказ принят. Подробности отправлены на электронную почту.";
} else {
    echo "Заказ не принят. Заполните поля номера телефона и электронной почты.";
}
