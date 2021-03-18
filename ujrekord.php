<?php
    require_once "config.php";
    extract($_POST);
    $sql="Delete from rekord ; ";
    $sql.="Insert into rekord values ({$kontinens_id}, {$rossz},'{$jatekosnev}');";
    $stmt=$db->exec($sql);
    if($stmt){
        echo "Sikeres mentés!";
    }
    else{
        echo "Hibás mentés!";
    }