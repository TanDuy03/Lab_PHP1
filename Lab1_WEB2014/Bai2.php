<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            outline: none;
            margin-top: 15px;
            height: 30px;
            width: 250px;
            padding-left: 10px;
            border: 1px solid gray;
            border-radius: 5px;
        }
        .container{
            text-align: center;
        }
        #sub{
            width: 100px;
            background-color: orangered;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td{
            height: 30px;
            width: 100px;
            text-align: center;
        }
        form{
            border: 1px solid gray;
            width: 400px;
            margin: auto;
            border-radius: 5px;
            height: 400px;
            background-color: slateblue;
        }
    </style>
</head>
<body>
    <script>
        function check() {
            var mssv = document.getElementById('mssv');
            var ten = document.getElementById('ten');
            var email = document.getElementById('mail');
            var phone = document.getElementById('phone');
            if (mssv.value =="" || ten.value =="" || email.value =="" || phone.value =="") {
                alert('Hãy nhập đầy đủ thông tin');
            } 
            return true;
        }
    </script>
    <form action="Bai2.php" method="post">
        <div class="container">
        <h2 style="text-align: center; color:#ffffff;">THÔNG TIN ĐĂNG NHẬP</h2>
        <input type="text" name="mssv" id="mssv" placeholder="Nhập mã sinh viên" required><br>
        <input type="text" name="ten" id="ten" placeholder="Họ và tên" required><br>
        <input type="text" name="email" id="mail" placeholder="Email" required><br>
        <input type="text" name="phone" id="phone" placeholder="Số điện thoại" required><br>
        <input type="submit" value="Hiển thị" name="hienthi" onclick="return check()" id="sub">
        </div>
    </form>
    <?php
        if((isset($_POST['hienthi'])) && ($_POST['hienthi'])){
            $mssv = $_POST['mssv'];
            $ten = $_POST['ten'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $kq = '
            <table border="1" style=" border-collapse: collapse; width: 100%; margin-top:50px;" >
            <tr>
                <td style="font-weight:bold;">Mã sinh viên</td>
                <td style="font-weight:bold;">Họ tên</td>
                <td style="font-weight:bold;">Email</td>
                <td style="font-weight:bold;">Số điện thoại</td>
            </tr>
            <tr>
                <td> ' . $mssv . ' </td>
                <td> ' . $ten . ' </td>
                <td> ' . $email . ' </td>
                <td> ' . $phone . ' </td>
            </tr>
            </table>';
            echo $kq;
        }
    ?>
</body>
</html>