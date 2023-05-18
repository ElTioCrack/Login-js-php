/* -------------------------------- Opcion 1 -------------------------------- */
// function verify_session() {
//     $.ajax({
//         url: "verify_session.php",
//         method: "POST",
//         success: function(response) {
//             return  response
//         },
//         error: function(xhr, status, error) {
//             alert("Error 404: verify_session")
//         }
//     })
// }
/* -------------------------------- Opcion 2 -------------------------------- */
// function verify_session() {
//   return new Promise(function (resolve, reject) {
//     $.ajax({
//       url: "verify_session.php",
//       method: "POST",
//       success: function (response) {
//         resolve(response);
//       },
//       error: function (xhr, status, error) {
//         reject(new Error("Error 404: verify_session"));
//       },
//     });
//   });
// }
/* -------------------------------- Opcion 3 -------------------------------- */
function verify_session() {
  return $.ajax({
    url: "verify_session.php",
    method: "POST",
  });
}