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
<div class="containerform">
        <div id="login">
          <h1 class="title">Inscription</h1>
          <p class="paragraphe"> Veuillez remplir tous les champs</p>
            <form method="post" class="form-log">
                <div class="group-form">
                    <input type="text" placeholder="Login">
                </div>
                <div class="group-form">
                    <input type="text" placeholder="Nom">
                </div>
                <div class="group-form">
                    <input type="text" placeholder="Prénom">
                </div>
                <div class="group-form">
                    <input type="email" placeholder="Email">
                </div>
                <div class="group-form">
                    <input type="password" placeholder="Password"> 
                </div>
                <div class="group-form">
                    <input type="password" placeholder="Confirm Password"> 
                </div>
                <div class="group-form">
                    <input type="submit" class="submit" value="S'inscrire">
                </div>
            </form>
        </div>
    </div>

    <!-- LE FOOTER -->
<footer>  
    <hr class="hrfooter">
    <div class="contenair">
        <div class="logofooter">
            <img src="ressources/logo.png">
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