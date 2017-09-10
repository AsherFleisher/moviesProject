<!DOCTYPE html>
<html>

<head>
    <title>Movies.create</title>
</head>

<body>
    
    <?php 
    require_once "header.php";
    ?>

    Name of new movie<input id="movieName">
    <button name="createMovie" onclick="ajax(this)">Add new movie</button>

    <div id="ajax"></div>

    <a href='index.html'> <button>Back to home page</button></a>

    <script src="ajax.js"></script>
    
     <?php 
    require_once "footer.php";
    ?>

</body>

</html>
