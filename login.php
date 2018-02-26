<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>- Login -</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/master.css">
  </head>
  <body>

    <div class="box">
      <h1 align="center">- Silakan Login Terlebih Dahulu -</h1>
      <hr>
      <form class="form-group" action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username"  class="form-control" id="username">
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" class="form-control" id="password">
        <br>
        <div class="navbar-right">
          <button class="btn btn-primary" type="submit" name="submit" onclick="loginAlert()">Login</button>
          <button class="btn btn-danger" type="reset" name="reset">Reset</button>
        </div>
      </form>
    </div>

    <script src="assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="assets/js/master.js" charset="utf-8"></script>
  </body>
</html>
