<style>
    #siker_kep{
        height: 300px;
    }
</style>
<div id="siker">
    <img src="img/gold_medal.png" alt="" id="siker_kep">
</div>
<?php
    require_once "config.php";
    extract($_POST);
    $sql="Select jatekosnev, rossz from rekord ";
    $stmt=$db->query($sql);
    $row=$stmt->fetch();
    extract($row);
    /*echo $jatekosnev."-".$rossz;*/
    $szoveg="";
    if($rosszj<=$rossz){
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
        <td id='rekord_kontinensid'>{$kontinensj}</td>
        <td id='rekord_jatekos'>{$jatekosnev}</td>
        <td id='rekord_rossz'>{$rossz}</td>
        </tr>
    </tbody>
    <caption>
        A te rossz találataid száma: {$rosszj} db <br> {$szoveg}
    </caption>
</table>";
echo $str
?>
