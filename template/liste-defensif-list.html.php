<?php
    //rappeler l'objet et la function pour la regenerer un coup

      $pokemon = new Pokemon();
      
        echo "<h2 class='mt-5 mb-4 d-flex justify-content-center'>Pour taper fort je doit utiliser un pokemon de type :</h2>";
        echo "<ul class='row justify-content-center pl-0'>";
   while ($resultrow2=$listePokemonDefensif->fetch(PDO::FETCH_ASSOC)) {
        echo "<li class='d-flex font-size1 mb-4 font-weight-bold'><div class='pl-2 pr-2'><img src='".$resultrow2['img_type']."' alt='".$resultrow2['nom_type']."'></div><span class='pl-2 pr-2 font-weight-light'>ou</span></li>";
        $result2 = $pokemon->selectionPokemonParType($resultrow2['nom_type']);
    }
    echo "</ul>";