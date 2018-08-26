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
