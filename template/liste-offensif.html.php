<?php
    //rappeler l'objet et la function pour la regenerer un coup
      $pokemon = new Pokemon();
      $result1 = $pokemon->selectionPokemonParType('spectre');

   while ($resultrow1=$listePokemonOffensif->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>".$resultrow1['nom_type']."</h2>"; 
   
   echo "<select name='spectre'>";
       echo "<option disabled selected>Liste pokémon</option>";
       while ($resultrow2=$result1->fetch(PDO::FETCH_ASSOC)) {
           echo "<option value=''".$resultrow2['nom_pok']."''>".$resultrow2['nom_pok']."</option>";
       }
       echo "</select>";
    }