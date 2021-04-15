<?php
    require_once "config.php";
    if(isset($_POST["hirlevel"])){
        extract($_POST);
        include "mailHirlevel.php";
        echo '<script> alert("Köszönjük hogy feliratkozott a hírlevelünkre!");
                window.location.href="index.php#about";
</script>';
    }
?>

<form method="post" class="form-inline" id="hirlevel">
    <input type="email" name="level" placeholder="Add meg az email címed!" class="form-control" required>
    <input type="submit" value="Feliratkozás a hírlevélre" name="hirlevel" class="form-control btn btn-success">
</form>