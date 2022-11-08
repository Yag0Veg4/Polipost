function despliegue() {
    var x = document.getElementById("links");
    if(x.className === "navbar-colapsado") {
        x.className += "responsive";
    } else {
        x.className = "navbar-colapsado";
    }
}