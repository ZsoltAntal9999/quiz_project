<?php
require_once "config.php";
extract($_POST);
$sql="Insert into uzenetek values (null,'{$mail}', '{$msg}', '{$nev}')";
$stmt=$db->exec($sql);
//$email=$_POST['mail'];
//$body=$_POST['msg'];
/*include 'mailContact.php';*/
if($stmt){
echo '<script> alert("Köszönjük a véleményét!");
                window.location.href="index.php#contact";
</script>';
}
//header('Location: index.php#contact');
?>