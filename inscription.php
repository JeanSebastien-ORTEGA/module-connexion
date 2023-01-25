<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Module-Connexion</title>
</head>

    <!-- HEADER -->
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

    <!-- INSCRIPTION -->

<?php

require('config.php');
if (isset($_REQUEST['login'], $_REQUEST['prenom'], $_REQUEST['nom'], $_REQUEST['password'])){

  // récupérer le login 
  $login = stripslashes($_REQUEST['login']);
  $login = mysqli_real_escape_string($conn, $login);
  // récupérer le prenom 
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($conn, $prenom);
  // récupérer le nom 
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($conn, $nom);
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password); //requéte SQL + mot de passe crypté
  

    $query = "INSERT INTO `utilisateurs`(`login`, `prenom`, `nom`, `password`)
              VALUES ('$login', '$prenom', '$nom', '$password')";
  // Exécuter la requête sur la base de données

    $res = mysqli_query($conn, $query);
    if($res){
        $message = "Vous êtes inscrit avec succès !";
    }
}else{}

?>

<div class="containerform">
        <div id="login">       
            
    <?php if (! empty($message)) { ?>
    <p class="inscriptonreussite"><?php echo $message; ?></p>
    <?php } ?>


          <h1 class="title">Inscription</h1>
          <p class="paragraphe"> Veuillez remplir tous les champs</p>
            <form method="post" class="form-log" name="inscription">
                <div class="group-form">
                    <input type="text" name="login" placeholder="Login" required>
                </div>
                <div class="group-form">
                    <input type="text" name="nom" placeholder="Nom" required>
                </div>
                <div class="group-form">
                    <input type="text" name="prenom" placeholder="Prénom" required>
                </div>
                <div class="group-form">
                    <input type="password" name="password" placeholder="Password" required> 
                </div>
                <div class="group-form">
                    <input type="submit" name="submit" class="submit" value="S'inscrire">
                </div>

    

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