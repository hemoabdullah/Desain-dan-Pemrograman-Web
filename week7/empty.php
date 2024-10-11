<?php
    $myArray = array();
    if(empty($myArray)) {
        echo "Array tidak terdefinisikan atau kosong.";
    } else {
        echo "Array terdefinisikan atau tidak kosong";
    }
    echo " <br>";
    if(empty($nonExistentVar)) {
        echo "Variabel tidak terdefinisikan atau kosong.";
    } else {
        echo "Variabel terdefinisikan atau tidak kosong.";
    }
?>