<?php
    session_start();
    if(isset($_SESSION['objuser'])){
        echo '<div style="text-align: center";><h1>Bạn đã đăng nhập với</h1>';
        // echo '<br> - Tên đăng nhập: '.$_SESSION['objuser'][0];
        // echo '<br> - Mật khẩu: '.$_SESSION['objuser'][1];
        echo '<div style="margin-top:20px;">
        <br>Tên đăng nhập: <span style="color:red;">'.$_SESSION['objuser'][0].'</span></div>';
        echo '<br>Mật khẩu: <span style="color:red;">'.$_SESSION['objuser'][1].'</span>';
    
        echo '<div style="margin-top:20px;">
            <br><a href="lg_xoa.php">Đăng xuất</a>
        </div>';
    }else {
        echo '<div style="text-align: center; font-size:25px;">Bạn đã đăng xuất<br>';
        echo ' <a href="login.php">Đăng nhập </a></div>';
    }
?>