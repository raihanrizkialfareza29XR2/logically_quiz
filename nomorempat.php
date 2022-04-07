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
        // echo 'Hasil Array : ';
        foreach ($a as $angka) {
            // echo 'Hasil Array : ' . $angka;
            // // echo '<br/>';
            if ($angka % 2 == 0) {
                echo 'genap ,';
            } else {
                echo 'ganjil ,';
            }
            // echo $angka;
        }
    }

    
}

$random = new Angka();
$angka = $random->ganep(5);

?>