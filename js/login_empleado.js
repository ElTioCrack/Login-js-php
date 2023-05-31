$(document).ready(function () {
  var url_php = "login_empleado.php";
  url_php = "https://pollossilver2023.000webhostapp.com/login/php/" + url_php;

  $("form").submit(function (e) {
    e.preventDefault();

    // Obtenemos valores
    const ci = $("#ci").val();
    const password = $("#password").val();
    const system = "Webapp";

    const postData = {
      ci: ci,
      password: password,
      system: system,
    };

    $.post(url_php, postData, function (response) {
      response = JSON.parse(response);
      if (Array.isArray(response) && response.length === 0) {
        showMessages("No se han encontrado coincidencias");
        return;
      }

      const tipo_tipousuario = response.usuario.tipousuario.tipo_tipousuario;

      if (tipo_tipousuario !== "Cliente") {
        // Acceso Autorizado (Jefe o Empleado)
        $(".message").css("display", "none");
        window.location.href = "./dashboard.html";
      } else {
        // Acceso NO Autorizado (Cliente)
        showMessages("Acceso no autorizado");
      }
    });
  });
});

function showMessages(text) {
  console.log("%c%s", "color: #ff0000", text);
  alert(text);
}
