
<!DOCTYPE html>
<html>

<head>
    <title>Movies.movies</title>
</head>

<body>
    
    <?php 
    require_once "header.php";
    ?>

    <button name="selectAll" onclick="ajax(this)">View all existing movies</button>
    <a href="create.html"> <button>Add new movie</button>
    </a>
    <a href="update.html"> <button>Change name of movie</button>
    </a>
    <a href="delete.html"> <button>Delete movie</button>
    </a>

    <div id="ajax"></div>

    <script src="ajax.js"></script>
    
    <?php 
    require_once "footer.php";
    ?>

</body>


</html>