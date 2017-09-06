<?php

 $action = $_POST["action"];
 switch ($action)
 {
     case "selectAll":
      selectAll();
      break;
 }

function selectAll()
{
    require_once "DAL.php";
    $allMovies = [];
    $stmt = $pdo->query("SELECT * FROM movies");
  
    foreach ($stmt as $row)
    {
        echo  $row['id'] ;
     
    }
    
}

function createMovie()
{
    $statement = $pdo->prepare("INSERT INTO movies( name,id)
    VALUES( :name, :id)");
     $statement->execute(array(
    
    ":name" => $_SESSION['name'],
    ":id" => $_SESSION['id']
    ));
}


?>