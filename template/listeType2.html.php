<?php
echo"<br /><h2 class='text-center font-weight-bolder py-4'>Mon pokémon est de type :</h2> <br />";
echo "<select name='type2'>";
echo "<option disabled selected>Liste type</option>";
while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value=".$resultrow['nom_type'].">".$resultrow['nom_type']."</option>";
}
echo "</select>";
