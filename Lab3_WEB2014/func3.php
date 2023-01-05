<?php
    function tinh($ngay,$thang){
        switch ($thang){
            case '1':
                if($ngay>0&&$ngay<=19){
                    $kq= 'Bạn thuộc cung ma kết';
                } elseif($ngay>19&&$ngay<=31){
                    $kq='Bạn thuộc cung bảo bình';
                }
                else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '2':
                if($ngay>0&&$ngay<=18){
                    $kq= 'Bạn thuộc cung bảo bình';
                } elseif($ngay>18&&$ngay<=28){
                    $kq='Bạn thuộc cung song ngư';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '3':
                if($ngay>0&&$ngay<=20){
                    $kq= 'Bạn thuộc cung song ngư';
                } elseif($ngay>20&&$ngay<=31){
                    $kq='Bạn thuộc cung bạch dương';
                }else{
                    $kq = 'Bạn nhập sai';
                }
            break;
            case '4':
                if($ngay>0&&$ngay<=19){
                    $kq= 'Bạn thuộc cung bạch dương';
                } elseif($ngay>19&&$ngay<=30){
                    $kq='Bạn thuộc cung kim ngưu';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '5':
                if($ngay>0&&$ngay<=20){
                    $kq= 'Bạn thuộc cung kim ngưu';
                } elseif($ngay>20&&$ngay<=31){
                    $kq='Bạn thuộc cung song tử';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '6':
                if($ngay>0&&$ngay<=21){
                    $kq= 'Bạn thuộc cung song tử';
                } elseif($ngay>21&&$ngay<30){
                    $kq='Bạn thuộc cung cự giải';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '7':
                if($ngay>0&&$ngay<=22){
                    $kq= 'Bạn thuộc cung cự giải';
                } elseif($ngay>22&&$ngay<=31){
                    $kq='Bạn thuộc cung sư tử';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '8':
                if($ngay>0&&$ngay<=22){
                    $kq= 'Bạn thuộc cung sư tử';
                } elseif($ngay>22&&$ngay<=31){
                    $kq='Bạn thuộc cung sử nữ';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '9':
                if($ngay>0&&$ngay<=22){
                    $kq= 'Bạn thuộc cung sử nữ';
                } elseif($ngay>22&&$ngay<=30){
                    $kq='Bạn thuộc cung thiên bình';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '10':
                if($ngay>0&&$ngay<=23){
                    $kq= 'Bạn thuộc cung thiên bình';
                } elseif($ngay>234&&$ngay<=31){
                    $kq='Bạn thuộc cung hổ cấp';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '11':
                if($ngay>0&&$ngay<=21){
                    $kq= 'Bạn thuộc cung hổ cấp';
                } elseif($ngay>21&&$ngay<=30){
                    $kq='Bạn thuộc cung nhân mã';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            case '12':
                if($ngay>0&&$ngay<=21){
                    $kq= 'Bạn thuộc cung nhân mã';
                } elseif($ngay>21&&$ngay<=31){
                    $kq='Bạn thuộc cung ma kết';
                }else{
                    $kq = 'Bạn nhập sai';
                }
                break;
            default:
                $kq=0;
                break;

        }
        return $kq;
    }
    function hien($ngay,$thang,$nam, $k,$ten){
        $kq='<h2 style="color: red;
        font-weight: bold;">
        Tên của bạn: '.$ten.' <br>
        Ngày sinh của bạn '.$ngay.' / '.$thang.' / '.$nam.' => '.$k.'</h2>';
        echo $kq;
    }
    ?>
