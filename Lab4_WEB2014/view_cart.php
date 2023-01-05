<?php
    session_start();
    if(isset($_SESSION['cart'])) {
        // echo var_dump($_SESSION['cart']);
        // echo '<br>Bạn có muốn tiếp tục <a href="bai2_sp.php">đặt hàng?</a>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
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

        th,
        td {
            border: 1px #999 solid;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <div class="boxcenter">
        <h2>ĐƠN HÀNG CỦA BẠN</h2>
        <table style="border-collapse:collapse; ">
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
            <?php
                $tong = 0;
                $i = 0;
                foreach($_SESSION['cart'] as $sp){
                    $ttien = $sp[3] * $sp[4];
                    $tong += $ttien;
                    echo '<tr>
                    <td>'.($i+1).'</td>
                    <td><img src="'.$sp[1].'" width="100"></td>
                    <td>'.$sp[2].'</td>
                    <td>'.$sp[3].'</td>
                    <td>'.$sp[4].'</td>
                    <td>'.$ttien.'</td>
                    <td style="text-align:center"><a href="xoacart.php?id='.$i.'">Xóa</a></td>
                    </tr>';
                    $i++;
                }
            ?>
            <tr>
                <td colspan="5">Tổng đơn hàng</td>
                <td style="background-color: #CCC;"><?=$tong?></td>
                <td></td>
            </tr>

        </table>
        <p><a href=""></a></p>
        <p><a href="bai2_sp.php">Tiếp tục đặt hàng</a></p>
        <p><a href="xoacart.php">Xóa</a></p>
    </div>
</body>
</html>
<?php
    }else{
        echo '<br>Giỏ hàng rỗng <a href="bai2_sp.php">đặt hàng nha?</a>';
    }
?>