<!DOCTYPE html>
<html>



<body onload="ajax2()">
    

    <p>
        Pick a movie to change <select id="movieId"></select>
    </p>

    <p>
        New name for the movie <input id="newMovieName">
    </p>
    <button name="updateMovie" onclick="ajax(this)">Change movie title</button>

    <div id="ajax"></div>

    <a href='index.php'> <button>Back to home page</button></a>

    <script src="ajax.js"></script>

    

</body>

</html>
