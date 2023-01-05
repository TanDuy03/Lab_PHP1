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
            border: 1px solid gray;
            margin-top: 20px;
            border-radius: 5px;
            height: 30px;
            width: 250px;
            padding-left: 5px;
        }
        #sub{
            width: 100px;
            background-color: orange;
            border: none;
        }
        .container{
            text-align: center;
        }
        .show{
            color: blue;
            margin-left: 100px;
        }
        p{
            margin-left: 40px;
            font-weight: bold;
        }
        h3{
            color:orangered;
        }
    </style>
</head>
<body>
    <form action="Bai3.php" method="post">
        <div class="container">
            <input type="text" id="canhmot" name="som" placeholder="Cạnh thứ nhất"><br>
            <input type="text" id="canhhai" name="soh" placeholder="Cạnh thứ hai"><br>
            <input type="submit" name="hienthi" onclick="check()" id="sub" >
        </div>
    </form>
    <?php
        if((isset($_POST['hienthi']))&&($_POST['hienthi'])){
            $som=$_POST['som'];
            $soh=$_POST['soh'];
            if(($som>0)&&($soh>0)){
                if($som==$soh){
                    
                    $kq1='Hình vuông';
                } else {
                    $kq1='Hình chữ nhật';
                }
                $kq='<div class="show">
                    <h2>Kết quả: </h2>
                    <p>Cạnh 1: <span style="font-weight:100">'.$som.'</span> </p>
                    <p>Cạnh 2: <span style="font-weight:100">'.$soh.'</span> </p>
                    <h3 class="kq1"> => '.$kq1.'</h3>
                </div>';
                echo $kq;
            }
        }
    ?>
</body>
</html>