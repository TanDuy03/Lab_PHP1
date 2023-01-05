<?php
    session_start();
    if(isset($_SESSION['objuser'])){
        unset($_SESSION['objuser']);
        header('location: login2.php');
    }
?>