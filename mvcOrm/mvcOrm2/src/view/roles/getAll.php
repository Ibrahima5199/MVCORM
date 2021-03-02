<?php

//    echo "<pre>";
//    var_dump($data);
//    echo "</pre>";

    foreach ($data as $role){
        echo $role->getId() . " ) " . $role->getNom() . "<br>";
    }
    ?>