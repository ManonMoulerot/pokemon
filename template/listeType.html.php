<?php
echo"<br /><h2 class='d-flex justify-content-center'>Liste des types de pokémon</h2> <br />";
echo "<div class='d-flex align-items-center flex-column'>";
echo "<select name='type' class='mb-4'>";
echo "<option disabled selected>Liste type</option>";
while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value=".$resultrow['nom_type'].">".$resultrow['nom_type']."</option>";
}
echo "</select>";
echo "</div>";
