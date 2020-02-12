<?php
// require db_config
require_once "db_config.php";

//require crud.php
require_once "crud.php";

 // Initial the session
 session_start();
 // Check if the user is logged in, if not then redirect him to login page
 if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location:login.php");
    exit;
 }
?>
<!DOCTYPE html>
<html lang="en" ng-app="movieStore">
  <head>
   <!-- document econding -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- stylesheet -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/global.css">
   <!-- seo -->
   <title>Home : Movie Store</title>
   <meta name="keywords" content="">
   <meta name="description" content="Movie Store Crud Application ">
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

   <!-- internal style -->
<style type="text/css">
#id="movieStore{height: 90%;}
.d-flex button{
  margin: 1.5em 0.5em;
  padding: 0.3em 1.4em;
}
.d-flex table{
  margin: 1em 10em;
}
table .btnedit{
  color: lightsalmon;
  cursor: pointer;
}
.success{
  background-color: lightgreen;
  padding: 1em;
}
.error{
  background-color: tomato;
  padding: 1em;
}
   </style>
  </head>
  <body id="movieStore">
   <!-- section header -->
   <section id="movieHeader">
     <?php include_once("../crud/includes/navbarPartial.php") ?>
   </section>
   <!-- section main -->
   <section id="movieMain">
     <?php include_once("../crud/templates/landingPage.php") ?>
   </section>
   <!-- section footer -->
   <!-- script -->
   <script src="js/jquery-slim.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="main.js"></script>
  </body>
</html>
