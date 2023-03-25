<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>View</title>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="git-network-outline"></ion-icon>
                        </span>
                        <b>
                            <h2> <span class="title">Parc Informatique</span>
                        </b></h2>
                    </a>
                </li>

                <li>
                    <a href="../menu/index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="../user/liste_user.php">
                        <span class="icon">
                            <ion-icon name="person-add-outline"></ion-icon>
                        </span>
                        <span class="title">Utilisateur</span>
                    </a>
                </li>

                <li>
                    <a href="../materiel/listeMat.php">
                        <span class="icon">
                            <ion-icon name="desktop-outline"></ion-icon>
                        </span>
                        <span class="title">Materiel</span>
                    </a>
                </li>

                <li>
                    <a href="../prestataire/liste_pres.php">
                        <span class="icon">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </span>
                        <span class="title">Prestataire</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-dropbox"></ion-icon>
                        </span>
                        <span class="title">Historique du stock</span>
                    </a>
                </li>

                <!---li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li-->

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!--div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div-->

                <div class="user">
                    <img src="LGO.png" alt="">
                </div>
            </div>
            <style type="text/css">
                * {

                    padding: 0;
                    margin: 0;
                    box-sizing: border-box;
                }

                body {

                    background-color: #FFFFFF;
                }

                .background {

                    width: 430px;
                    height: 520px;
                    position: absolute;
                    transform: translate(-50%, -50%);
                    left: 50%;
                    top: 50%;
                }

                .background .shape {

                    height: 150px;
                    width: 150px;
                    position: absolute;
                    border-radius: 50%;
                }

                .shape:first-child {

                    background: linear-gradient(#FF6600,
                            #b1aca6);
                    left: -100px;
                    top: -100px;
                }

                .shape:last-child {

                    background: linear-gradient(to right, #FF6600,
                            #b1aca6);
                    right: -100px;
                    bottom: -100px;
                }

                form {

                    height: 725px;
                    width: 450px;
                    background-color: rgba(255, 255, 255, 0.13);
                    position: absolute;
                    transform: translate(-50%, -50%);
                    top: 50%;
                    left: 50%;
                    border-radius: 10px;
                    backdrop-filter: blur(10px);
                    border: 2px solid rgba(255, 255, 255, 0.1);
                    box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
                    padding: 50px 35px;
                }

                form * {

                    font-family: 'Poppins', sans-serif;
                    color: #FF6600;
                    letter-spacing: 2px;
                    outline: none;
                    border: none;
                }

                form h3 {
                    margin-bottom: 25px;
                    font-size: 32px;
                    font-weight: 550;
                    line-height: 42px;
                    text-align: center;

                }

                input {

                    display: block;
                    height: 25px;
                    width: 100%;
                    background-color: rgba(255, 255, 255, 0.959);
                    border-radius: 3px;
                    padding: 10px;
                    margin-top: 8px;
                    font-size: 14px;
                    font-weight: 300;
                }
            </style>
            <!--style type="text/css">
    * {

      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {

      background-color: #e4e4e7;
    }

    .background {

      width: 430px;
      height: 520px;
      position: absolute;
      transform: translate(-50%, -50%);
      left: 50%;
      top: 50%;
    }

    .background .shape {

      height: 150px;
      width: 150px;
      position: absolute;
      border-radius: 50%;
    }

    .shape:first-child {

      background: linear-gradient(#6629b6,
          #9555b9);
      left: -100px;
      top: -100px;
    }

    .shape:last-child {

      background: linear-gradient(to right,
          #20534d36,
          #b1aca6);
      right: -100px;
      bottom: -100px;
    }

    form {

      height: 725px;
      width: 450px;
      background-color: rgba(255, 255, 255, 0.13);
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
      padding: 50px 35px;
    }

    form * {

      font-family: 'Poppins', sans-serif;
      color: #746d6dfd;
      letter-spacing: 2px;
      outline: none;
      border: none;
    }

    form h3 {
      margin-bottom: 25px;
      font-size: 32px;
      font-weight: 550;
      line-height: 42px;
      text-align: center;

    }

    input {

      display: block;
      height: 25px;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.959);
      border-radius: 3px;
      padding: 10px;
      margin-top: 8px;
      font-size: 14px;
      font-weight: 300;
    }
  </style--->
</head>

<body>
    <?php
    require_once("connexion_db.php");
    $idF = $_GET["code"];
    $stm = $pdo->prepare("select * from materiel where code=?");
    $stm->execute([$idF]);
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    ?>

    <form>
        
            <h3>Afficher En Détail</h3>
            no_série: <input type="text" name="no_serie" value="<?php echo $result['no_serie']; ?>"><br>
            nom : <input type="text" name="nom" value="<?php echo $result['nom']; ?>"><br>
            type : <input type="text" name="type" value="<?php echo $result['type']; ?>"><br>
            modèle : <input type="number" name="modele" value="<?php echo $result['modele']; ?>"><br>
            statut : <input type="varchar" name="statut" value="<?php echo $result['statut']; ?>"><br>
            date Entée: <input type="date" name="dateEn" value="<?php echo $result['dateEn']; ?>"><br>
            prestataire : <select name="prestataire" value="<?php echo $result['nom']; ?>">
                <?php
                require_once("connexion_db.php");
                $stm = $pdo->prepare("select * from prestataire");
                $stm->execute([]);
                $prestataire = $stm->fetchAll(PDO::FETCH_ASSOC);
                foreach ($prestataire as $c) {
                    echo '<option value="' . $c["id_p"] . '">' . $c["nom"] . '</option>';
                }
                ?>
                <br>
                <br>
                <input type="hidden" name="code" value="<?= $idF ?>">
                <!---input type="submit" name="btnEnvoyer" value="Enregistrer">
      <input type="reset" value="Annuler"---->
        
    </form>
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>