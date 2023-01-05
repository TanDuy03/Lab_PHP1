<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin:10px auto;
            height:25px;
            width:250px;
            border-radius: 10px;
            outline: none;
            border: 1px solid gray;
            padding-left: 10px;
            margin-top: 20px;
        }
        #sub{
            width: 80px;
        }
        .container{
            text-align: center;
            width: 400px;
            height: 200px;
            background-color: steelblue;
            border-radius: 5px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <input type="text" name="mot" id="num1" placeholder="Nhập ngẫu nhiên số từ 1 - 5"  ><br>
            <input type="text" name="hai" id="num2" placeholder="Nhập ngẫu nhiên số từ 1 - 5"><br>
            <input type="submit" name="hienthi" value="Hiển thị" id="sub" onclick="kiemtra()">
        </div>
    </form>
    <script>
        function kiemtra() {
            var num1 = document.getElementById("num1").value;
            var num2 = document.getElementById("num2").value;
                if(num1 == "" || num2 == ""){
                    alert("Bạn chưa nhập số");
                }
                else if(num1 < 1 || num2 < 1){
                    alert("Số vừa nhập nhỏ hơn giá cho phép");
                }
                else if(num1 > 5 || num2 > 5){
                    alert("Số vừa nhập lớn hơn giá cho phép");
                }
                document.getElementById("demo").innerHTML = "Chuẩn rồi";
        }
    </script>
    <?php
        if ((isset($_POST['hienthi'])) && ($_POST['hienthi'])) {
            $giatri1 = $_POST['mot'];
            $giatri2 = $_POST['hai'];
            $tong = $giatri1 or $giatri2;
            if($giatri1 == $giatri2){
                echo "Bạn đã trúng thưởng $tong.000.000.000 đồng";
                $quydoi = round(((($tong * 1000000000) / 23447) * 0.001),3);
                $kq = '
                <h2>Quy đổi sang USD: <span>'.$quydoi.'</span></h2>
                ';
                echo $kq;
            }
            else {
                echo "Chúc bạn may mắn lần sau";
            }
        }
    ?>
</body>
</html>