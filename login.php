<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page for todo</title>
    <style>
        form {
            position: relative;
            top: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        body{
            background-color: rgb(48, 48, 48);
            color: orange;
        }
        input{
            border-radius: 20px;
            width: 17vw;
            height: 5vh;
            text-align: center;
        }
        label{
            margin: 14px;
        }
        h1{
            text-align: center;
            color: aqua;
        }
        button{
            background-color: aquamarine;
            height: 40px;
            width: 70px;
            border-radius: 20px;
        }
        button:hover{
            background-color: rgb(88, 196, 246);
        }
    </style>
</head>

<body>
    <h1>Welcome back</h1>
    <form action="" method="post" onsubmit="return validateLogin()">
        <div>
            <label for="mail">Email</label>
            <br>
            <input type="email" id="mail" name="mail">
        </div>
        <br>
        <div>
            <label for="passwd">Password</label>
            <br>
            <input type="password" id="passwd" name="passwd">
        </div>
        <br>
        <button type="submit">Login</button>
    </form>
<?php
    $email=$_POST['mail'];
    $password=$_POST['password'];
?>
</body>

</html>