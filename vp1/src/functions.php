<?php
function check_email($email)
{
    $db = new PDO("mysql:host=localhost;dbname=burger", "root", "");

    $sql = "SELECT id FROM users WHERE email= ?";
    $p_query = $db->prepare($sql);

    $p_query->bindParam(1, $email);

    if ($p_query->execute()) {
        $result = $p_query->fetchAll();
        if ($result[0][0]<=0) {
            return "not_exists";
        } else {
            return $result[0][0];
        }
    } else {
        return false;
    }
}

function create_user($email, $name, $phone_number)
{
    $db = new PDO("mysql:host=localhost;dbname=burger", "root", "");

    $sql = "INSERT INTO users (email, name, phone_number) VALUES (?, ?, ?)";
    $p_query = $db->prepare($sql);

    $p_query->bindParam(1, $email);
    $p_query->bindParam(2, $name);
    $p_query->bindParam(3, $phone_number);

    if ($p_query->execute()) {
        return $db->lastInsertId();
    } else {
        return false;
    }
}

function make_order($user_id, $street, $home, $part, $appt, $floor, $comment, $payment, $callback)
{
    $db = new PDO("mysql:host=localhost;dbname=burger", "root", "");

    $sql  = "INSERT INTO orders (user_id, street, home, part, appt, floor";
    $sql .= ", comment, payment, callback) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $p_query = $db->prepare($sql);

    $p_query->bindParam(1, $user_id);
    $p_query->bindParam(2, $street);
    $p_query->bindParam(3, $home);
    $p_query->bindParam(4, $part);
    $p_query->bindParam(5, $appt);
    $p_query->bindParam(6, $floor);
    $p_query->bindParam(7, $comment);
    $p_query->bindParam(8, $payment);
    $p_query->bindParam(9, $callback);

    if ($p_query->execute()) {
        return $db->lastInsertId();
    } else {
        return false;
    }
}

function count_orders($user_id)
{
    $db = new PDO("mysql:host=localhost;dbname=burger", "root", "");

    $sql = "SELECT COUNT(id) FROM orders WHERE user_id= ?";
    $p_query = $db->prepare($sql);

    $p_query->bindParam(1, $user_id);

    if ($p_query->execute()) {
        $result = $p_query->fetchAll();
        return $result[0][0];
    } else {
        return false;
    }
}

function get_users_information()
{
    $db = new PDO("mysql:host=localhost;dbname=burger", "root", "");

    $sql = "SELECT * FROM users";
    $p_query = $db->prepare($sql);

    if ($p_query->execute()) {
        $result = $p_query->fetchAll();

        echo PHP_EOL . "----------------------" . PHP_EOL;
        echo "Список зарегистрированных пользователей:";
        echo PHP_EOL . "----------------------" . PHP_EOL;

        foreach ($result as $value) {
            echo "Идентификаицонный номер: " . $value['id'] . PHP_EOL;
            echo "E-mail: " . $value['email'] . PHP_EOL;
            echo "Имя: " . $value['name'] . PHP_EOL;
            echo "Номер телефона: " . $value['phone_number'] . PHP_EOL. PHP_EOL;
        }
    }
}

function get_orders_information()
{
    $db = new PDO("mysql:host=localhost;dbname=burger", "root", "");

    $sql  = "SELECT * ";
    $sql .= "FROM users JOIN orders ON orders.user_id = users.id";
    $p_query = $db->prepare($sql);

    if ($p_query->execute()) {
        $result = $p_query->fetchAll();

        echo PHP_EOL . "----------------------" . PHP_EOL;
        echo "Список заказов:";
        echo PHP_EOL . "----------------------" . PHP_EOL;

        foreach ($result as $value) {
            echo "Заказ №" . $value["id"] . PHP_EOL;
            echo "Имя: " . $value["name"] . PHP_EOL;
            echo "E-mail: " . $value["email"] . PHP_EOL;
            echo "Номер телефона: " . $value["phone_number"] . PHP_EOL;
            echo "Адрес: улица " . $value["street"];
            echo ", дом " . $value["home"];
            echo ", корпус " . $value["part"];
            echo ", этаж " . $value["floor"];
            echo ", квартира " . $value["appt"] . PHP_EOL;
            echo "Комментарий: " . $value["comment"] . PHP_EOL;

            if ($value["callback"]==1) {
                echo "Нужно перезвонить" . PHP_EOL;
            } else {
                echo "Не нужно перезванивать" . PHP_EOL;
            }
            if ($value["payment"]==0) {
                echo "Потребуется сдача" . PHP_EOL;
            } else {
                echo "Оплата по карте" . PHP_EOL;
            }
                //echo $key.":" . $item . "; ";
            echo PHP_EOL;
        }
    }
}

function sendMail($email, $ subject, $message)
{
    $transport = (new Swift_SmtpTransport('smtp.mail.ru', 587, "TLS"))
        ->setUsername('iiiiiiiiii22222222222@mail.ru')
        ->setPassword('dfgdjtrtrf533');

    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message($subject))
        ->setFrom(['iiiiiiiiii22222222222@mail.ru' => 'бургеры'])
        ->setTo([$email => 'кому-то'])
        ->setBody($message)
    ;
    $result = $mailer->send($message);
}

function render($str)
{
    $loader = new Twig_Loader_Filesystem('templates/');
    $twig = new Twig_Environment($loader, array(
        'cache' => 'templates2',
    ));
    echo $twig->render('123.html', array('message' => $str));
}

function rotateImage($filename)
{
    $source = imagecreatefromjpeg($filename);
    $rotate = imagerotate($source, 45, 0);
    imagejpeg($rotate, "002.jpg");

    imagedestroy($source);
    imagedestroy($rotate);

    $stamp = imagecreatefrompng("003.png");
    $im = imagecreatefromjpeg("002.jpg");

    $marge_right = 10;
    $marge_bottom = 10;
    $sx = imagesx($stamp);
    $sy = imagesy($stamp);

    imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

    imagejpeg($im, "002.jpg");
    imagedestroy($im);

    $a = getimagesize("002.jpg");
    $thumb = imagecreate(200*($a[0]/$a[1]), 200);
    $source = imagecreatefromjpeg("002.jpg");
    imagecopyresized($thumb, $source, 0, 0, 0, 0, 200, 200*($a[1]/$a[0]), $a[0], $a[1]);
    imagejpeg($thumb, "004.jpg");
}
