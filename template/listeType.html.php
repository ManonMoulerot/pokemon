<?php
      echo "<h1>liste des types</h1>";
echo "<select name='type'>";
echo "<option disabled selected>Liste type</option>";
while ($resultrow4=$listeType->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value=".$resultrow4['id_type'].">".$resultrow4['nom_type']."</option>";
}
echo "</select>";
