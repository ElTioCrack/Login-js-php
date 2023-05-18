$(document).ready(function () {
  $("form").submit(function (e) {
    e.preventDefault();

    //obtenemos valores
    const postData = {
      ci: $("#ci").val(),
      password: $("#password").val(),
    };

    $.post("login.php", postData, function (response) {
      if (response !== "null") {
        $(".message").css("display", "none");
        window.location.href = "./dashboard.html";
      } else {
        $(".message").css("display", "block");
        console.log("No se han encontrado coincidencias");
      }
    });
  });
});