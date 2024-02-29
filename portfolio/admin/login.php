<?php

require('../include/db.php');
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $data = "SELECT * from admin";
  $run = mysqli_query($db, $data);
  $user_data = mysqli_fetch_array($run);

  if ($email === $user_data['email'] && $password === $user_data['password']) {
    $_SESSION['isUserLoggedIn'] = true;
    $_SESSION['emailId'] = $_POST['email'];
    if ($_POST['remember']) {

      setcookie("email", $email, time() + (86400 * 30), "/");
    }

    echo "<script>window.location.href = 'index.php' </script>";
  } else {
    echo "<script>alert('incorrect email or password !')</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <style>
    body {
      font-family: 'Source Sans Pro', sans-serif;
      background-color: #f7f7f7;
      /* Set background color */
    }

    .login-page {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      /* Make the login page take the full height of the viewport */
    }

    .login-box {
      width: 400px;
      background-color: #fff;
      /* Set background color */
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      /* Add shadow effect */
      padding: 20px;
    }

    .login-box p {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
      text-align: center;
    }

    .login-box form input[type="email"],
    .login-box form input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .login-box form button[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .login-box form button[type="submit"]:hover {
      background-color: #0056b3;
    }

    .login-box form label {
      cursor: pointer;
      margin-left: 5px;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <p>Sign in to admin panel</p>

    <form method="post">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <div>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember Me</label>
      </div>
      <br>
      <button type="submit" name="login">Sign In</button>
    </form>
  </div>
</body>

</html>