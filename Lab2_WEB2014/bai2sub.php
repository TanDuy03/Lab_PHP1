<?php
    if((isset($_POST['hienthi'])) && ($_POST['hienthi'])){
        $n=$_POST['n'];
        $dayso='<h2>Dãy số: ';
        $daysotong='<h2>Dãy số tổng: ';
        $tong=0;
        $daysochan='<h2>Tổng chẵn: ';
        $chan=0;
        $daysole='<h2>Tổng lẻ: ';
        $le=0;
        for ($i=1; $i <= $n; $i++){
            $dayso.= $i;
            if($i<$n) $dayso.=' , ';
            //
            $daysotong.= $i;
            if($i<$n) $daysotong.=' + ';
            //
            $tong+=$i;
            //
            if($i%2==0){
                $daysochan.= $i;
                if($i<$n&&($i<$n-1)) $daysochan.=' + ';
                $chan+=$i;
            }
            if($i%2!=0){
                $daysole.= $i;
                if($i<$n&&($i<$n-1)) $daysole.=' + ';
                $le+=$i;
            }
        }
        $dayso.='</h2>';
        $daysotong.=' = '.$tong.'</h2>';
        $daysochan.=' = '.$chan.'</h2>';
        $daysole.=' = '.$le.'</h2>';
        echo $dayso;
        echo $daysotong;
        echo $daysochan;
        echo $daysole;

    }else{
        echo 'No blank';
    }
?>
