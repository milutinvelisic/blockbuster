<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Welcome to my Portfolio</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="assets/css/main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<?php
include 'models/author/functions.php';
$info = getAuthorInfo();
?>

<body>
  <main>
    <header class="home" id="home"><br><br>
      <h1>I'm <?= $info[0]->imePrezime ?></h1>
      <h5><?= $info[0]->kratakOpis ?></h5>
      <img src="assets/images/person111.jpg" alt="p1">
    </header>
  </main>
  <section class="about" id="about">
    <h2>About me</h2>
    <p>
      Hello, <?= $info[0]->opis ?>
    </p>
    <a href="models/author/exportword.php" class="word">Export CV to Word</a>
  </section>
  <footer>
    <section class="top-bar">
      <a href="#"><span class="fab fa-facebook"></span></a>
      <a href="#"><span class="fab fa-twitter"></span></a>
      <a href="#"><span class="fab fa-gitub"></span></a>
    </section>
    <section class="bottom-bar">
      <p>&copy; 2019 | Milutin Velisic | All rights reserved</p>
    </section>
  </footer>
</body>

</html>