<?php
    require_once "config.php";
    //print_r($_GET);
   
    $sql="Select id, nev from orszagok where kontinens_id={$_GET['id']}";
    $stmt=$db->query($sql);
    $str2="";
    while($row=$stmt->fetch()){
        extract($row);
        $str2.="<div class='form-check form-check-inline'><label class='form-check-label' for='{$id}'>{$nev}</label>
                    <input class='form-check-input' type='radio' id='{$id}'  name='orszag_id' value='{$id}'>
                </div>";
    }
?>
<h1 id="kontinens" class='text-center'><?=$_GET['nev']?></h1>

<div class="row justify-content-center">
    <div class="col-3 bg-light back "><img  class='back' src="img/next.svg" alt=""></div>
    <div class="col-6 border text-center"><img id="foto" src="" alt=""></div>
    <div class="col-3 bg-light next" ><img class='next' src="img/next.svg" alt=""></div>
    
</div>

<div  class="col text-center m-2 bg-light p-5" id="orszagok">
    <?=$str2?>
    <input type="text" id="kitalalando_id" value="" >
</div>

<div id="eredmeny"></div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src='zaszlok.js'></script>
<script src="orszag.js">

</script>