<?php
echo "<pre>";
print_r($_POST);
echo"</pre>";
 
   if(isset($_POST["btnEnvoyer"])){
       $pdo=new PDO("mysql:host=localhost;dbname=parcinfo","root","");
       $stm=$pdo->prepare("insert into prestataire (id_p,nom,email,adresse,telephone)
                  values(?,?,?,?,?)");
       $stm->execute([$_POST["id_p"],
                     $_POST["nom"],
                      $_POST["email"],
                      $_POST["adresse"],
                      $_POST["telephone"]]);        
        echo "prestataire  bien ajouté dans la base données";                
   }
   header("location:liste_pres.php");
?>