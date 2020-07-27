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
    <title>Zaloguj się!</title>
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
           <h1 class="text-primary">Witamy z powrotem. Zaloguj się!</h1>
           <hr style="border:2px solid lightblue; width:60%;">
           <h3 class="text-primary" style="margin-bottom:15px">Logowanie</h3>
           <div id="formularz" class="border-secondary">
           <form action="includes/login.inc.php" method="post">
                  <div class="row">
                      <div class="col">
                     <label for="login">Nazwa Użytkownika/E-mail</label><br>
                     <input class="form-control" placeholder="Wpisz login" type="text" id="login" name="login"><br>
                   </div>
                 </div>
                   <div class="row">
                      <div class="col">
                     <label for="password">Hasło</label><br>
                     <input class="form-control" placeholder="Wpisz hasło"type="password" id="password" name="password"><br>
                   </div>
                 </div>
                   <div class="row">
                      <div class="col d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center">
                        <button name="login-submit" type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div><br>
                      <div class="row">
                      <div class="col">
                        <p class="d-flex justify-content-md-center justify-content-center align-items-md-center align-items-sm-center"><a href="signup.php">Nie masz konta?! Zarejestruj się już teraz!</a></p>
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
