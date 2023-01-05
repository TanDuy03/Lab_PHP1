<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #sub{
            padding: 5px;
            border-radius: 5px;
            border: none;
            background-color: orange;
            color: white;
        }
        #text{
            padding: 5px;
            border-radius: 5px;
        }
        input{
            outline: none;
            border:1px solid grey;
        }
        form{
            text-align: center;
            margin-top: 50px;
        }
        .show{
            color: #ffffff;
            margin: 10px auto;
            /* text-align: center; */
            font-size:30px;
            background-color:black;
            width:fit-content;
            padding: 10px;
            border-radius:10px;
        }
        .container{
            border: 1px solid skyblue;
            width: 300px;
            height: 100px;
            line-height: 100px;
            border-radius: 5px;
            background-color: skyblue;
            margin: auto;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <input type="text" name="ten" id="text" placeholder="Nhập tên...">
            <input type="submit" name="hienthi" value="Hiển thị" id="sub">
        </div>
    </form>
    <?php
    if((isset($_POST['hienthi']))&&($_POST['hienthi'])){
        $ten=$_POST['ten'];
        $kq=' 
            <p class="show">         
                Welcome <span>'.$ten.'<span>
            </p>
            ';
        echo $kq;
    }
    ?>
</body>
</html>