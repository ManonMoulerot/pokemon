<?php
      echo "<h1>liste par type</h1>";
while ($resultrow3=$listeParType->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>".$resultrow3['nom_pok']."</p>";
        }
