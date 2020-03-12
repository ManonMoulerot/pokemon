<?php
    //rappeler l'objet et la function pour la regenerer un coup
      $pokemon = new Pokemon();
      
      echo "<h1>liste-defensif bas</h1>";
   while ($resultrow2=$listePokemonDefensif2->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>".$resultrow2['nom_type']."</h2>";
    $pokemon->setType($resultrow2['nom_type']); 
    $type =$pokemon->getType();
    $result2 = $pokemon->selectionPokemonParType($resultrow2['nom_type']);
   echo "<select name='".$type."'>";
       echo "<option disabled selected>Liste pokémon</option>";
       while ($resultrow2=$result2->fetch(PDO::FETCH_ASSOC)) {
           echo "<option value=''".$resultrow2['nom_pok']."''>".$resultrow2['nom_pok']."</option>";
       }
       echo "</select>";
    }