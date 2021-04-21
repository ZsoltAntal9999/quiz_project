<?php
require_once "config.php";
    $kontinens=$_POST['kontinens'];

    $sql="Select id,id_kontinensek,foto,orszag_id 
            from reszletek where id_kontinensek=(select id from kontinensek where nev='{$kontinens}')";
    $stmt=$db->query($sql);
    $str="";
    $array=$stmt->fetchAll();
    //print_r($array);
    echo json_encode($array);

?>