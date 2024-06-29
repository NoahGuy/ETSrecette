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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recette</title>
    <link rel="stylesheet" href="./normalize.css" />
    <link rel="stylesheet" href="./style.css" />
    
    <script src="./script.js"></script>
</head>
<body>
    <div class="grid_recette">
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

              //$tab = liste_types_plats($conn);
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

                //$tab = liste_types_cuisines($conn);
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
              </div>
        </nav>
        <div class="grid">
            <main>
                <div class="photo_desc">
                        <!-- photo et description de la recette -->
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr> 
                                <th>ingrédients</th>
                                <th>quantité</th>
                                <th>quantité équivalente</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- les ingredients -->
                        </tbody>
                    </table>
                </div>
                <div>
                    <h2>Étapes de préparation de la recette</h2>
                    <ol>
                        <!-- les etapes  -->
                    </ol>
                </div>
            </main>
        </div>
        <footer>
            <p>© 2024 Recettes de Cuisine. Tous droits réservés.</p>
        </footer>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        //trouve l'id a partir du url
        const urlParams = new URLSearchParams(window.location.search);
        const id = parseInt(urlParams.get('id'));

         fetch(`http://localhost:8000/api/recettes/${id}`, { method: "GET"})

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
            const types_plats = <?= json_encode($tab) ?>;
            const types_cuisine = <?= json_encode($tab2) ?>;

            afficher_recette(data, types_cuisine, types_plats);
        })

        .catch((error) => console.error("Data error:" + error.message))
    });
</script>
</html>