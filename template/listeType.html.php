<?php

echo "<select name='type'>";
echo "<option disabled selected>Liste type</option>";
while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value=".$resultrow['id_type'].">".$resultrow['nom_type']."</option>";
}
echo "</select>";
