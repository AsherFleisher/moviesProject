<!DOCTYPE html>
<html>

<head>
    <title>Movies.update</title>
</head>

<body onload="ajax2()">
    
    <?php 
        require_once "header.php";
    ?>

    <p>
        Pick a movie to change <select id="movieId"></select>
    </p>

    <p>
        New name for the movie <input id="newMovieName">
    </p>
    <button name="updateMovie" onclick="ajax(this)">Change movie title</button> hi

    <div id="ajax"></div>

    <a href='index.html'> <button>Back to home page</button></a>

    <script src="ajax.js"></script>

    <?php 
       require_once "footer.php";
    ?>

</body>

</html>
