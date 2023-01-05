<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .boxcenter {
        width: 70%;
        margin: 0 auto;
        }

        .boxsp {
            float: left;
            width: 30%;
            margin: 1.5%;
            text-align: center;
            border: 1px solid gray;
            border-radius: 10px;
        }

        .boxsp img {
            width: 100%;
        }

        span {
            color: red;
        }

        .boxsp p {
            font-size: 14pt;
            font-weight: bold;
        }

        th {
            background-color: #CCC;
        }

        table {
            width: 100%;
        }
        .btn{
            width:80%;
            height:30px;
            margin-bottom: 10px;
            border-radius: 10px;
            border: 1px solid gray;
        }
        .btn:hover{
            border: 1px solid red;
        }
        .slsp{
            margin-bottom: 10px;
            width: 50px;
        }
    </style>
</head>
<body>
    <div class="boxcenter">
        <div class="boxsp">
            <form action="addcart.php" method="post">
                <img src="img/iP1.png" alt="">
                <p>Điện thoại 1</p>
                <p>Giá: <span>13.490.000</span> đồng</p>
                <input type="hidden" name="img" value="img/iP1.png"/>               
                <input type="hidden" name="tensp" value="Điện thoại 1"/>              
                <input type="hidden" name="gia" value="13490000"/>
                <input type="hidden" name="id" value="1"/>
                <input type="number" name="sl" id="" value="1" class="slsp"> 
                <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
            </form>
        </div>
        <div class="boxsp">
            <form action="addcart.php" method="post">
                <img src="img/iP2.png" alt="">
                <p>Điện thoại 2</p>
                <p>Giá: <span>18.690.000</span> đồng</p>
                <input type="hidden" name="img" value="img/iP2.png"/>               
                <input type="hidden" name="tensp" value="Điện thoại 2"/>              
                <input type="hidden" name="gia" value="18690000"/>
                <input type="hidden" name="id" value="2"/>
                <input type="number" name="sl" id="" value="1" class="slsp"> 
                <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
            </form>
        </div>
        <div class="boxsp">
            <form action="addcart.php" method="post">
                <img src="img/iP3.png" alt="">
                <p>Điện thoại 3</p>
                <p>Giá: <span>21.100.000</span> đồng</p>
                <input type="hidden" name="img" value="img/iP3.png"/>               
                <input type="hidden" name="tensp" value="Điện thoại 3"/>              
                <input type="hidden" name="gia" value="21100000"/>
                <input type="hidden" name="id" value="3"/>
                <input type="number" name="sl" id="" value="1" class="slsp"> 
                <input type="submit" name="dathang" value="Đặt hàng" class="btn" />
            </form>
        </div>
    </div>
</body>
</html>