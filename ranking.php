<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="description" content="Strona do nauki języka">
    <meta name="keywords" content="Nauka, Nauka języka, angielski">
    <meta name="author" content="Piotr Augustyniak">
    <meta name="Robots" content="index, follow" />
    <link rel="shortcut icon" href="obrazy/logo.png">
    <meta charset="utf-8">
    <title>Top10</title>
  </head>
  <body onload="zegarek();">
    <div id="main">
    <div class="row bg-dark text-white" id="logo" >
            <div class="col-md-6 col-sm-12 d-flex justify-content-md-start justify-content-center align-items-center">
              <h2>smart solutions</h2><img style="width:30px;" src="obrazy/logo.png" alt="logo">
            </div>
            <div class="col-md-4 col-sm-12 d-flex justify-content-md-start justify-content-center align-items-center">
              <h2 id="zegarek">Nadpisane przez zegarek</h2>
            </div>
            <div class="col-md-2 col-sm-12 bg-dark d-flex justify-content-md-end justify-content-center align-items-md-center align-items-sm-center">
              <?php
              if (isset($_SESSION['userId'])) {
               echo '<form action="includes/logout.inc.php" method="post"><button class="btn btn-success" type="submit">Wyloguj się</button></form>';
              }
              else{
                echo '<a class="btn btn-success" href="login.php" role="button">Zaloguj się</a>';
              } ?>
            </div>
    </div>
    <div class="row">
          <div id="lista" class="col-md-2 col-sm-12 bg-dark rounded">
              <ul class="nav flex-md-column flex-row justify-content-center bg-dark">
              <li class="nav-item">
               <a class="nav-link" href="index.php">Strona główna</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="quizang.php">Quiz Angielski-Polski</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="quizpl.php">Quiz Polski-Angielski</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="dodajslowko.php">Dodaj słówko do słownika</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="ranking.php">Top10!</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="profil.php">Twój profil</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="omnie.php">O mnie</a>
             </li>
           </ul>
         </div>
         <div id="tekst" class="col-md-10 col-sm-12">
           <?php
           echo '<h1 class="text-primary">Ranking 10 najlepszych użytkowników!</h1>';
           if (isset($_SESSION['userId'])) {
             $pozycja = 1;
             require_once('includes/dbh.inc.php');
             $sql = "SELECT * FROM users ORDER BY Points DESC LIMIT 10";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)){
                echo <<< WYPISZ
                <h5>$pozycja. $row[nick]</h5><h5 class="text-primary"> Ilość Punktów: $row[Points]</h5>
                WYPISZ;
                $pozycja++;
           }
         }
           else{
             echo '<h1 class="text-primary" style="margin-bottom:30px;margin-top:30px;">Zaloguj się, żeby zobaczyć te dane!</h1>';
             echo '<img style="height:440px"src="obrazy/wykrzyknij.jpg" alt="profil"/>';
           }
            ?>
         </div>
   </div>
 </div>
 <script src="zegarek.js"></script>
  </body>
</html>
