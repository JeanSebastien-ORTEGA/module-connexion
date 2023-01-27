<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Module-Connexion</title>
</head>
<header>
    <div class="sectionheader">
        <div class="logoheader">
            <img src="../ressources/logo.png">
        </div>
            <nav class="nav">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../login.php">Se connecter</a></li>
                <li><a href="../inscription.php">Créer un compte</a></li>
            </nav>
    </div>
    <hr class="hrheader">
    <br>
</header>
<body>

<!-- Body -->

<?php

require('../config.php');
if (isset($_REQUEST['login'], $_REQUEST['prenom'], $_REQUEST['nom'], $_REQUEST['password'], $_REQUEST['type'])){

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
  $password = mysqli_real_escape_string($conn, $password);

  // récupérer le type Admin | User
  $type = stripslashes($_REQUEST['type']);
  $type = mysqli_real_escape_string($conn, $type);


    $query = "INSERT INTO `utilisateurs`(`login`, `prenom`, `nom`, `password`, `type`)
              VALUES ('$login', '$prenom', '$nom', '$password', '$type')";
  // Exécuter la requête sur la base de données

    $res = mysqli_query($conn, $query);
    if($res){
        $message = "<div class='ajout-reussite'>
                    <h3>L'utilisateur a été créée avec succés.</h3>
                    <br>
                    <a href='admin.php'>Retour</a>
                    </div>";
    }
}else{}
?>

<div class="containerform-add">
    <div id="add">

    <?php if (! empty($message)) { ?>
    <p><?php echo $message; ?></p>
    <?php } ?>

        <form class="form-add" action="" method="post">

             <h1 class="title">Ajouter un utilisateur</h1>

             <div class="group-input">
        <div class="group-add">
        <input type="text" name="login" placeholder="Login" required />
        </div>
        <div class="group-add">
        <input type="text" name="nom" placeholder="Nom" required />
        </div>
        <div class="group-add">    
            <input type="text" name="prenom" placeholder="Prenom" required />
        </div> 

                    <div class="group-add">
                        <select name="type" id="type" >
                            <option value="" disabled selected>Type</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

        <div class="group-add"> 
            <input type="password" name="password" placeholder="Mot de passe" required />
        </div>
        <div class="group-add"> 
            <input class="ajouter" type="submit" name="submit" value="Ajouter"/>
        </div>

        <div class="group-add"> 
        <input class="retour" type="button" value="Retour" onclick="location.href='admin.php' "/>
        </div>
            
        </div>
    </div>
</div>


</form>

<!-- fin body -->


<!-- LE FOOTER -->
<footer>  
    <hr class="hrfooter">
    <div class="contenair">
        <div class="logofooter">
            <img src="../ressources/logofooter.png">
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