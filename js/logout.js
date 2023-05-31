function logout() {
  let url_php = "logout.php";
  url_php = "https://pollossilver2023.000webhostapp.com/login/php/" + url_php;

  let url_login = "login.html";
  url_login = "https://pollossilver2023.000webhostapp.com/login/" + url_login;

  $.ajax({
    url: url_php,
    method: "POST",
    dataType: "json",
    success: function (response) {
      const session_start = response.session_start;

      if (session_start) {
        // La sesión fue cerrada
        alert("Sesión Cerrada");
        window.location.href = url_login;
      } else {
        // No se pudo cerrar la sesión o hubo un error inesperado
        alert("No se pudo cerrar sesión. Inténtelo nuevamente");
        window.location.reload();
      }
    },
    error: function (error) {
      console.log(error);
    },
  });
}
