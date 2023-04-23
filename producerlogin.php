<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Producer Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Producer Login <br> Page</div>
      <form action="#">
        <div class="field">
          <input type="text" required>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" required>
          <label>Password</label>
        </div>
       
        <div class="field">  
          <input type="submit" onclick="window.location.href='./producerprofile.html';" value="Login" style = "background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);color: #fff;">
        </div>
      </form>
    </div>
  </body>
</html>
