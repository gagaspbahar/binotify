<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
</head>

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <h1>Register ke Binotify!</h1>
  <form action="/api/auth/register.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username"><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br>
    <label for="confirm-password">Confirm Password</label>
    <input type="password" name="confirm-password" id="confirm-password"><br>
    <button type="submit">Register</button>
  </form>
</body>

</html>