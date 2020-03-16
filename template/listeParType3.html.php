<?php
echo "<h2 class='d-flex justify-content-center mt-5'>Tous les pokémons de ce type :</h2>";
echo "<select class='d-flex justify-content-center mx-auto mt-4' name='type3'>";
echo "<option disabled selected>Liste pokémon</option>";
while ($resultrow2=$listeParType->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value=".$resultrow2['id_pok'].">".$resultrow2['nom_pok']."</option>";
        }
echo "</select>";