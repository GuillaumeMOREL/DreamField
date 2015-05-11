<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />   
    <link rel="Stylesheet" href="/css/Style_acceuil_final.css" />
    <title> DREAMFIELD</title>
  </head>
  <body>

    <header>
      <?php include("include/header.php"); ?>
    </header>

    <div id="main_body">
      <div id="carrousel" class="container">
        <ul>
          <li ><img class="photo_fruit_legume" src="photo_fruit_legume/fruit_2.jpg" /></li>
          <li ><img class="photo_fruit_legume" src="photo_fruit_legume/potager_1.jpg" /></li>
          <li ><img class="photo_fruit_legume" src="photo_fruit_legume/montage_carrousel.jpg" /></li>  
        </ul>   
      </div>

              <!--<div id="bandeau_promotions" class="container">
                <div id="title">
                  <a href="offres.html"><h2> Promotions </h2> </a>
                </div>
                <div id="promo1"> <a href=""><img class="produit" src="photo_fruit_legume/pomme.jpg" alt="" />
                  <h2 class="subtitle"> Mr. X </h2>
                  <p> PRODUITS- descriptions, prix</p> </a>
                </div>
                <div id="promo2"> <a href=""><img class="produit" src="photo_fruit_legume/melon.jpg" alt="" />
                  <h2 class="subtitle"> Mr. Y </h2>
                  <p> PRODUITS- descriptions, prix</p> </a>
                </div>
                <div id="promo3"> <a href=""><img class="produit" src="photo_fruit_legume/brocoli.jpg" alt="" />
                  <h2 class="subtitle"> Me. K </h2>
                  <p> PRODUITS- descriptions, prix</p> </a>
                </div>
                <div id="promo4"> <a href=""><img class="produit" src="photo_fruit_legume/framboise.jpg" alt="" />
                  <h2 class="subtitle"> Me. L </h2>
                  <p> PRODUITS- descriptions, prix</p> </a>
                </div>
              </div>-->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

      <div class="carrousel-2">
        <div id="wrapper">
          <div id="carrou-2">
            <img src="photo_fruit_legume/pomme.jpg" alt="dakar-1" />
            <img src="photo_fruit_legume/pomme.jpg" alt="dakar-2" />
            <img src="photo_fruit_legume/brocoli.jpg" alt="dakar-4" />
            <img src="photo_fruit_legume/framboise.jpg" alt="dakar-5" />
            <img src="photo_fruit_legume/pomme.jpg" alt="dakar-7" />
            <img src="photo_fruit_legume/pomme.jpg" alt="dakar-8" />
            <img src="photo_fruit_legume/brocoli.jpg" alt="dakar-9" />
            <img src="photo_fruit_legume/framboise.jpg" alt="dakar-10" />
            <img src="photo_fruit_legume/framboise.jpg" alt="dakar-11" />
            <img src="photo_fruit_legume/pomme.jpg" alt="dakar-13" />
            <img src="photo_fruit_legume/pomme.jpg" alt="dakar-14" />
          </div>
        </div>
        <a id="prev" href="#"></a>
        <a id="next" href="#"></a>
      </div>


<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <div id="description_association" class="container">
      <div id="content">
        <div class="title">
          <h2>Notre socièté </h2>
        </div>
          <p> WEbDesign est une association a but non-lucratif. 
          Notre but ? Vous satisfaire ! </p>
          </br> </br>
          <a href="#" class="">Learn More</a>
        </div>
        <div>
          <a href="qui_sommes_nous.html"> <img id="logo-webdesign" src="/logo/webdesign.png" /> </a>
        </div>
      </div>
    </div>


    <footer>
      <?php include("include/footer.php"); ?> 
    </footer>

      
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>  
    <script src="/javascript/carrousel.js"></script> 
    <script src="/javascript/carrousel-2.js"></script> 

  </body>

</html>