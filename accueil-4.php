<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />   
    <link rel="Stylesheet" href="style-4.css" />
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

        <div class="lien_panier">
        <a class="connection_inscription_panier" href="panier.html"> Mon Panier (0) </a>
        <div class="layer-panier">
        <div class="fleche"></div>
        <div class="contenu">
        <div id="listes_commandes" class="autres_produits">Votre panier est actuellement vide</div>
        <div id="panier_vide" class="autres_produits"></div>
        </div>
      </div>
      </div>
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
              <!--<li><a  href="recherche_utilisateur.html"><img src="logo-recherche.png" id="logo_recherche"/></a></li>-->
              <li>
                <form id="search" method="post">
                  <div class="btn-left-loupe"></div>
                  <input class="search_data" name="saisie" type="search" placeholder="Recherche..." required />
                  <a input class="loupe" name="go" type="submit" value=""/><img src="logo-recherche.png" id="logo-recherche"/></a>
                </form>
              </li>
     	      </div>
          </ul>
       
     	  </div>  
    
  </header>

  <div id="major_container">
    
      <div id="bandeau_recherche">
        <div id="container">
          <h3> Rechercher un produit par... </h3>
          <div id="categorie_recherche">
            <a href="achat_categorie_fruits.html" id="fruits"> FRUITS </a>
            <a href="achat_categorie_legumes.html" id="legumes"> LEGUMES </a>
            <a href="achat_categorie_regions.html" id="regions"> REGIONS </a>
          </div>
        </div>
      </div>

      <div id="bandeau_promotions">
        <div id="container">
          <a href="offres.html"> Promotions </a>
        </div>
      </div>

      <div id="description_association">
      </div>
    
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