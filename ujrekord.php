<?php
    require_once "config.php";
    extract($_POST);
    $sql="Delete from rekord where kontinens_id={$kontinens_id}; ";
    $sql.="Insert into rekord values ({$kontinens_id}, {$rossz},'{$jatekosnev}');";
    $stmt=$db->exec($sql);
    if($stmt){
        echo "Sikeres mentés!";
    }
    else{
        echo "Hibás mentés!";
    }