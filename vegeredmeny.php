<?php
    require_once "config.php";
    extract($_POST);
    $sql="Select jatekosnev, rossz from rekord ";
    $stmt=$db->query($sql);
    $row=$stmt->fetch();
    extract($row);
    /*echo $jatekosnev."-".$rossz;*/
    $szoveg="";
    if($rosszj<$rossz){
        $szoveg="Gratulálunk! Te vagy a legjobb ebben a kategóriában!";
    }
$str="<table class='table table-bordered'>
    <thead class='thead-dark'>
        <th>Kontinens</th>
        <th>Legjobb játékos neve</th>
        <th>Rossz találatok száma</th>
    </thead>
    <tbody>
        <tr class='table-success'>
        <td>{$kontinensj}</td>
        <td>{$jatekosnev}</td>
        <td>{$rossz}</td>
        </tr>
    </tbody>
    <caption>
        A te rossz találataid száma: {$rosszj} db <br> {$szoveg}
    </caption>
</table>";
echo $str
?>