<?php
require_once "config.php";
extract($_POST);
$sql="Insert into uzenetek values (null,'{$mail}', '{$msg}', '{$nev}')";
$stmt=$db->exec($sql);
if($stmt){
echo '<script> alert("Köszönjük a véleményét!");
                window.location.href="index.php#contact";
</script>';
}

?>