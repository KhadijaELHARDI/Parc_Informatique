<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
        body {
            margin:0;
            padding:0;
            font-family: sans-serif;
           background: url(bg.jpg) no-repeat;
           
            background-size: cover;
        }
        .login-box{
            width:280px;
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            color:grey;
        }
        .login-box h1{
            float:left;
            font-size: 40px;
            border-bottom: 6px solid orange;
            margin-bottom: 50px;
            padding: 13px 0;
        }
        .textbox{
            width: 90%;
            overflow: hidden;
            font-size: 20px;
            padding: 18px 0;
            margin:1px 0;
            border-bottom: 1px solid orange;

        }
        .textbox i{
            width: 26px;
            float: left;
            text-align: center;
            color:black;

        }
        .textbox input{
            border: none;
            outline: none;
            background: none;
            color: black;
            font-size: 12px;
            width: 30%;
            float: left;
            margin:   0;

        }
        .btn{
            width: 100%;
            background: none;
            border: 2px solid orange;
            color:grey;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin:12px 0;

        }

        </style>

</head>
<body>
    
   
        <form action="login.php" method="post">

            <div class="login-box">
                <h1>S'identifier</h1>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text"  placeholder="Username" name="email"><br>
                </div>
                <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password"><br>
                </div>
            <input  class="btn" type="submit" name="btnEnvoyer" value="Connexion">
            </div>
        </form>

    
    
   
</body>
</html>