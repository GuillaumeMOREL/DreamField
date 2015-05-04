<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />   
<link rel="Stylesheet" href="ProfilStyle.css" />
<title> DREAMFIELD</title>
</head>
  <body>
    <header>
      <?php include("include/header.php"); ?>
    </header>

    <?php
     try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
      }
      catch (Exception $e)
      {
       die('Erreur : ' . $e->getMessage());
      }

    $reponse = $bdd->query('SELECT nom, prenom, adresse, codepost, mail, tel FROM utilisateur WHERE utilisateur=\'Patrick\'');
  
    while ($donnees = $reponse->fetch())
     {
       echo 'NOM'. $donnees['nom'] . ' PRENOM ' . $donnees['prenom'] . 'ADRESSE' . $donnees['adresse'] . $donnees['codepost'] . 'ADRESSE EMAIL' . $donnees['mail'] . 'TEL' . $donnees['tel'] ;
     }
     $reponse->closeCursor();
   ?>
    <footer>
      <?php include("include/footer.php"); ?>
    </footer>  

  </body>
</html>