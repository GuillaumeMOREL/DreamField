<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />   
<link rel="Stylesheet" href="/css/Style_redirection.css" />
<title> DREAMFIELD</title>
</head>


<body>

<header>
<?php include("include/header.php"); ?>
</header>




<div id="milieu">
<div class="formulaire-depot">
<p id="formulaire-depot-titre">Afin de déposer une annonce, remplissez ce formulaire:</p>

  <div class=""><p class="parcourir" > Ajouter une photo de votre denrée (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="photo.php" enctype="multipart/form-data" >
      <input type="file" name="photo" id="photo" />
  </form></div>

  <form id="form" method="post" action="register_inscription.php">
    <p>
              Choisissez le type du produit:
              
              <input type="radio" name="type" value="fruit" id="fruit" /><label for="fruit">fruit</label>
              
              <input type="radio" name="type" value="legume" id="legume" /><label for="legume">légume</label>
              <br />
              <br />
              <label for="NomProduit">Quel est le nom de votre denrée</label><br />
              <select name="NomProduit" id="NomProduit">
              <optgroup label="Fruits">
                   <option value="abricot">Abricot</option>
                   <option value="banane">Banane</option>
                   <option value="clementine">Clémentine</option>
                   <option value="datte">Datte</option>
                   <option value="figue">Figue</option>
                   <option value="grenade">Grenade</option>
                   <option value="kiwi">Kiwi</option>
                   <option value="prune">Prune</option>
              </optgroup>
                   <optgroup label="Légumes">
                   <option value="asperge">Asperge</option>
                   <option value="brocoli">Brocoli</option>
                   <option value="chou">Chou</option>
                   <option value="epinard">Épinard</option>
                   <option value="gingembre">Gingembre</option>
                   <option value="haricot">Haricot</option>
                   <option value="mais">Maïs</option>
                   <option value="navet">Navet</option>
              </optgroup>
              <optgroup label="Autre">
                    <option value="AutreAliment">Autre</option>
              </optgroup>
              </select>
              <br />
              <br />
              <label for="NomProduit">Quel est le poids ou la quantité de votre denrée</label><br />
              <input type="range" min="1" max="100" value="0" oninput="document.getElementById('AfficheRange').textContent=value" />
              <span id="AfficheRange">0</span>
              <select name="PoidsQuant" id="PoidsQuant">
              <optgroup label="Poids">
                   <option value="mg">mg</option>
                   <option value="g">g</option>
                   <option value="kg">Kg</option>
              </optgroup>
                   <optgroup label="Quantité">
                   <option value="quantite">Sans Unité</option>
              </optgroup>
              </select>
              <br />
              <br /> 
              <label for="remarque">Ajouter une remarque</label><br />
              <textarea name="remarque" id="remarque"></textarea>
              <br />
              <br />
              <label for="prix"> Prix :</label>
              <input type="number" name="prix" id="prix" class="champ" min="0"/>
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
 
</div>






<footer>
<?php include("include/footer.php"); ?>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="javascript/insverif.js"></script>
</body>


</html>