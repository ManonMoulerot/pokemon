<?php
echo "<h1>Liste pokémon en fonction du type sélectionné</h1>";
echo "<select name='type'>";
echo "<option disabled selected>Liste pokémon</option>";
while ($resultrow2=$listeParType->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value=".$resultrow2['id_pok'].">".$resultrow2['nom_pok']."</option>";
        }
echo "</select>";