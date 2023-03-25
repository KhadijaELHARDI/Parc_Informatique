<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!----Font Awesome--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
   
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
    
  




</head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap');
  .tbody  form  {
            margin-right: 25px;
            position: center;

        }

    </style>






<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="tableau">
        <!--a href="nouveauMat.php" class="btn btn-secondary">Add New</a-->
    
        <table class="table  table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">No°Série</th>
                    <th scope="col">Type</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody><br-->
            

                
                <form action="" class="form-inline my-2 my-lg-0" method="post">
                <a href="nouveauMat.php" class="btn btn-secondary">Add New</a>
                             <input type="search" placeholder="Search" name="motCle">
                    <!--input type="submit" name="btnEnvoyer" value="Rechercher"-->
                    <button class="btn btn-secondary" type="submit" name="btnEnvoyer"
                     value="Rechercher">Search</button>
                     <!----a href="nouveauMat.php" class="btn btn-secondary">Add New</a--->
                    
                </form>
    
               
  <!--form class="form-inline">
    <input class="form-control mr-sm-2" type="search"  placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"  value="Rechercher">Search</button>
  </form>
</nav-->

                <?php
                $mc = "";
                if (isset($_POST["btnEnvoyer"])) {
                    $mc = $_POST["motCle"];
                }



                require_once("connexion_db.php");
                $stm = $pdo->prepare("select * from materiel where no_serie like ?");
                $stm->execute(["%" . $mc . "%"]);
                //$result = $stm->fetchAll(PDO::FETCH_ASSOC);
                $resultat = $stm->fetchAll(PDO::FETCH_ASSOC);

                //echo '<table border="1">';
                //echo '<tr><th>Code</th><th>No_Série</th><th>Nom</th><th>Type</th>
                //<th>Statut</th><th>Image</th><th>Prestataire</th><th>Action</th></tr>';


                //$pdo = new PDO("mysql:host=localhost;dbname=parcinfo", "root", "");
                $stm1 = $pdo->prepare("select * from materiel");
                $stm1->execute([]);
                //$resultat = $stm->fetchAll(PDO::FETCH_ASSOC);
                foreach ($resultat as $f) {
                    echo '<tr><td>' . $f["code"] . '</td><td>' . $f["no_serie"] . '</td><td>' . $f["type"] . '</td><td>'
                        . $f["statut"] . '</td><td><a href="view.php?code=' . $f["code"] . '" class="btn btn-secondary"> view </a>
            <a href="editer.php?code=' . $f["code"] . '" class="btn btn-secondary"> update </a>
            <a href="supprimer.php?code=' . $f["code"] . '" class="btn btn-secondary"> delete </a></td></tr>';
                }




                ?>
        </table>
    
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootsrap@5.0.0-beta3/dist/js/bootsrap.bundlle.min.js">

        </script>
        <script src="assets/js/main.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            
</body>

</html>