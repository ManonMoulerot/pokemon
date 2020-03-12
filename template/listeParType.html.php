<?php

while ($resultrow2=$listeParType->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>".$resultrow2['nom_pok']."</p>";
        }
