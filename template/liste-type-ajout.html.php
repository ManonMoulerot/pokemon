<?php
echo"<br /><h2 class='mt-4 d-flex justify-content-center'>Sélectionner le type à modifier :</h2> <br />";
echo "<select name='type2' class='d-flex mx-auto'>";
echo "<option disabled selected>Liste type</option>";
while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value=".$resultrow['nom_type'].">".$resultrow['nom_type']."</option>";
}
echo "</select>";
