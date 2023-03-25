<?php

 if (isset($_GET['code'])){
    require_once("connexion_db.php");
 $stm=$pdo->prepare("delete from materiel where code=:code");
 
 $stm->execute([":code"=>$_GET['code']]);
 header("location:listeMat.php");
 }
 
?>