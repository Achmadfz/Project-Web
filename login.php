<?php 
 
include 'config.php';
 
error_reporting(0);

session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: homeActived.php");
}
 
if (isset($_POST['submit'])) {
   $sql=mysqli_query($conn,"select * from login where username ='$_POST[username]' and password ='$_POST[password]'");
   $check=mysqli_num_rows($sql);
	if($check > 0){
	  $_SESSION['username'] = $_POST['username'];
	  echo "<meta http-equiv=refresh content=1;URL='login.php'>";
	}else{
	  echo "<p align=center><b> Username dan Password anda salah ! </b></p>";
	  echo "<meta http-equiv=refresh content=2;URL='login.php'>";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
	  
	  .bg-hr{margin:1rem 0;color:white;border:0;border-top:1px solid;opacity:.25}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center bg-dark">
    
<main class="form-signin w-100 m-auto">
<div class="container bg-light rounded-4"><br>
  <form action="" method="POST">
    <img class="mb-4" src="img/blackrevenge.png" alt="" width="92" height="77">
    <h1 class="h3 mb-3 fw-normal text-dark">Please sign in</h1>
<hr class="bg-hr">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <a href="404.html" class="text-dark">Lupa Password </a> &nbsp; &nbsp; &nbsp; <a href="Signin.php" class="text-dark">Buat akun anda</a>
    </div>
    <button class="w-100 btn btn-lg btn-outline-dark" type="submit" name="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p><br>
  </form>
  </div>
</main>


    
  </body>
</html>
