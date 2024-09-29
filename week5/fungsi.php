<?php

    // 4
    /* function perkenalan(){
        echo "Assalamualaikum, ";
        echo "Perkenalkan, nama saya Nindy<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    perkenalan();
    perkenalan();

    // 5

    function perkenalan($nama, $salam) {
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    perkenalan("hammam", "Hallo");

    echo"<hr>";

    $saya = "ahmed";
    $ucapanSalam = "Selamat malam";

    perkenalan($saya,$ucapanSalam);
    */

    // 6
    function perkenalan($nama, $salam = "Assalamualaikum"){
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    perkenalan("Hammam", "Hallo");
    
    echo"<hr>";

    $saya = "ahmed";
    $ucapanSalam = "Selamat malam";
    perkenalan($saya);
   
?>
