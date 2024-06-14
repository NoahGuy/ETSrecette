<?php
require_once("./config.php");
if( !  isset($_SESSION["user_loggedin"]) ){
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>page principale</title>
    <link rel="stylesheet" href="./normalize.css" />
    <link rel="stylesheet" href="./style.css" />
    <script src="./data.js"></script>
    <script src="./script.js"></script>
  </head>
  <body>
    <div class="grid">
      <header>
        <h2>CUISINIÉTUDIANT</h2>
      </header>

      <nav>
        <div>
          <p class="filtres">Filtres</p>
        </div>

        <div>

          <label for="type_plats">Type de plats:</label>
          <select name="type_plats" id="type_plats">

            <option value=0>Tous</option>
            <?php 

              $tab = liste_types_plats($conn);
              for ($i = 0; $i < count($tab); $i++) {
                  echo "<option value={$tab[$i]["id"]}>{$tab[$i]["nom"]}</option>";
              }
            ?>
          </select>

        </div>

        <div>

          <label for="type_cuisine">Type de cuisine:</label>
          <select name="type_cuisine" id="type_cuisine">

          <option value=0>Tous</option>
          <?php 

            $tab = liste_types_cuisines($conn);
            for ($i = 0; $i < count($tab); $i++) {
                echo "<option value={$tab[$i]["id"]}>{$tab[$i]["nom"]}</option>";
            }
          ?>

          </select>

        </div>

        <div class="search">
          <form action="/search" method="GET">
            <input type="search" id="search" name="search" placeholder="Rechercher...">
            <button type="submit">Rechercher</button>
        </div>
      </nav>

      <main>
        <!-- mets vont ici -->
      </main>

      <footer>
        <p>© 2024 Recettes de Cuisine. Tous droits réservés.</p>
      </footer>
    </div>
  </body>
  <script>
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
    
        afficher_toutes_recettes(recettes);
    
    })
  </script>
</html>
