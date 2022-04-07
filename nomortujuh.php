<?php

class Angka {
    
    function ganep($b) {
        $a = array();
        $i = 1;
        while($i < $b + 1) {
            $rand = mt_rand(0, 10). "";
            $i++;
            // echo $rand;
            array_push($a, $rand);
        }
        foreach ($a as $p) {
            echo 'Hasil Array : '. $p;
            echo '<br/>';
        }
        if ($a[0] == $a[1] || $a[0] == $a[2] || $a[0] == $a[3] || $a[0] == $a[4] || $a[1] == $a[2] || $a[1] == $a[3] || $a[1] == $a[4] || $a[2] == $a[3] || $a[2] == $a[4] || $a[3] == $a[4]) {
            echo 'ada';
        } else {
            echo 'tidak ada';
        }
    }

    
}

$random = new Angka();
$angka = $random->ganep(5);

?>