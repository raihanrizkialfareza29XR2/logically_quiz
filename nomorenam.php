<?php

class Angka {
    
    function ganep($b, $c) {
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
        if ($a[0] + $a[1] == $c || $a[0] + $a[2] == $c || $a[0] + $a[3] == $c || $a[0] + $a[4] == $c || $a[1] + $a[2] == $c || $a[1] + $a[3] == $c || $a[1] + $a[4] == $c || $a[2] + $a[3] == $c || $a[2] + $a[4] == $c || $a[3] + $a[4] == $c) {
            echo 'bisa';
        } else {
            echo 'tidak bisa';
        }
    }

    
}

$random = new Angka();
$angka = $random->ganep(5, 10);

?>