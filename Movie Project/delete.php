<!DOCTYPE html>
<html>


<body onload="ajax2()">


    <p>
        Pick a movie to delete <select id="movieId"></select>
    </p>

    <button name="deleteMovie" onclick="ajax(this)">Delete movie</button>

    <div id="ajax"></div>

    <a href='index.php'> <button>Back to home page</button></a>

    <script src="ajax.js"></script>
    


</body>

</html>
