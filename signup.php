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
    <title>Rejestracja</title>
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
              <a class="btn btn-success" href="login.php" role="button">Zaloguj się</a>
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
           <h1 class="text-primary">Jesteś tutaj nowy? Zarejestruj się!</h1>
           <hr style="border:2px solid lightblue; width:60%;">
           <h3 class="text-primary" style="margin-bottom:15px">Rejestracja</h3>
           <div id="formularz" class="border-secondary">
           <form action="includes/signup.inc.php" method="post">
                   <?php
                   if (isset($_GET['error'])) {
                     if ($_GET['error'] == "emptyfields") {
                       echo '<div class="row">','<div class="col d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center">','<h6 class="text-danger" style="margin-bottom:15px">Wypełnij wszystkie pola!</h6>','</div>','</div>';
                     }
                     else if($_GET['error'] == "invalidmailnusurname"){
                         echo '<div class="row">','<div class="col d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center">','<h6 class="text-danger" style="margin-bottom:15px">Zła nazwa użytkownika i e-mail</h6>','</div>','</div>';
                     }
                     else if($_GET['error'] == "invalidmail"){
                         echo '<div class="row">','<div class="col d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center">','<h6 class="text-danger" style="margin-bottom:15px">Zły e-mail</h6>','</div>','</div>';
                     }
                     else if($_GET['error'] == "invalidusurname"){
                         echo '<div class="row">','<div class="col d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center">','<h6 class="text-danger" style="margin-bottom:15px">Zła nazwa użytkownika</h6>','</div>','</div>';
                     }
                     else if($_GET['error'] == "passwordcheck"){
                         echo '<div class="row">','<div class="col d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center">','<h6 class="text-danger" style="margin-bottom:15px">Twoje hasło nie jest takie same!</h6>','</div>','</div>';
                     }
                     else if($_GET['error'] == "useroremailtaken"){
                         echo '<div class="row">','<div class="col d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center">','<h6 class="text-danger" style="margin-bottom:15px">Nazwa użytkownika lub e-mail już zajęty!</h6>','</div>','</div>';
                     }
                   }
                   else if(isset($_GET['signup'])){
                       if($_GET['signup'] == "success"){
                         echo '<div class="row">','<div class="col d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center">','<h6 class="text-success" style="margin-bottom:15px">Zarejestrowano poprawnie!</h6>','</div>','</div>';
                       }
                     }
                    ?>
                  <div class="row">
                  <div class="col">
                   <label for="firstname">Imię</label><br>
                   <input value="<?php  if (isset($_GET['error'])){if ($_GET['error'] == "emptyfields"){echo $_GET['firstname'];}else echo "";} ?>"class="form-control" placeholder="Wpisz swoje imię"type="text" id="firstname" name="firstname">
                  </div>
                  <div class="col">
                   <label for="lastname">Nazwisko</label><br>
                   <input value="<?php  if (isset($_GET['error'])){if ($_GET['error'] == "emptyfields"){echo $_GET['lastname'];}else echo "";} ?>"class="form-control" placeholder="Wpisz swoje nazwisko"type="text" id="lastname" name="lastname"><br>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col">
                   <label for="login">Login</label><br>
                   <input value="<?php  if (isset($_GET['error'])){if ($_GET['error'] == "emptyfields"){echo $_GET['login'];}else echo "";} ?>"class="form-control" placeholder="Wpisz login" type="text" id="login" name="login"><br>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col">
                   <label for="password">Hasło</label><br>
                   <input class="form-control" placeholder="Wpisz hasło"type="password" id="password" name="password">
                  </div>
                  <div class="col">
                   <label for="password">Powtórz Hasło</label><br>
                   <input class="form-control" placeholder="Wpisz hasło"type="password" id="repeat-password" name="repeat-password">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col">
                   <label for="email">E-mail</label><br>
                   <input value="<?php  if (isset($_GET['error'])){if ($_GET['error'] == "emptyfields"){echo $_GET['email'];}else echo "";} ?>"class="form-control" placeholder="Wpisz swój e-mail"type="email" id="email" name="email"><br>
                 </div></div>
                 <div class="row">
                 <div class="col">
                <label for="country">Kraj</label><br>
                <input value="<?php  if (isset($_GET['error'])){if ($_GET['error'] == "emptyfields"){echo $_GET['country'];}else echo "";} ?>"class="form-control" placeholder="Wpisz swój kraj"type="text" id="country" name="country"><br>
              </div></div>
                  <div class="row">
                    <div class="col d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center">
                      <button name="signup-submit"type="submit" class="btn btn-primary">Zarejestruj</button>
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col">
                      <p p class="d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center"><a href="login.php">Masz już konto? Zaloguj się!</a></p>
                    </div>
                  </div>
           </form>
         </div>
         </div>
   </div>
 </div>
 <script src="zegarek.js"></script>
 <script src="slider.js"></script>
  </body>
</html>
