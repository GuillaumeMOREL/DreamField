<?php
if(isset($_POST["valider"])){
    $prenom=$_POST["prenom"];
    $nom=$_POST["nom"];
    $ville=$_POST["ville"];
    echo "Salut ".$prenom."  ".$nom." de ". $ville."<br/>Bienvenue dans l'aventure DreamField !";
}
?>