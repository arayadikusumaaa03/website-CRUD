<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initialscale=1.0" />
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="loginbox">
        <h2>Halaman Login</h2>
        <form action="ceklogin.php" method="POST">
          <input
            type="text"
            placeholder="Username"
            id="username"
            name="username"
          />
          <input
            type="password"
            placeholder="Password"
            id="password"
            name="password"
          />
          <input type="Submit" value="Login" name="login" />
        </form>
      </div>
    </div>
  </body>
</html>
