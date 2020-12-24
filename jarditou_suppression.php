<?php
// Appel de la suppression
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    echo $id;
    }
    // Affichage des messages en cas de suppression ou non
    if (isset($_POST['delete']))
{
  //Requête de suppression
    mysql_query('DELETE FROM produits WHERE id=' .$_POST['delete'] .'LIMIT 1');
     echo "La fiche produit a bien été supprimé";
}
else 
{
  echo "Aucune suppression effectué";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Page contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
 <header>
  <div class="container">
    <div class="row d-none d-lg-flex align-items-center">
      <div class="col-sm-12 col-lg-3">
  <p class="image"><img src="../images/jarditou_logo.jpg" WIDTH=250 HEIGHT=75></div>
    <div class="d-sm-none d-lg-block col-lg-4"></div>
    <div class="col-sm-12 col-lg-5">
      <h2>
      <p class="text" style="line-height:100px;">Tout le jardin</p>
    </h2>
    </div></div>
  <div class="p-3 mb-2 bg-light text-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
      <a class="navbar-brand" href="#">La qualité depuis 70 ans</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
      <a id="link" href="../Evaluation/bootstrap_index.html" class="text-dark" title="Accueil">Accueil</a>
    </li>
    <li class="nav-item">
      <a href="../Evaluation/bootstrap_tableau.html" class="text-dark" title="Tableau">Tableau</a>
    </li>
    <li class="nav-item">
      <a href="../Evaluation/bootstrap_contact.html" class="text-dark" title="Contact">Contact</a>
    </li>
  </ul>
      <div class="container">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </div><br>
</nav>
</header>
<img src="../images/promotion.jpg">

<div class="container-fluid">
<img src="39.jpg" class="center-block"></div>

<section>Etes vous sur de vouloir supprimer "TRIKE" de la base de données ?</section>
<!--Les deux boutons renvoient vers le formulaire vide-->
<form class="form1">
<a href="U:\Partage\Fabien\Front\Statique\Bootstrap\bootstrap index.html" target="_blank"><button type="reset" class="btn btn-danger mb-2" name="delete">Supprimer</button>
<a href="U:\Partage\Fabien\Front\Statique\Bootstrap\bootstrap index.html" target="_blank"><button type="reset" class="btn btn-success mb-2" >Annuler</button>
        </form>

<footer>
    <div class="p-3 mb-2 bg-dark text-white">
    <div><a id="link" class ="text-secondary" href="mentions.html" title="Mentions">Mentions légales</a>
      <a href="horaires.html" class ="text-secondary" title="Horaires">Horaires</a>
      <a href="plan.html" class ="text-secondary" title="Plan">Plan du site</a></p></div></div>
 </footer>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>