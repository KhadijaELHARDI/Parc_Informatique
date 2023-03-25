<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <!----Font Awesome--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
     integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
    <!--div class="container">
</div--->
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="git-network-outline"></ion-icon>
                        </span>
                       <b><h2> <span class="title">Parc Informatique</span></b></h2>
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
    <!--style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            font-family: 'Roboto', sans-serif;
        }

        .table_responsive {
            max-width: 900px;
            border: 1px solid #00bcd4;
            background-color: #efefef33;
            padding: 15px;
            overflow: auto;
            margin: auto;
            border-radius: 4px;
        }

        table {
            width: 100%;
            font-size: 13px;
            color: #444;
            white-space: nowrap;
            border-collapse: collapse;
        }

        table>thead {
            background-color: #00bcd4;
            color: #fff;
        }

        table>thead th {
            padding: 15px;
        }

        table th,
        table td {
            border: 1px solid #00000017;
            padding: 10px 15px;
        }

        table>tbody>tr>td>img {
            display: inline-block;
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: 0 2px 6px #0003;
        }


        .action_btn {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .action_btn>a {
            text-decoration: none;
            color: #444;
            background: #fff;
            border: 1px solid;
            display: inline-block;
            padding: 7px 20px;
            font-weight: bold;
            border-radius: 3px;
            transition: 0.3s ease-in-out;
        }

        .action_btn>a:nth-child(1) {
            border-color: #26a69a;
        }

        .action_btn>a:nth-child(2) {
            border-color: orange;
        }

        .action_btn>a:hover {
            box-shadow: 0 3px 8px #0003;
        }


        table>tbody>tr {
            background-color: #fff;
            transition: 0.3s ease-in-out;
        }


        table>tbody>tr:nth-child(even) {
            background-color: rgb(238, 238, 238);
        }

        table>tbody>tr:hover {
            filter: drop-shadow(0px 2px 6px #0002);
        }
    </style --->
   
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
     <div class="container">
     
<!--a href="nouveauPres.php" class="btn btn-dark mb-3">Add New</a--->
<table class="table  table-hover text-center">
  <thead  class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th scope="col">telephone</th>
            <th scope="col">Action</th>
    </thead>
    <tbody>
    <form action="" class="form-inline my-2 my-lg-0" method="post">
                <a href="nouveauPres.php" class="btn btn-secondary">Add New</a>
                             <input type="search" placeholder="Search" name="motCle">
                   
                    <button class="btn btn-secondary" type="submit" name="btnEnvoyer"
                     value="Rechercher">Search</button>
                     
                    
                </form>
            
        </tr>
        <?php
 $mc="";
 if(isset($_POST["btnEnvoyer"])){
     $mc=$_POST["motCle"];
 }
 


 require_once("connexion_db.php");
 $stm = $pdo->prepare("select * from prestataire where nom like ?");
 $stm->execute(["%".$mc."%"]);
 //$result = $stm->fetchAll(PDO::FETCH_ASSOC);
 $resultat = $stm->fetchAll(PDO::FETCH_ASSOC);
 

        //$pdo = new PDO("mysql:host=localhost;dbname=parcinfo", "root", "");
        $stm1= $pdo->prepare("select * from prestataire");
        $stm1->execute([]);
       // $resultat = $stm->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultat as $f) {
            echo '<tr><td>' . $f["id_p"] . '</td><td>' . $f["nom"] . '</td><td>' . $f["email"] . '</td><td>' . $f["adresse"] .
                '</td><td>' . $f["telephone"] . '</td>

                <td><a href="editer.php?id_p=' . $f["id_p"] . '" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                <a href="supprimer.php?id_p=' . $f["id_p"] . '" class="link-dark"><i class="fa-solid fa-trash fs-5">
                </i></a></td></tr>';
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