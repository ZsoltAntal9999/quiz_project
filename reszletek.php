<?php
    require_once "config.php";
    //print_r($_GET);
   
    $sql="Select id, nev from orszagok where kontinens_id={$_GET['id']} order by Rand()";
    $stmt=$db->query($sql);
    $str2="";
    while($row=$stmt->fetch()){
        extract($row);
        $str2.="<div class='form-check form-check-inline'><label class='form-check-label' for='{$id}'>{$nev}</label>
                    <input class='form-check-input' type='radio' id='{$id}'  name='orszag_id' value='{$id}'>
                </div>";
    }
?>
<style>
    #foto{
    max-height: 300px;
}
</style>

<h1 id="kontinens" class='text-center'><?=$_GET['nev']?></h1>

<div class="row justify-content-center">
    <div class="col-md-3 col-3 bg-light back " id="back"><img  class='back' src="img/next.svg" alt="" ></div>
    <div class="col-md-6 col-12  border text-center align-self-center"><img id="foto" src="" alt="" class="border img-fluid"><div id="jatek_eredmeny"></div>
        <div id="vegeredmeny"></div>
    </div>
    <div class="col-md-3 col-3 bg-light next" id="next"><img class='next' src="img/next.svg" alt="" ></div>
    
</div>

<div class="col-12 col-md text-md-center text-start justify-content-between m-2 bg-light fluid p-5" id="orszagok">
    <?=$str2?>
    <input type="text" id="kitalalando_id" value="" class="d-none">
</div>

<div id="eredmeny"></div>
<div id="kontinens_id" class="d-none"><?=$_GET['id']?></div>
<div id="rossz" class="d-none">0</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src='zaszlok.js'></script>
<script src="orszag.js">

</script>