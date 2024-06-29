<?php
require_once('./config.php');

//Si l'utilisateur est déjà connecté, on le renvoie directement vers la page index.php
if( isset($_SESSION["user_loggedin"]) ){
  header("Location: index.php");
  exit();
}

$nbErrors = 0;
$errMessage = "";

if( isset($_POST["username"]) && isset($_POST["password"])){
  // Le formulaire a été soumis => Traiter l'autrhentification

  //On vérifie si l'utilisateur existe dans la base de données
  $requete = $pdo->prepare("SELECT * FROM `usagers` WHERE `nom_utilisateur`=:nom_utilisateur AND `mot_de_passe`=PASSWORD(:mot_de_passe)");
  $requete->bindParam(":nom_utilisateur", $_POST["username"]);
  $requete->bindParam(":mot_de_passe", $_POST["password"]);
  $requete->execute();

  if($requete->fetch()){
    $_SESSION["user_loggedin"] = $_POST["username"];
    header("Location: index.php");
    exit();
  } else {
    $nbErrors++;
    $errMessage = "Code d'accès incorrects";
  }

}


?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Log In</title>
    <link
      href="./normalize.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <header>
        <h2>CUISINIÉTUDIANT</h2>
    </header>

    <div class="login-container">
      <section id="authentification" class="mb-4">
        <h2>Authentification</h2>
        <?php
        if($nbErrors > 0 ){
          echo "<div class='alert alert-danger'>$errMessage</div>";
        }
        ?>
        
        <form id="loginForm" class="form-group" action="./login.php" method="post">
          <div class="login-item">
          <label for="username">Nom d'utilisateur:</label>
            <input
              type="text"
              id="username"
              name="username"
              class="form-control"
              value="<?= isset($_POST["username"]) ? $_POST["username"] : "" ?>"
              required
            />
          </div>
          
          <div class="login-item">
            <label for="password">Mot de passe:</label>
            <input
              type="password"
              id="password"
              name="password"
              class="form-control"
              required
            />
          </div>
          <div class="login-item">
            <button type="submit" class="btn btn-primary mt-2 .align-top">
              Se connecter
            </button>
            <button
            class="btn btn-secondary mt-2"
            onclick="window.location.href='./nouveau_compte.php';"
          >
            Créer un compte
          </button>
          </div>
        </form>
      </section>
    </div>

    <footer>
      <p>© 2024 Recettes de Cuisine. Tous droits réservés.</p>
    </footer>
  </body>
</html>