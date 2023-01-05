<?php
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "../model/user.php";
    if((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $role = checkuser($user,$pass);
        $_SESSION['role'] = $role;
        if($role == 1) header('location: index.php');
        else{
            $txt_erro="Tên đăng nhập hoặc mật khẩu sai";
        } // header('location: login.php');
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="view/style.css">
    <style>
        input{
            height: 30px;
            width: 250px;
            border: 1px solid gray;
            border-radius: 10px;
            margin: 20px 0 10px 0;
            padding-left: 10px;
            outline: none;
        }
    </style>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="user" id="" placeholder="Tên đăng nhập"> <br>
        <input type="text" name="pass" id="" placeholder="Mật khẩu"> <br>
        <?php
            if(isset($txt_erro)&&($txt_erro!="")){
                echo "<font color='red'>".$txt_erro."</font>";
            }
        ?> 
        <br> <input type="submit" name="dangnhap" id="" value="Đăng nhập">
    </form>
</body>
</html>