<?php
if(isset($_POST["valider"])){
    $pseudo=$_POST["prenom"];
    $ville=$_POST["ville"];
    echo "Salut ".$pseudo." de ". $ville."<br/>Bienvenue dans l'aventure DreamField !";
    echo "<br/>Vos coordonnées sont les suivantes: ";
}
?>