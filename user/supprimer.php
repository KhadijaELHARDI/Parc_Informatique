<?php

 if (isset($_GET['id_u'])){
 $pdo=new PDO("mysql:host=localhost;dbname=parcinfo","root","");
 $stm=$pdo->prepare("delete from user where id_u=:id_u");
 
 $stm->execute([":id_u"=>$_GET['id_u']]);
 header("location:liste_user.php");
 }
 
?>