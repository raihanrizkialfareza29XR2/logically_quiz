<?php

class angka {
    function hitung ($a) {
        $jumlah = 0;
        for ($i= 1; $i < $a + 1 ; $i++) { 
            echo "$i + ";
            $jumlah += $i;
        }
        echo "<br/>total : $jumlah";
        
    }
}

$angka = new angka();
echo $angka->hitung(8);

?>