<?php

function selectAll()
{
    require "DAL.php";

    $allMovies = [];
    $statement = $pdo->query("SELECT * FROM movies");
  
    foreach ($statement as $row)
    {
        echo  $row['id'] . "  " . $row['name'] . "<br/>" ;
     
    }
    
}

function createMovie($movieName)
{
    require "DAL.php";

    $statement = $pdo->prepare("INSERT INTO movies( name)
    VALUES( :name)");
     $statement->execute(array(
    
    ":name" => $movieName
    ));

    echo  $movieName . " has been added to the list of movies";
}


   function updateMovie($movieId,$newMovieName)
   {
      require "DAL.php";

    $statement = $pdo->query("UPDATE movies
    SET name = '".$newMovieName."'
    WHERE id = $movieId ");

    echo $movieId . " has been changed to  " . $newMovieName ."<br/> <button name='selectAll' onclick='ajax(this)'>View all existing movies</button>";
    
   }

   function deleteMovie($movieName,$movieId)
   {
      require "DAL.php";

    $statement = $pdo->query("DELETE FROM movies WHERE id=$movieId");

    echo $movieName . " has been deleted <br/>";
    selectAll();
    
   }

   function select()
   {
       require "DAL.php";

    
    $statement = $pdo->query("SELECT * FROM movies");
  
    foreach ($statement as $row)
    {
        echo "<option value=". $row['id'] .">". $row['name'] . "</option>" ;
     
    } 
     unset($_POST["action"]); 
   }

?>