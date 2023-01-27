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

    $mysqli = new mysqli("localhost", "root", "", "moduleconnexion");
    
    $request = $mysqli->query("SELECT Login, prenom, nom, password, type FROM utilisateurs;");
    
    $results = $request -> fetch_array(MYSQLI_ASSOC);
    
    
    echo "<div class='tabusers'>
        <h1>Liste des utilisateurs</h1>
        <br>
         <table border='1'><tr>";
    
    
    foreach ($results as $key => $value)
    {
       echo " <th> " . $key . " </th> ";
    }
    echo "</tr>";
    while ($results != NULL)
    {
       echo "<tr>";
       foreach ($results as $value)
       {
             echo "<td>" . $value . "</td>";
       }
       echo "</tr>";
       $results = $request -> fetch_array(MYSQLI_ASSOC);
    }
    echo "</table></div>";
    ?>


<div class="gback"> 
    <input class="retour" type="button" value="Retour" onclick="location.href='admin.php' "/>
</div>





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