<?php

 if (isset($_GET['id_p'])){
 $pdo=new PDO("mysql:host=localhost;dbname=parcinfo","root","");
 $stm=$pdo->prepare("delete from prestataire where id_p=:id_p");
 
 $stm->execute([":id_p"=>$_GET['id_p']]);
 header("location:liste_pres.php");
 }
 
?>