<?php
  
    if(isset($_POST["btnEnvoyer"])){
      echo'<pre>';
    print_r($_FILES);
    echo'</pre>';
       $pdo=new PDO("mysql:host=localhost;dbname=parcinfo","root","");
       $stm=$pdo->prepare("insert into materiel  (code,no_serie,nom,type,modele,statut,dateEn,id_pre)
                  values(?,?,?,?,?,?,?,?)");
       $stm->execute([$_POST["code"],
                     $_POST["no_serie"],
                      $_POST["nom"],
                      $_POST["type"],
                      $_POST["modele"],
                      $_POST["statut"],
                      $_POST["dateEn"],
                      $_POST["prestataire"]]);        
        echo "matériel  bien ajouté dans la base données";                
   }
   header("location:listeMat.php");

  
?>