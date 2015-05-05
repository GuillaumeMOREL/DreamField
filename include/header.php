          <head>
            <link rel="Stylesheet" href="header.css" />
          </head>  

          <div id="header">    
            <div  id="top-header" class="container">  
                <a href="accueil_final.php"><img src="../logo/logo.png" id="logo"/></a>
                <div id="acces_compte">
                <a class="connection_inscription_panier" href="connexion.php">Se connecter</a>
                <a class="connection_inscription_panier" href="inscription.php">S'inscrire </a>
                <a class="connection_inscription_panier" href="panier.html"> Mon Panier (0) </a>
                </div>
            </div>   

              <div id="menu" class="container">
                <ul>
                      <li id="current_page_item"><a href="accueil_final.php"  >Accueil</a></li>
                      <li><a href="annoncesfruits.php" class="menu-text" >Offres</a></li>
                      <li><a href="redirection.php" class="menu-text" >Déposer une annonce</a></li>
                      <li><a href="recettes.html" class="menu-text" >Recette</a></li> 
                      <li><a href="forum.html" class="menu-text" >Forum</a></li>
                      <li><a href="aide.html" class="menu-text" >Aide</a></li>
                      <li id="recherche">
                        <form id="search" method="post">
                          <input id="search_data" name="saisie" type="search" placeholder="Recherche..." required />
                          <a name="go" type="submit" id="logo-search" class="menu-text" value=""/><img src="/logo/logo-recherche.png" id="logo-recherche"/></a>
                        </form>
                      </li> 
                </ul> 
              </div>
          </div>