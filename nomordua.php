<?php

class angka {
    function hitung ($a) {
        if ($a % 2 == 0) {
            echo 'bilangan ini genap';
        } else {
            'bilangan ini ganjil';
        }
        
    }
}

$angka = new angka();
echo $angka->hitung(8);

?>