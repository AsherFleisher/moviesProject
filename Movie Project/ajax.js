function ajax(a) {
    var action = a.getAttribute('name')
    if (document.getElementById("movieName")) {
        var movieName = document.getElementById("movieName").value
    }
    if (document.getElementById("newMovieName")) {
        var newMovieName = document.getElementById("newMovieName").value
    }
    if (document.getElementById("movieId")) {
        var movieId = document.getElementById("movieId").value
    }

    var data = new FormData()
    data.append("action", action);
    data.append("movieName", movieName);
    data.append("newMovieName", newMovieName);
    data.append("movieId", movieId);


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "MovieAPI.php", true);
    xhttp.send(data);
}

function ajax2() {
    if (document.getElementById("movieId")) {
        var movieId = document.getElementById("movieId").value
    }

    var data = new FormData()
    data.append("movieId", movieId);
    data.append("action", "select");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("movieId").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "MovieAPI.php", true);
    xhttp.send(data);
}