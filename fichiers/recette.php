<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recette</title>
    <link rel="stylesheet" href="./normalize.css" />
    <link rel="stylesheet" href="./style.css" />
    <script src="./data.js"></script>
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

                <option value="1">Tous</option>
                <option value="2">Végétarien</option>
                <option value="3">Végane</option>
                <option value="4">Épicé</option>
                <option value="5">Pas épicé</option>

            </select>

            </div>

            <div>

            <label for="type_cuisine">Type de cuisine:</label>
            <select name="type_cuisine" id="type_cuisine">

                <option value="1">Tous</option>
                <option value="2">Chinois</option>
                <option value="3">Italien</option>
                <option value="4">Arabe</option>
                <option value="5">Québécois</option>

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
        const recetteId = parseInt(urlParams.get('id'));
        //trouve la recette dans le tableau par son id
        const recette = recettes.find(r => r.id === recetteId);
        if (recette) {
            //affiche la recette
            afficher_recette(recette);
        }

    });
</script>
</html>