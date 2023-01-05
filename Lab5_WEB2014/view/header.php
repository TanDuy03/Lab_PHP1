<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Shoe</title>
    <!-- <link rel="shortcut icon" href="./image/log11.png" type="image/x-icon"> -->
    <link rel="shortcut icon" href="image/logo2.png" type="image/x-icon"> 
    <link rel="stylesheet" href="./view/CSS/style_index.css">
    <link rel="stylesheet" href="./view/CSS/style_sanpham.css">
    <link rel="stylesheet" href="./view/CSS/blog.css">
    <link rel="stylesheet" href="./view/CSS/tintuc.css">
    <link rel="stylesheet" href="./view/CSS/lienhe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="box1">
            <img src="https://bizweb.dktcdn.net/100/091/132/themes/857463/assets/logo.png?1649297762433" alt="">
        </div>
        <!--  -->
        <!--  -->
        <div class="box2">
            <div class="cart">
                <i class="fa fa-cart-plus" style="font-size:25px ;"></i>
            </div>
            <div class="heart">
                <i class="fa fa-heart" style="font-size:23px ;"></i>
            </div>
            <div class="login">
                <div class="user">
                    <i class="fa fa-user" style="font-size:25px ;">
                        <div class="drop-down">
                            <li><a href="login.html">Đăng nhập</a></li>
                            <li><a href="#">Đăng kí</a></li>
                        </div>
                    </i>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php"  class="active"><i class="fa fa-home" style="font-size: 20px;">&nbsp;</i>Trang chủ</a></li>
            <li><a href="index.php?act=sanpham" >Sản phẩm</a></li>
            <li><a href="index.php?act=blog">Blog</a></li>
            <li><a href="index.php?act=tintuc">Tin tức</a></li>
            <li><a href="index.php?act=lienhe">Liên hệ</a></li>
        </ul>
        <div class="search-container">
            <form action="">
                <input type="search" placeholder="Tìm kiếm..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </nav>