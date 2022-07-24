<?php
$user = "admin";
$pass = "1234";


$userName = isset($_POST["user"]) ? $_POST["user"] : NULL;
$password = isset($_POST["pass"]) ? $_POST["pass"] : NULL;

if(isset($_POST["sub"])){
    ###### number 1 way #######
    // if($userName == $user && $password == $pass ){
    //     echo "Login hoise";
    // }elseif($userName != $user && $password == $pass ){
    //     echo "user not match";
    // }elseif($userName == $user && $password != $pass ){
    //     echo "password not match";
    // }else{
    //     echo "wrong information";
    // }
        #### number 2 way #####
    // if($userName == $user && $password == $pass ){
    //     echo "Login hoise";
    // }elseif($password == $pass ){
    //     echo "user not match";
    // }elseif($userName == $user){
    //     echo "password not match";
    // }else{
    //     echo "wrong information";
    // }

    #### number 3 way   ###
    if($userName == $user){
        if($password == $pass){
            $ok = "login hoey gese";
        }else{
            $wrpwd = "password wrong";
        }
    }else{
        $wruser = "wrong user";
    }
  




}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Part 3</h1>
    <hr>
    <?php if(isset($ok)){
        echo $ok;
    }?>
    <form action="?" method="post">
        <label>User or Email:</label><br>
        <input type="text" name="user" ><br>
        <?php if(isset($wruser)){
            echo $wruser."<br>";
        }?>
        <label>password :</label><br>
        <input type="password" name="pass" ><br>
        <?php if(isset($wrpwd)){
            echo $wrpwd."<br>";
        }?>
        <input type="submit" value="login" name="sub">
    </form>
    
</body>
</html>