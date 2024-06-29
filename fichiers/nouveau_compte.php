<?php
require_once('./config.php');

$formulaireSoumis = false;
$erreur = "";
$nbErreurs = 0;

if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password2"])){
  $formulaireSoumis = true;

  //Vérifier si le username est déjà utilisé
  $requete = $pdo->prepare("SELECT * FROM `usagers` WHERE `nom_utilisateur`=:nom_utilisateur");
  $requete->bindValue(":nom_utilisateur", $_POST["username"]);
  $requete->execute();

  if($requete->fetch()){
    $nbErreurs ++;
    $erreur = " Le nom d'utilisateur existe déjà!";
  }

  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  if ($password != $password2) {

    $nbErreurs ++;
    $erreur = $erreur." Les mots de passe ne sont pas identiques!";
  }

  $min_password_length = 8;

       
  if (strlen($password) < $min_password_length) {

    $erreur = $erreur." Le mot de passe doit avoir 8 charactères ou plus!";
    $nbErreurs ++;
  }

  if(!$nbErreurs){
    $requete = $pdo->prepare("INSERT INTO `usagers` (`nom`, `prenom`,`nom_utilisateur`, `mot_de_passe`) VALUES (:nom, :prenom, :nom_utilisateur, PASSWORD(:mot_de_passe) )");
    

    $requete->bindValue(":nom", $_POST["nom"]);
    $requete->bindValue(":prenom", $_POST["prenom"]);
    $requete->bindValue(":nom_utilisateur", $_POST["username"]);
    $requete->bindValue(":mot_de_passe", $_POST["password"]);
    if( $requete->execute() ){
      //Renvoyer l'usager vers la page login.php
      header("Location: login.php");
      exit();
    } else {
      $nbErreurs++;
      $erreur = $erreur." Erreur lors de l'insertion dans la base de données.";
    }

    
  }

}

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Inscription</title>
    <!-- Bootstrap CSS -->
    <link
      href="./normalize.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <header class="bg-primary text-white text-center py-3">
        <h2>CUISINIÉTUDIANT</h2>
    </header>

    <div class="container my-4">
      <section id="nouvelUsager" class="mb-4">
        <h2>Créer un compte</h2>
        
          <?php
          //On affiche les erreurs éventuelles
          if($nbErreurs){
            echo "<div class='alert alert-danger'>";
            echo $erreur;
            echo "</div>";
          }
          ?>
        <form method="post" action="./nouveau_compte.php" class="form-group">

        <div class="login-item">
            <label for="nom">Nom:</label>
            <input
              type="text"
              id="nom"
              name="nom"
              class="form-control"
              value="<?= isset($_POST["nom"]) ? $_POST["nom"] : "" ?>"
              required
            />
          </div>

          <div class="login-item">
            <label for="username">Prénom:</label>
            <input
              type="text"
              id="prenom"
              name="prenom"
              class="form-control"
              value="<?= isset($_POST["prenom"]) ? $_POST["prenom"] : "" ?>"
              required
            />
          </div>

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
            <label for="password2">Confirmation:</label>
            <input
              type="password"
              id="password2"
              name="password2"
              class="form-control"
              required
            />
          </div>

          <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
      </section>
    </div>

    <footer class="bg-primary text-white text-center py-3 fixed-bottom">
        <p>© 2024 Recettes de Cuisine. Tous droits réservés.</p>
    </footer>
  </body>
</html>