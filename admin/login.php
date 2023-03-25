<?php
session_start();


if(isset($_POST['btnEnvoyer']))
{
    $email =$_POST['email'];
    $pass =$_POST['password'];
    $db=new PDO("mysql:host=localhost;dbname=stock","root","");
    $sql="select from user where email = '$email'";
    $result=$db->prepare($sql);
    $result->execute();
    if($result->rowCount() > 0)
    {
        $data=$result->fetchAll();
        if(password_verify($pass,$data[0]["password"]))
        {
            echo"connexion effectuée";
            $_SESSION['email'] = $email;

        }

    }
    else {
        $pass=password_hash($pass,PASSWORD_DEFAULT);
        $sql="insert into user (email,password) values ('$email','$pass')";
        $req=$db->prepare($sql);
        $req->execute();
       /* echo "enregistrement efféctuée";*/
       header("location: ../menu/index.html");

        
      
    }

}



?>