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
        <input type="text" placeholder="Nhập ngày" name="ngay"><br>
        <input type="text" placeholder="Nhập tháng" name="thang"><br>
        <input type="text" placeholder="Nhập năm" name="nam"><br>
        <input type="submit" value="Hiển thị" name="hienthi">
    </form>
    <?php
        include"funtionbai2.php";
        if((isset($_POST['hienthi'])) && ($_POST['hienthi'] )){
            $ngay = $_POST['ngay'];
            $thang = $_POST['thang'];
            $nam = $_POST['nam'];
            
        }
        
    ?>
</body>
</html>