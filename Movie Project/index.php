
<!DOCTYPE html>
<html>

<head>
    <title>Movies.movies</title>
</head>

<body>


    <button name="selectAll" onclick="ajax(this)">View all existing movies</button>
    <a href="create.php"> <button>Add new movie</button>
    </a>
    <a href="update.php"> <button>Change name of movie</button>
    </a>
    <a href="delete.php"> <button>Delete movie</button>
    </a>

    <div id="ajax"></div>

    <script src="ajax.js"></script>

</body>

</html>
