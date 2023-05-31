function session_data() {
  let url_php = "session_data.php";
  url_php = "https://pollossilver2023.000webhostapp.com/login/php/" + url_php;

  return new Promise(function (resolve, reject) {
    $.ajax({
      url: url_php,
      method: "POST",
      dataType: "json",
      success: function (response) {
        resolve(response); // Resuelve la promesa con la respuesta
      },
      error: function (error) {
        reject(error); // Rechaza la promesa con el error
      },
    });
  });
}
