<?php
echo "<pre>";
print_r($_POST);
echo"</pre>";
 /* if(isset($_POST["btnEnvoyer"])){*/
    $pdo=new PDO("mysql:host=localhost;dbname=parcinfo","root","");
    
      $stm=$pdo->prepare("update prestataire set nom = :nom, mail = :email,
       adresse = :adresse, telephone = :telephone  where id_p = :id");
      $stm->execute(array(
                    ":nom"=>$_POST["nom"],
                    ":email"=>$_POST["email"],
                    ":adresse"=>$_POST["adresse"],
                    ":telephone"=>$_POST["telephone"],
                    ":id"=>$_POST["id_p"])
      );
      header("location:liste_pres.php");            
?>