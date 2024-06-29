<?php

require_once("./config.php");

if( !  isset($_SESSION["user_loggedin"]) ){
  header("Location: login.php");
  exit();
}

$tab = liste_types_plats($pdo);
$tab2 = liste_types_cuisines($pdo);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>page principale</title>
    <link rel="stylesheet" href="./normalize.css" />
    <link rel="stylesheet" href="./style.css" />
    
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

            
            for ($i = 0; $i < count($tab2); $i++) {
                echo "<option value={$tab2[$i]["id"]}>{$tab2[$i]["nom"]}</option>";
            }
          ?>

          </select>

        </div>

        <div class="search">
          <form action="/search" method="GET">
            <input type="search" id="search" name="search" placeholder="Rechercher...">
            <button type="submit">Rechercher</button>
          </form>
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

      fetch("http://localhost:8000/api/recettes", { method: "GET"})

            .then((response) => {

              if (!response.ok) {

                throw new Error("HTTP error: " + response.statusText);
              }
              return response.json();
            })
            
            .then((data) => {

              if (data.error) {

                throw new Error("Server error: " + data.error);
              }
              afficher_toutes_recettes(data);
            })

            .catch((error) =>
            console.error(
              "Data error:" + error.message
            )
            )
      


      const typePlatsSelect = document.getElementById('type_plats');
        typePlatsSelect.addEventListener('change', function() {
            const id = this.value;
            
        
          const main = document.querySelector('main');
          main.innerHTML = ''; //enleve toutes les recettes du main

          fetch(`http://localhost:8000/api/recettes/type_plat/${id}`, { method: "GET"})

            .then((response) => {

              if (!response.ok) {

                throw new Error("HTTP error: " + response.statusText);
              }
              return response.json();
            })
            
            .then((data) => {

              if (data.error) {

                throw new Error("Server error: " + data.error);
              }
              afficher_toutes_recettes(data);
            })

            .catch((error) =>
            console.error(
              "Data error:" + error.message
            )
            )
          });
        });
  </script>
</html>
