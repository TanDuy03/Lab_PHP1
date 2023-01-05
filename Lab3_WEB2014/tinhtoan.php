<?php
    function tinh($a, $b,$p){
        switch($p){
            case '+':
                $kq = $a + $b;;
                break;
            case '-' :
                $kq = $a - $b;
                break;
            case '*':
                $kq = $a * $b;
                break;
            case '/':
                $kq = $a / $b;
                break;
            default:
                $kq = 0;
                break;
        }
        echo         $kq = '<div class="kq">
        Bạn đã nhập phép toán: '.$a.' '.$p.' '.$b.' = '.$kq.';
        </div>';
    }
    // function hienthi($a,$b,$p,$kq){
    //     $kq = '<div class="kq">
    //         Bạn đã nhập phép toán: '.$a.' '.$p.' = '.$kq.';
    //     </div>';
    //     echo $kq;
    // }

?>