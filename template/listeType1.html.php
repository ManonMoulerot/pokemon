<?php
echo"<br /><h2 class='text-center pt-5 pb-4'> Mon adversaire utilise un pokemon de type :</h2> <br />";
echo "<select name='type'>";
echo "<option disabled selected>Liste type</option>";
while ($resultrow=$listeType->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value=".$resultrow['nom_type'].">".$resultrow['nom_type']."</option>";
}
echo "</select>";

