<?php
    //rappeler l'objet et la function pour la regenerer un coup
      $pokemon = new Pokemon();
      
      echo "<h2 class='d-flex justify-content-center mt-5'> Il est faible contre les types :</h2>";
      echo "<ul class='row m-0 justify-content-center flex-wrap pl-0'>";
      while ($resultrow2=$listePokemonDefensif_1->fetch(PDO::FETCH_ASSOC)) {
           echo "<li class='p-3 mt-3 d-flex font-size2 font-weight-bold text-center flex-column'><div class='pl-2 pr-2'><img src='".$resultrow2['img_type']."' alt='".$resultrow2['nom_type']."'></div>";
           $result2 = $pokemon->selectionPokemonParType($resultrow2['nom_type']);
           echo "<div class='d-flex justify-content-center'>";
           echo "<select class='mt-3' name='" . $resultrow2['nom_type'] . "'>";
           echo "<option disabled selected>Liste pokémon</option>";
           while ($resultrow2 = $result2->fetch(PDO::FETCH_ASSOC)) {
               echo "<option value=''" . $resultrow2['nom_pok'] . "''>" . $resultrow2['nom_pok'] . "</option>";
           }
           echo "</select>";
           echo "</div>";
           echo "</li>";
   
       }
       echo "</ul>";

