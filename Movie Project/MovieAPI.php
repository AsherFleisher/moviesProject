<?php
require_once "MovieModel.php";
 $action = $_POST["action"];

 if (isset($_POST['movieName']))
 {
   $movieName = $_POST['movieName'];
 }
  if (isset($_POST['movieName']))
 {
   $newMovieName = $_POST['newMovieName'];
 }
  if (isset($_POST['movieName']))
 {
   $movieId = $_POST['movieId'];
 }
 
 switch ($action)
 {
     case "selectAll":
      selectAll();
      break;

      case "createMovie":
      createMovie($movieName);
      break;

      case "updateMovie":
      updateMovie($movieId,$newMovieName);
      break;

      case "deleteMovie":
      deleteMovie($movieName,$movieId);
      break;

      case "select":
      select();
      break;


 }


?>