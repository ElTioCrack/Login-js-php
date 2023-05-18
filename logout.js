function logout() {
    $.ajax({
        url: "logout.php",
        method: "POST",
        success: function(response) {
            console.log(response)
            if(response) {
                alert("Sessión Cerrada")
                window.location.href="login.html"
            } else {
                alert("No se pudo cerrar sesión. Intentelo nuevamente")
                window.location.reload();
            }
        },
        error: function(xhr, status, error) {
            alert("Error 404: logout")
        }
    });
}