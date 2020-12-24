
<?php
// Connexion à la base de données
require "C:\wamp\www\jarditou\Jarditou_php\connexion_bdd.php";

$requete = "SELECT * FROM categories";$search = $bdd->query($requete);
$row = $search->fetch(PDO::FETCH_OBJ);
// Affichage des informations selon le produit sélectionné
if ($_POST) {
    $sql = 'INSERT INTO produits(
    pro_id,
    pro_ref,     
    pro_libelle, 
    pro_prix,
    pro_stock,
    pro_couleur,
    pro_bloque,
    pro_d_ajout
    pro_d_modif)
        VALUES (    :pro_id,
                    :pro_ref,    
                    :pro_libelle, 
                    :pro_prix,
                    :pro_stock,
                    :pro_couleur,
                    :pro_bloque,
                    :pro_d_ajout
                    :pro_d_modif)';

    $req = $bdd->prepare($sql);    
    $req->bindValue(':pro_id',$_POST['pro_id']);  
    $req->bindValue(':pro_ref',$_POST['pro_ref']);
    $req->bindValue(':pro_libelle',$_POST['pro_libelle']);
    $req->bindValue(':pro_prix',$_POST['pro_prix']);
    $req->bindValue(':pro_stock',$_POST['pro_stock']);
    $req->bindValue(':pro_couleur',$_POST['pro_couleur']);
    $req->bindValue(':pro_bloque',$_POST['pro_bloque']);
    $req->bindValue(':pro_d_ajout',$_POST['pro_d_ajout']);
    $req->bindValue(':pro_d_modif',$_POST['pro_d_modif']);
    $req->execute(); 
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Page accueil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <div class="container">
      <header>
      <div class="row justify-content-between align-self-start">
        <div class="col-4">
    <p class="img-fluid"><img src="jarditou/public/images/jarditou_logo.jpg" alt="jarditoulogo" WIDTH=200 HEIGHT=auto></div>
      <div class="col-4">
        <p class="h2 ml-5 pt-3 d-none d-lg-block">Tout le jardin</p>
      </div></div>
      <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="bootstrap index.html">Jarditou.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
          <li class="nav-item">
        <a href="bootstrap index.html" class="nav-link" title="Accueil">Accueil</a>
      </li>
      <li class="nav-item">
        <a href="bootstrap tableau.html" class="nav-link" title="Tableau">Tableau</a>
      </li>
      <li class="nav-item">
        <a href="Evaluation Exercice 5.html" class="nav-link" title="Contact">Contact</a>
      </li>
    </ul>
  </div>
        <div class="form-group">
          <form class="form-inline d-none d-lg-block" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
            <button class="btn btn-outline-info py-1" type="submit">Rechercher</button>
          </form>
        </div>
  </nav>
  <div class="row">
    <div class="col-12">
  <img src="jarditou/public/images/promotion.jpg" class="img-fluid" alt="promotion">
    </div>
  </div>
  </header>
<div class="parent"> 
  <form action="http://bienvu.net/script.php" method="POST" > 
  <!--On définit le formulaire-->
    <fieldset>
        <div class="form-group">
          <label for="nom">ID : </label>
          <input type="text" class="form-control" id="ID"  >
        </div>
        <div class="form-group">
          <label for="ref">Référence : </label>
          <input type="text" class="form-control" id="ref">
        </div>
       <form>
        <div>
          <label for="cat">Catégorie : </label>
          <input type="text" class="form-control" id="cat" name="cat">
        </div>
      </form>
        <div class="form-group">
          <label for="lib">Libellé : </label>
          <input type="text" class="form-control" id="lib">
        </div>
        <label for="des">Description :</label>
        <textarea class="form-control" id="des" rows="3" required></textarea>
        <div class="form-group">
          <label for="prix">Prix : </label>
          <input type="text" class="form-control" id="prix">
        </div>
        <div class="form-group">
          <label for="stock">Stock : </label>
          <input type="text" class="form-control" id="stock">
        </div>
        <div class="form-group">
          <label for="couleur">Couleur : </label>
          <input type="text" class="form-control" id="couleur">
        </div>
        <div class="form-group">
          <label for="ext">Extension de la photo : </label>
          <input type="text" class="form-control" id="ext">
        </div>
      <form>
          <label for="prod">Produit bloqué ? : </label><br>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="radio1" id="radio1" value="option1" >
              <label class="form-check-label" for="radio1">Oui</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="radio2" id="radio2" value="option2">
              <label class="form-check-label" for="radio2" >Non</label>
          </div>
          <div class="form-group">
          <label for="daj">Date d'ajout : </label>
          <input type="text" class="form-control" id="daj">
        </div>
        <div class="form-group">
          <label for="dmo">Date de modification : </label>
          <input type="text" class="form-control" id="dmo">
        </div>
       </form><br>
        <form class="form1">
          <button type="reset" class="btn btn-secondary mb-2" >Retour</button>
          <button type="submit" class="btn btn-success mb-2" >Enregistrer</button>
        </form>
       </fieldset>
</form>
<footer>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-3 rounded">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="mentions.html" title="Mentions">Mentions légales</a></li>
        <li class="nav-item">
        <a href="horaires.html" class="nav-link" title="Horaires">Horaires</a></li>
        <li class="nav-item">
        <a href="plan.html" class="nav-link" title="Plan">Plan du site</a></li>
        </ul>
        </div>
        </nav>
  </footer>
</div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  </div>
</body>
</html>
