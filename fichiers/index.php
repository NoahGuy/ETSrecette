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