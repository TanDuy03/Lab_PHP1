<?php
    function cung($ngay, $thang, $nam,$kq){
        switch($thang) {
            case 1:
                if($ngay <= 19 && $ngay > 0)
                $kq = 'Bạn sinh ngày'.$ngay.'tháng'.$thang.'năm'.$nam.
                $kq = 'Bạn thuộc cung ma kết';
                break;
        }
    }
?>