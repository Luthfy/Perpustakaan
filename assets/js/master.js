function loginAlert ()
{
  var username = $("#username").val();
  var password = $("#password").val();


  if (username == "") {
    if (password == "") {
      alert("username dan password tidak boleh kosong");
    } else {
      alert("username tidak boleh kosong");
    }
  } else if (password == "") {
      alert("Password tidak boleh kosong");
  }
}
