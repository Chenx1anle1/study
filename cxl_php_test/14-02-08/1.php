<?php
    header("Content-Type:text/html; charset=utf-8");
    $hello = "world";
    $$hello = "kunming";

    // 标识符 可以是一个变量 可变变量

    // echo $world;

    // echo "<br/>";
    // 预定义变量


// 姓名 处理部分
$country = $_POST['country'];
if ($country == "China") {
    $nick_name = "last_name";
} else if ($country == 'USA') {
    $nick_name = "first_name";
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

echo '名：',$$nick_name;