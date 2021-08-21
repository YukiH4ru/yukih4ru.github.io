<?php
  session_start();
  $nama= $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
    <title>Tugas Session HTML</title>
</head>
<body>
  <form class="" action="Log Out.php" method="post">
  <div class="login-div">
    <div class="logo"></div>
    <div class="title">Selamat Datang!</div>
    <div class="sub-title"><?php echo $nama; ?></div>
    <p class="details">Creator</p>
      <pre class="paragraf">
I.G.N Brindawan Tri  Guna Yoga
XII RPL 1 / 17
      </pre>
    <div class="fields">
    </div>
    <button class="signin-button">Log Out</button>
    <div class="link">
      <a href="#">Made with ❤️ By Brindawan Yoga </a>
    </div>
  </div>
  </form>
</body>
</html>
