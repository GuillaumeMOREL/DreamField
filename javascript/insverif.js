
  $(document).ready(function(){
    
    var $prenom = $('#prenom'),
        $nom = $('#nom'),
        $adresse = $('#adresse')
        $ville = $('#ville')
        $tel = $('#tel')
        $mdp = $('#pass'),
        $confirmation = $('#passverif'),
        $mail = $('#mail'),
        $envoi = $('#validation-ins'),
        $reset = $('#rafraichir'),
        $erreur = $('#erreur'),
        $champ = $('.champ');

    $champ.keyup(function(){
      if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
        $(this).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
      }
      else{
            $(this).css({ // si tout est bon, on le rend vert
            borderColor : 'green',
            color : 'green'
        });
      }
    });

    $tel.keyup(function(){
      if($(this).val().length < 10){ // si la chaîne de caractères est inférieure à 10
        $(this).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
      }
      else{
            $(this).css({ // si tout est bon, on le rend vert
            borderColor : 'green',
            color : 'green'
        });
      }
    });  

    $passverif.keyup(function(){
      if($(this).val() != $mdp.val()){ // si la confirmation est différente du mot de passe
        $(this).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
      }
      else{
        $(this).css({ // si tout est bon, on le rend vert
          borderColor : 'green',
          color : 'green'
        });
      }
    });

    $envoi.click(function(e){
      e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

      // puis on lance la fonction de vérification sur tous les champs :
      verifier($prenom);
      verifier($nom);
      verifier($adresse);
      verifier($ville);
      verifier($mdp);
      verifier($confirmation);
      verifier($mail);
    });

    $reset.click(function(){
      $champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
        borderColor : '#ccc',
        color : '#555'
      });
      $erreur.css('display', 'none'); // on prend soin de cacher le message d'erreur
    });

    function verifier(champ){
      if(champ.val() == ""){ // si le champ est vide
        $erreur.css('display', 'block'); // on affiche le message d'erreur
        champ.css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
      }
    }
  });