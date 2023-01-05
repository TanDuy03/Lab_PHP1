<?php
    session_start();
    ob_start();
    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        //tạo mảng
        $objuser = array($user, $pass);
        // echo var_dump($objuser);
        // lưu session
        $_SESSION['objuser'] = $objuser;
        //chuyển trang 
        header('location:login2.php');

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin-top: 20px;
            width: 250px;
            height: 30px;
            border-radius: 10px;
            padding-left: 10px;
            outline: none;
            border: 1px solid gray;
        }
        .button{
            width: 100px;
        }
        form{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="user" id="user" placeholder="Tên đăng nhập" class="input"><br>
        <input type="password" name="pass" id="pass" placeholder="Mật khẩu" class="input" required><br>
        <input type="submit" name="dangnhap" value="Đăng nhập" class="button">
    </form>
    <script>
        let input = document.querySelector(".input");
        let button = document.querySelector(".button");
        button.disabled = true;
        input.addEventListener("change", stateHandle);
        function stateHandle() {
            if(document.querySelector(".input").value === "") {
                button.disabled = true;
            }  else {
                button.disabled = false;
            }
        }
    </script>
</body>
</html>