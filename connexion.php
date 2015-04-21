<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />   
<link rel="Stylesheet" href="connexion.css" />
<title> DREAMFIELD</title>
</head>


<body>

<header>
<?php include("include/header.php"); ?>
</header>

<div class="milieu">

  <div class="formulaire-co">

      <form method="post" action="traitement.php">
      <p>
                <label for="mail" class="champ-co"> Email :</label>
                <input type="email" name="mail" id="mail" class="champ" size="30" placeholder="Ex :azerty@gmail.com " />
                <br />
                <br />
                <label for="pass" class="champ-co" >Mot de passe :</label>
                <input type="password" name="pass" id="pass" class="champ" minlength="6" /input>
                <br />
                <br />

          <div id="validation-co">
            <input type="submit" name="valider" value="Connexion" />
          </div>
      </p>
      </form>
  </div> 
</div>

<footer>
<?php include("include/footer.php"); ?>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="javascript/insverif.js"></script>
</body>


</html>