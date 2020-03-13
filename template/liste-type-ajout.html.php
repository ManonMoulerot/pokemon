<?php
echo"<br /><h3>Sélectionner le type à modifier :</h3> <br />";
echo "<select name='type2'>";
echo "<option disabled selected>Liste type</option>";
while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value=".$resultrow['nom_type'].">".$resultrow['nom_type']."</option>";
}
echo "</select>";
