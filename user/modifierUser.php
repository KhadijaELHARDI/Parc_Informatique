!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
    <body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-amplify"></ion-icon>
                        </span>
                        <span class="title">Parc Informatique</span>
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
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
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

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>
            <?php
echo "<pre>";
print_r($_POST);
echo"</pre>";
 /* if(isset($_POST["btnEnvoyer"])){*/
    $pdo=new PDO("mysql:host=localhost;dbname=parcinfo","root","");
    
      $stm=$pdo->prepare("update user set nom = :nom, prenom = :prenom,
       adresse = :adresse, telephone = :telephone,
      email = :email where id_u = :id");
      $stm->execute(array(
                    ":nom"=>$_POST["nom"],
                    ":prenom"=>$_POST["prenom"],
                    ":adresse"=>$_POST["adresse"],
                    ":telephone"=>$_POST["telephone"],
                    ":email"=>$_POST["email"],
                    ":id"=>$_POST["id_u"])
      );
      header("location:liste_user.php");            
?>
     <!-- =========== Scripts =========  -->
     <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<!--?php
echo "<pre>";
print_r($_POST);
echo"</pre>";
 /* if(isset($_POST["btnEnvoyer"])){*/
    $pdo=new PDO("mysql:host=localhost;dbname=parcinfo","root","");
    
      $stm=$pdo->prepare("update user set nom = :nom, prenom = :prenom,
       adresse = :adresse, telephone = :telephone,
      email = :email where id_u = :id");
      $stm->execute(array(
                    ":nom"=>$_POST["nom"],
                    ":prenom"=>$_POST["prenom"],
                    ":adresse"=>$_POST["adresse"],
                    ":telephone"=>$_POST["telephone"],
                    ":email"=>$_POST["email"],
                    ":id"=>$_POST["id_u"])
      );
      header("location:liste_user.php");            
?--->