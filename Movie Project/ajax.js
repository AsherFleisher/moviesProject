function ajax(a) {
    var action = a.getAttribute('name')
    var data = new FormData()
    data.append("action", action)


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "MovieAPI.php", true);
    xhttp.send(data);
}