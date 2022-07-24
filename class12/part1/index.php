<?php
// error_reporting(0);
$email = "abc@gmail.com";
$pass = 1234;

$emailAddress = isset($_POST["email"]) ?$_POST["email"] : NULL;
$password = isset($_POST["pass"]) ?$_POST["pass"] : NULL;



if(isset($_POST["sub"])){
    if($email == $emailAddress && $pass == $password  ){
        $yes = "thank You";
    }else{
        $wrong =  "user or pass wrong";
    }
}

?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container bg-info col-4 p-3">
    <h1 class="text-center">Login Form</h1>
    <form action="?" method="post">
        <?php if(isset($yes)){
            echo $yes;
            }?>

<?php if(isset($wrong)){
            echo $wrong;
            }?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
  </div>
  
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>

    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
   
  </body>
</html>