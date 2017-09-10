<!DOCTYPE html>
<html>

<head>
    <title>Movies.movies</title>
</head>

<body onload="ajax2()">
    
    <?php 
       require_once "header.php";
    ?>


    <p>
        Pick a movie to delete <select id="movieId"></select>
    </p>

    <button name="deleteMovie" onclick="ajax(this)">Delete movie</button>

    <div id="ajax"></div>

    <a href='index.html'> <button>Back to home page</button></a>

    <script src="ajax.js"></script>
    
    <?php 
       require_once "footer.php";
    ?>

</body>

</html>
