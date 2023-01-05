<?php
    include 'view/header.php';

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                include 'view/sanpham.php';
                break;
            case 'blog':
                include 'view/blog.php';
                break;
            case 'tintuc':
                include 'view/tintuc.php';
                break;
            case 'lienhe':
                include 'view/lienhe.php';
                break;
            default:
                include 'view/home.php';
                break;
        }
    }
    else{
        include 'view/home.php';
    }




    include 'view/footer.php';
?>