<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="container">
            <input type="text" name="a" id="document" placeholder="Số thứ nhất"> 
            <select name="pheptinh" id="">
                <option value="+" selected>+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="b" id="document" placeholder="Số thứ hai"> 
            <input type="submit" name="tinhtoan" value="Tính toán" >
        </div>
    </form>
    <div class="ht"></div>
    <?php
        include "tinhtoan.php";
        if ((isset($_POST['tinhtoan'])) && ($_POST['tinhtoan'])){
            //input
            $soa = $_POST['a'];
            $sob = $_POST['b'];
            $pt = $_POST['pheptinh'];
            //xử lý
            $kq = tinh($soa, $sob,$pt); 
        }
    ?>
</body>
</html>