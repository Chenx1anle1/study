<?php
header("Content-Type:text/html; charset=utf-8");
$array = array(
    'name' => $_POST['name'],
    'password' => $_POST['pwd']
    );
// var_dump($array);
// var_dump($_POST);
// echo $_POST['name'];
if ($_POST['name'] == 'user' && $_POST['pwd'] == '123123') {
    // echo "<script>alert('ok')</script>";
    echo 'user:',$_POST['name'];
} else {
    echo "<script>alert('err 01')</script>";
}