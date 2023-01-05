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
    <script>
        function valid() {
            var mssv = document.getElementById('mssv');
            var ten = document.getElementById('ten');
            var email = document.getElementById('mssv');
            var phone = document.getElementById('mssv');
            if (mssv.value =="" || ten.value =="" || email.value =="" || phone.value =="") {
                alert('Hãy nhập đầy đủ thông tin');
            } 
            return true;
        }
    </script>
</head>
<body>
    <form action="Bai2sub.php" method="post">
        <h2 style="text-align: center; color:#ffffff;">THÔNG TIN ĐĂNG NHẬP</h2>
        <div class="container">
        <input type="text" name="mssv" placeholder="Nhập mssv" id="mssv" required><br>
        <input type="text" name="ten" placeholder="Họ và tên" id="ten" required><br>
        <input type="email" name="email" placeholder="Email" id="email" required><br>
        <input type="text" name="phone" placeholder="Số điện thoại" id="phone" required> <br>
        <input type="submit" name="hienthi" value="Hiển thị" id="sub" onclick="return valid()"></input>
    </form>
    <?php
    if ((isset($_POST['hienthi'])) && ($_POST['hienthi'])) {
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
    </table>
    ';
    echo $kq;
}
?>
</body>
</html>