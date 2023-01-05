<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function vali(){
            var ten = document.getElementById('ten');
            if(ten.value==""){
                alert('Vui lòng nhập tên');
                ten.focus();
                return false;
            }
            if(ngay.value==""){
                alert('Hãy nhập ngày sinh');
                ngay.focus();
                return false;
            }
            if(thang.value==""){
                alert('Hãy nhập tháng sinh');
                thang.focus();
                return false;
            }
            if(nam.value==""){
                alert('Hãy nhập năm sinh');
                nam.focus();
                return false;
            }
            return true;
        }
    </script>
    <style>
        input{
            width:250px;
            height: 25px;
            padding-left: 10px;
            margin-top: 20px;
            border-radius: 10px;
            border: 1px solid gray;
            outline: none;
        }
        input[type="text"]:focus{
            border: 2px solid red;
        }
        #hienthi{
            height: 30px;
            width:100px;
        }
    </style>
</head>
<body>
    <form action="" method="post" <?php echo $_SERVER['PHP_SELF'];?>>
        <input type="text"  name="ten" placeholder="Họ và tên" id="ten" ><br>
        <input type="text"  name="ngay" placeholder="Ngày" id="ngay" ><br>
        <input type="text"  name="thang" placeholder="Tháng" id="thang"><br>
        <input type="text"  name="nam" placeholder="Năm" id="nam"><br>
        <input type="submit"  name="hienthi" id="hienthi" onclick="return vali()" value="Hiển thị"> 
    </form>
    <?php
        include './func3.php';
        if(isset($_POST['hienthi'])&&($_POST['hienthi'])){
            $ten=$_POST['ten'];
            $ngay=$_POST['ngay'];
            $thang=$_POST['thang'];
            $nam=$_POST['nam'];
            $kq=tinh($ngay,$thang,$nam);
            // echo 'Tên của bạn: '.$ten;
            hien($ngay,$thang,$nam,$kq,$ten);
        }
    ?>
</body>
</html>