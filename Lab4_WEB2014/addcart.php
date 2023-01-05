<?php
    session_start();
    ob_start();
    if(isset($_POST['dathang']) && ($_POST['dathang'])) {
        $img =  $_POST['img'];
        $tensp =  $_POST['tensp'];
        $gia =  $_POST['gia'];
        $id =  $_POST['id'];
        $sl = $_POST['sl'];
        //tạo mảng
        $sp = array($id,$img,$tensp,$gia,$sl);
        //them vào giỏ hàng
        // $_SESSION['cart'][] = $sp;
        if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
        array_push($_SESSION['cart'],$sp);
        //chuyển trang
        header('location: view_cart.php');
    }
?>