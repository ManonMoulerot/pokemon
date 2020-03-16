<?php
//rappeler l'objet et la function pour la regenerer un coup
$pokemon = new Pokemon();
echo "<h1>Il est fort contre les types</h1>";
while ($resultrow1 = $listePokemonOffensif->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>" . $resultrow1['nom_type'] . "</h2>";
    $pokemon->setType($resultrow2['nom_type']);
    $type = $pokemon->getType();
    $result1 = $pokemon->selectionPokemonParType($resultrow1['nom_type']);
    echo "<select name='" . $type . "'>";
    echo "<option disabled selected>Liste pokémon</option>";
    while ($resultrow1 = $result1->fetch(PDO::FETCH_ASSOC)) {
        echo "<option value=''" . $resultrow1['nom_pok'] . "''>" . $resultrow1['nom_pok'] . "</option>";
    }
    echo "</select>";
}
