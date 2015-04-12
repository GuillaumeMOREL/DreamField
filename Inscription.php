<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />   
<link rel="Stylesheet" href="Style_inscription.css" />
<title> DREAMFIELD</title>
</head>


<body>
<header>
  
<div id="partie_sup_header">
  <div id="container">
      <a href="accueil-4.php"><img src="logo.png" id="logo"/></a>
 
      <a id="DREAMFIELD" href="accueil-4.php"><h1> DreamField </h1></a>
      <div id="acces_compte">
      <a class="connection_inscription_panier" href="Inscription.php">Se connecter</a>
      <a class="connection_inscription_panier" href="Inscription.php">S'inscrire </a>
      <a class="connection_inscription_panier" href="panier.html"> Mon Panier (0) </a>
    </div>
   </div>
  </div>

  <div id="partie_inf_nav">

   
      <ul id="nav">
          <div id="container">
            <li><a href="accueil-4.php">Accueil</a></li>
            <li><a href="offres.html">Offres</a></li>
            <li><a href="deposer-annonce.html">Déposer une annonce</a></li>
            <li><a href="recettes.html">Recette</a></li> 
            <li><a href="forum.html">Forum</a></li>
            <li><a href="mon-compte.html">Mon compte</a></li>
            <li><a href="aide.html">Aide</a></li>
            <li><a href="recherche_utilisateur.html"><img src="logo-recherche.png" id="logo_recherche"/></a></li>
         </div>
        </ul>
     
    </div>
  
</header>

<div class="formulaire-ins">
<p id="formulaire-ins-titre">Pour vous inscrire, remplissez ce formulaire:</p>

  <div class=""><p class="parcourir" > Ajouter une photo de profil (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="photo.php" enctype="multipart/form-data">
      <input type="file" name="photo" id="photo" />
  </form></div>

  <form method="post" action="traitement.php">
    <p>
              <label  for="prenom">Prénom :</label>
              <input type="text" name="prenom" id="prenom" class="champ" placeholder="Ex : Guillaume" size="30" maxlength="10" />
              <br />
              <br />
              <label for="nom">Nom :</label>
              <input type="text" name="nom" id="nom" class="champ" placeholder="Ex : MOREL" size="30" maxlength="10" />
              <br />
              <br />
              <label for="adresse">Adresse :</label>
              <input type="text" name="adresse" id="adresse" class="champ" size="30" placeholder="Ex :2 bis rue du long des bois"/>
              <br />
              <br />
              <label for="codepost"> Code postal :</label>
              <input type="number" name="codepost" id="codepost" class="champ" placeholder="Ex : 78690" min="10000" max="96000"/>
              <br />
              <br />
              <label for="ville">  Ville :</label>
              <input type="text" name="ville" id="ville" class="champ" placeholder="Ex :Saint-Louis "  size="30" />
              <br />
              <br />
              <label for="mail"> Email :</label>
              <input type="email" name="mail" id="mail" class="champ" size="30" placeholder="Ex :azerty@gmail.com  " />
              <br />
              <br />
              <label class="grand" for="tel"> Numero de telephone :</label>
              <input type="tel" name="tel" id="tel" class="champ" maxlength="10" minlength="10" placeholder="Ex :le 1"/>
              <br />
              <br />
              <label class="grand" for="pass">Mot de passe :</label>
              <input type="password" name="pass" id="pass" class="champ" minlength="6" /input>
              <br />
              <br />
              <label class="grand" for="passverif">Confirmez votre mot de passe :</label>
              <input type="password" name="passverif" id="passverif" class="champ" minlength="6"/>
              <br />
              <br />
              <label class="grand" for="conditions">J'accepte les <a href="" id="cond-uti">conditions d'utilisations</a></label>
              <input type="checkbox" name="conditions" id="conditions" class="champ"/>
              <br />
              <br />

        <div class="valider">
          <p>Appuyez sur valider pour confirmer l'inscription</p>
          <input id="validation-ins" type="submit" name="valider" value="Valider l'inscription" />
          <input type="reset" id="rafraichir" value="Rafraîchir" />
        </div>
    </p>
  </form>
</div>

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
          <input type="submit" name="valider" value="Connection" />
        </div>
    </p>
    </form>

</div>  


<footer>
  <div id="container">
    <ul>
      <div id="texte_footer">
        <li><a href="mentions_legales.html"> Mentions legales </a></li>
        <li><a href="qui_sommes_nous.html"> Qui sommes nous </a></li>
        <li><a href="nous_contacter.html"> Nous contacter </a></li>
        <li><a href="plan_du_site.html"> Plan du site </a></li> 
        <li><a href="charte_de_confidentialite.html"> Charte de confidentialité </a></li>
      </div>

      <div id="images_footer">
          <li><a href="google_plus.html"> <img class="logo_reseaux_sociaux" src="googleplus.png"/></a></li>
          <li><a href="facebook"><img class="logo_reseaux_sociaux" src="facebook.png"/></a></li>
          <li><a href="twitter"><img class="logo_reseaux_sociaux" src="twitter.png"/></a></li>
      </div>
    </ul>
  </div>
</footer>

   
</body>


</html>