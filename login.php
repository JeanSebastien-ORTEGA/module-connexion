<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Module-Connexion</title>
</head>
<header>
    <div class="sectionheader">
        <div class="logoheader">
            <img src="ressources/logo.png">
        </div>
            <nav class="nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="login.php">Se connecter</a></li>
                <li><a href="inscription.php">Créer un compte</a></li>
            </nav>
    </div>
    <hr class="hrheader">
    <br>
</header>
<body>

<!-- LOGIN -->

<?php
require('config.php');
session_start();
if (isset($_POST['login'])){
  $login = stripslashes($_REQUEST['login']);
  $login = mysqli_real_escape_string($conn, $login);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM `utilisateurs` WHERE login='$login' and password='$password'";

  $result = mysqli_query($conn,$query) or die(mysql_error());



  if(mysqli_num_rows($result) == 1){
    $_SESSION['login'] = $login;
    $user = mysqli_fetch_assoc($result);
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
    if ($user['type'] == 'admin') {
      header('location: admin/admin.php');      
    }else{
      header('location: profile.php');
    }
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>

<div class="containerform">
        <div id="login">
          <h1 class="title">Connexion</h1>
          <br>
            <form method="post" class="form-log" name="connexion">
                <div class="group-form">
                    <input type="text" name="login" placeholder="Login">
                </div>
                <div class="group-form">
                    <input type="password" name="password" placeholder="Password"> 
                </div>
                <div class="group-form">
                    <input type="submit" name="submit" class="submit" value="Connexion">
                </div>

    <?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>

            </form>
        </div>
    </div>

    <!-- LE FOOTER -->
<footer>  
    <hr class="hrfooter">
    <div class="contenair">
        <div class="logofooter">
            <img src="ressources/logofooter.png">
        </div>
        <div class="section1">
            <h3>Cool Stuff</h3>
            <a href="https://placekitten.com/">Cool Stuff</a>
        </div>
        <div class="section2">
            <h3>Ressources</h3>
            <a href="https://drive.google.com/file/d/166Pg0xjiSvNTOfq282gMqagKHBdgcbLX/view">Docs</a>
        </div>
        <div class="section3">
            <h3>About me</h3>
            <a href="https://github.com/JeanSebastien-ORTEGA">Github</a>
        </div>
            
    </div> 
    <!--Copyright-->
    <div class="copyright">
        <p>&copy; "Module-Connexion".</p>
        <br><br><br>
    </div>   
</footer>
</body>
</html>