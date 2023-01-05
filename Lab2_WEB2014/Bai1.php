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
            height: 25px;
            width:200px;
            border-radius: 5px;
            padding-left: 5px;
            border: 1px solid gray;
        }
        #sub, #re{
            width: 100px;
            background-color: green;
            color: white;
            margin-bottom: 5px;
        }
        .container{
            margin: auto;
            width: 300px;
            border-radius: 5px;
            background-color: skyblue;
        }
        form{
            text-align: center;
        }
        .show-kq{
            margin: auto;
        }
        th,td{
            text-align: center;
        }
        table{
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <h2 style="text-align: center; color:#ffffff; padding-top: 10px">Tra cứu điểm</h2>
            <input type="text" class="input" name="mssv" id="mssv" placeholder="Mã sinh viên" required><br>
            <input type="text" class="input" name="ten" id="ten" placeholder="Họ và tên" required><br>
            <input type="text" class="input" name="mon1" id="mon1" placeholder="Điểm môn thứ nhất" required><br>
            <input type="text" class="input" name="mon2" id="mon2" placeholder="Điểm môn thứ hai" required><br>
            <input type="submit" class="button" name="hienthi" value="Hiển thị" id="sub" onclick="check()"><br>
            <input type="reset" value="Nhập lại" id="re"><br>
        </div>
    </form>
    <script>
        let input = document.querySelector(".input");
        let button = document.querySelector(".button");
        button.disabled = true;
        input.addEventListener("change", stateHandle);

        function stateHandle() {
                if(document.querySelector(".input").value === "") {
                    button.disabled = true;
                } else {
                    button.disabled = false;
                }
            }
        function check() {
            var mssv = document.getElementById("mssv").value;
            var ten = document.getElementById("ten").value;
            var mon1 = document.getElementById("mon1").value;
            var mon2 = document.getElementById("mon2").value;
            if (mssv =="") {
                alert("Please enter");
            }
            else {
                alert("Đã đủ thông tin");
            }
        }
    </script>
    <?php
    if(isset($_POST['hienthi']) && ($_POST['hienthi'])){
        $mssv = $_POST['mssv'];
        $ten = $_POST['ten'];
        $mon1 = $_POST['mon1'];
        $mon2 = $_POST['mon2'];
        $dtb=($mon1  + $mon2)/2;
        if($dtb > 9){
            $xl = "Xuất sắc" and $th = "Cup + 500k";
        }
        else if($dtb > 8){
            $xl = "Giỏi" and $th = "Cup";
        }
        else if($dtb > 6.5){
            $xl = "Khá" and $th = "Không";
        }
        else if($dtb > 5){
            $xl = "Trung bình" and $th = "Không";
        }
        else{
            $xl = "Kém" and $th = "Không";
        }
        $kq= '
        <div class="show-kq">
        <table border="1" style=" border-collapse: collapse;">
            <tr style="background-color:blue; color:white;">
                <th>MSSV</th>
                <th>Tên</th>
                <th>Môn 1</th>
                <th>Môn2</th>
                <th>ĐTB</th>
                <th>Xếp loại</th>
                <th>Thưởng</th>
            </tr>
            <tr>
                <td>'.$mssv.'</td>
                <td>'.$ten.'</td>
                <td>'.$mon1.'</td>
                <td>'.$mon2.'</td>
                <td>'.$dtb.'</td>
                <td>'.$xl.'</td>
                <td>'.$th.'</td>
            </tr>
        </table>
        </div>
        ';
        echo $kq;
    }else {
        echo 'Mời bạn nhập thông tin sinh viên';
    }
    ?>
</body>
</html>