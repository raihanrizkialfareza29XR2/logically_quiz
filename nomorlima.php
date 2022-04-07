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
        $max = max($a);
        echo 'terbesar : ' . $max;
    }

    
}

$random = new Angka();
$angka = $random->ganep(5);

?>