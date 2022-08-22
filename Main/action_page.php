<?php
require_once "./../demo/db.php";
session_start();
function select_all(){
    $sql = "SELECT * FROM product";
    return pdo_query($sql);
}
extract($_REQUEST);
if (array_key_exists('login',$_REQUEST)) {
    $sql = "SELECT * FROM account WHERE username = ?";
    $acc =pdo_query_one($sql,$username);
    if (empty($acc)) {
        $_SESSION['error'] = "Tài khoản của bạn không tồn tại !";
        header("location:login.php");die;
    }elseif (empty($acc['username']) == false && $acc['password'] !== $password) {
        $_SESSION['error'] = "Mật khẩu không đúng !";
        header("location:login.php");die;
    }
    $_SESSION['user'] = $acc;
    header("Location:\demoon\demo\index.php");

    
}else if(array_key_exists('addcart',$_REQUEST)){
    $sql = "SELECT * FROM product where ProductId = $id";
    $product = pdo_query_one($sql);
    $product['quantity'] = 0;
    $product['quantity'] = $quantity;
    settype($id, "integer");
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) { 
        if ($_SESSION['cart'][$i]['ProductId'] === $id) {
            $_SESSION['cart'][$i]['quantity'] += $product['quantity'];
            header("location:cart.php");
            die;
        }
    }
    $_SESSION['cart'][] = $product;
    header("location:cart.php");
}elseif(isset($_GET['id']) == true) {
    settype($_GET['id'], "integer");
    array_splice($_SESSION['cart'],$_GET['id'],1);
    header("location:cart.php");
    die;
}
elseif(isset($_GET['delete_all'])) {
    unset($_SESSION['cart']);
    header("location:cart.php");
    die;
}
?>