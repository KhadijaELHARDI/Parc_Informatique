<?php
echo "<pre>";
print_r($_POST);
echo"</pre>";
 
   if(isset($_POST["btnEnvoyer"])){
       $pdo=new PDO("mysql:host=localhost;dbname=parcinfo","root","");
       $stm=$pdo->prepare("insert into user (id_u,nom,prenom,adresse,telephone,email,idm)
                  values(?,?,?,?,?,?,?)");
       $stm->execute([
                      $_POST["id_u"],
                      $_POST["nom"],
                      $_POST["prenom"],
                      $_POST["adresse"],
                      $_POST["telephone"],
                      $_POST["email"],
                      $_POST["materiel"],
                     ]);        
        echo "user  bien ajouté dans la base données";                
   }
   else {
      echo "l'insertion à echoué ";
   }
   header("location:liste_user.php");
?>