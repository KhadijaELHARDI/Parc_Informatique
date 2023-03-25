<?php
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  /* if(isset($_POST["btnEnvoyer"])){*/
  require_once("connexion_db.php");
  

  if ( isset($_POST["btnEnvoyer"]) ){
    


      $stm = $pdo->prepare("update materiel set no_serie = ?, nom = ?,
      type =?, modele =?, statut =?, dateEn =? 
      where code = ?;");
      $stm->execute(
        array(
          $_POST["no_serie"],
          $_POST["nom"],
          $_POST["type"],
          $_POST["modele"],
          $_POST["statut"],
          $_POST["dateEn"],
          $_POST["code"]
        )
      );

      //header("location:listeMat.php");
    } 
  




  ?>