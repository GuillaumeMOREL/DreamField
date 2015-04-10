<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />   
<link rel="Stylesheet" href="Style_inscription.css" />
<title> DREAMFIELD</title>
</head>


<body>
<p class="phrase">Pour vous inscrire, remplissez ce formulaire:</p>
<form method="post" action="traitement.php">
<p>
            <label  for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="champ" placeholder="Ex : Guillaume" size="30" maxlength="10" />
            <br />
            <br />
            <label for="ville">  Ville :</label>
            <input type="text" name="ville" id="ville" class="champ" placeholder="Ex :Saint-Louis "  size="30" />
            <br />
            <br />
        <p class="valider" >Appuyez sur valider pour confirmer l'inscription</p>
        <input type="submit" name="valider" value="Valider l'inscription"/>
        </p>

   
</body>


</html>