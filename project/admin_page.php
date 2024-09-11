<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="offer.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hello, <span>Sir</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>
<div id="app"></div>

</body>
</html>