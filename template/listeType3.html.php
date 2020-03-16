<?php
echo"<br /><h2>Sélectionne un type pour voir tous les pokémon de ce type :</h2> <br />";
echo "<select name='type3'>";
echo "<option disabled selected>Liste type</option>";
while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value=".$resultrow['nom_type'].">".$resultrow['nom_type']."</option>";
}
echo "</select>";
