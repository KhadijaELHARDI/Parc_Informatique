<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
    <!--div class="container">
</div -->
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
                <a href="#">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </span>
                    <span class="title">Utilisateur</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </span>
                    <span class="title">Materiel</span>
                </a>
            </li>

            <li>
                <a href="#">
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


</head>

<body>
    <!--nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color:#00ff5573;">
    </nav>
    <div class="container">
        <div class="text-center mb-4">
        <h3>Edit User information</h3>
        <p class="text-muted">Click update after changin information</p>

    </div--->
    <?php
    $pdo = new pdo("mysql:host=localhost;dbname=parcinfo", "root", "");
    $idF = $_GET["id_u"];
    $stm = $pdo->prepare("select * from user where id_u=?");
    $stm->execute([$idF]);
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    ?>

    <form action="modifierUser.php" method="post">
        
                  <h3>Modifier User</h3>
            nom : <input type="text" name="nom" value="<?php echo $result['nom']; ?>"><br>
            prenom : <input type="text" name="prenom" value="<?php echo $result['prenom']; ?>"><br>
            adresse : <input type="text" name="adresse" value="<?php echo $result['adresse']; ?>"><br>
            telephone : <input type="number" name="telephone" value="<?php echo $result['telephone']; ?>"><br>
            email : <input type="text" name="email" value="<?php echo $result['email']; ?>"><br>
            matériel : <select name="materiel" value="<?php echo $result['no_serie']; ?>">
                <?php
                require_once("connexion_db.php");
                $stm = $pdo->prepare("select * from materiel");
                $stm->execute([]);
                $materiel = $stm->fetchAll(PDO::FETCH_ASSOC);
                foreach ($materiel as $c) {
                    echo '<option value="' . $c["code"] . '">' . $c["no_serie"] . '</option>';
                }
                ?>
            </select>
            <input type="hidden" name="id_u" value="<?= $idF ?>">
            <input type="submit" name="btnEnvoyer" value="Enregistrer">
            <input type="reset" value="Annuler">
       
    </form>
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>