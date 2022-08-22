<?php
require_once "./db.php";
session_start();
function select_all(){
    $sql = "SELECT * FROM product JOIN category ON product.CatId = category.CatId";
    return pdo_query($sql);
}
function select_sectors()
{
    $sql = "SELECT * FROM category";
    return pdo_query($sql);
}
function select_product($id)
{
    $sql = "SELECT * FROM product WHERE ProductId = $id";
    return pdo_query_one($sql);
}
// Thêm Sản phẩm
extract($_REQUEST);
if (array_key_exists('add',$_REQUEST)) {
    $sql = "INSERT INTO product(ProductName, Image, Price, CatId) VALUES(?,?,?,?)";
    $fileUpload = $_FILES['img'];
    if (strpos($fileUpload['type'], 'image') === false) {
        $_SESSION['error_check'] = "Không phải file ảnh";
        header("Location: them.php");
        die;
    }else if($fileUpload['size'] > 3000000) {
        $_SESSION['error_check'] = "Ảnh không được vượt quá 30MB";
        header("Location: them.php");
        die;
    }
    $storePath = './img/';
    $fileName = $fileUpload['name'];
    $path = $storePath . $fileName;
    move_uploaded_file($fileUpload['tmp_name'], $path);
    $img = '/demoon/demo/img/' . $fileName;
    if (empty($name) == true || empty($price) == true) {
        $_SESSION['error_check'] = 'ĐIỀN THIẾU THÔNG TIN !';
        header("Location: them.php");
        die;
    }
    pdo_execute($sql,$name,$img,$price,$catid);
    header("Location:index.php");

    //Update and edit product
}else if (array_key_exists('edit',$_REQUEST)) {
    // var_dump($name, $price,$catid,$img);die;
    $sql = "UPDATE product SET ProductName = ?, Image = ?, Price = ?, CatId = ? WHERE ProductId = ?";
    $fileUpload = $_FILES['image'];
    if ($fileUpload['size'] > 0) {
        if (strpos($fileUpload['type'], 'image') === false) {
            $_SESSION['error_check'] = "Không phải file ảnh";
            header("Location: update.php?id_product=".$id);
            die;
        }else if($fileUpload['size'] > 3000000) {
            $_SESSION['error_check'] = "Ảnh không được vượt quá 30MB";
            header("Location: update.php?id_product=".$id);
            die;
        }
        $storePath = './img/';
        $fileName = $fileUpload['name'];
        $path = $storePath . $fileName;
        move_uploaded_file($fileUpload['tmp_name'], $path);
        $img = '/demoon/demo/img/' . $fileName;
    }
    if (empty($name) == true || empty($price) == true) {
        $_SESSION['error_check'] = 'ĐIỀN THIẾU THÔNG TIN !';
        header("Location: update.php?id_product=".$id);
        die;
    }
    pdo_execute($sql,$name,$img,$price,$catid,$id);
    header("Location:index.php");

    // Delete sản phẩm
}else if (isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM product WHERE ProductId = $id";
    pdo_execute($sql);
    header("location:index.php");
}
?>