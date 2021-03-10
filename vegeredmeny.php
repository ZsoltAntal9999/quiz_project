<?php
    require_once "config.php";
    extract($_POST);
    $sql="Select jatekosnev, rossz from rekord ";
    $stmt=$db->query($sql);
    $row=$stmt->fetch();
    extract($row);
    echo $jatekosnev."-".$rossz;
?>