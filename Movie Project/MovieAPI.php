<?php
require_once "MovieModel.php";
 $action = $_POST["action"];

 if (isset($_POST['movieName']))
   $movieName = $_POST['movieName'];
  if (isset($_POST['movieName']))
   $newMovieName = $_POST['newMovieName'];
  if (isset($_POST['movieName']))
   $movieId = $_POST['movieId'];
 
 
 switch ($action)
 {
     case "selectAll":
      $a = new movieBLL;
      $a->selectAll();
      break;

      case "createMovie":
      $a = new movieBLL;
      $a->createMovie($movieName);
      break;

      case "updateMovie":
      $a = new movieBLL;
      $a->updateMovie($movieId,$newMovieName);
      
      break;

      case "deleteMovie":
      $a = new movieBLL;
      $a->deleteMovie($movieId);
      break;

      case "select":
      $a = new movieBLL;
      $a->select();
      break;


 }


?>