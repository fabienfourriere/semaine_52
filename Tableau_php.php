<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0",shrink-to-fit=no>
    <title>Document Contact</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">

    <!--On inclut le header du formulaire Jarditou-->
    <?php include 'jarditou/Jarditou_php/header.php'; 
     
     require "jarditou/Jarditou_php/connexion_bdd.php"; // Inclusion de la bibliothèque de fonctions
     
     $db = connexionBase(); // Appel de la fonction de connexion
     $requete = "SELECT * FROM produits";

    $result = $db->query($requete);

    if (!$result) 
    {
    $tableauErreurs = $db->errorInfo();
    echo $tableauErreur[2]; 
    exit("Erreur dans la requête");
    }

    if ($result->rowCount() == 0) 
    {
    // Cas où il n'a pas d'enregistrement
    exit("La table est vide");
    }
     
     ?>

    <br> <!--Liaison avec le formulaire d'ajout-->
    <a href="jarditou/Jarditou_php/produit_ajout.php"><button>Créer un nouvel enregistrement</button></a>
    
    <p id="tableau"></p> <!--On définit les différentes colonnes du tableau-->
    <div class="table-responsive">
      <table class="table table-hover table-bordered w-100 w-sm-50">
          <thead>
            <tr class="table-active">
              <th>Photos</th>
              <th>ID</th>
              <th>Référence</th>
              <th>Libellé</th>
              <th>Prix</th>
              <th>Stock</th>
              <th>Couleur</th>
              <th>Ajout</th>
              <th>Modif</th>
              <th>Bloqué</th>
            </tr>   
          </thead>
          <tbody>

          <?php 

//On associe les valeurs de la table dans le tableau
            while ($row = $result->fetch(PDO::FETCH_OBJ)){
                 
                // Ajout des images dans le tableau
                echo'<tr>';?>
                    <td class="table-warning"><img src="jarditou/public/jarditou_photos_php <?=$row->pro_id.".".$row->pro_photo;?>" alt="<?=$row->pro_id.".".$row->pro_photo;?>" width="150">.</td>
                    
            <?php
                    echo"<th>".$row->pro_id."</th>";
                    echo"<th>".$row->pro_ref."</th>";
                    echo '<th class="table-warning"><a href="jarditou/Jarditou_php/Formulaire_détail.php?pro_id='.$row->pro_id.'" title='.$row->pro_libelle.'>'.$row->pro_libelle.'</a></th>';
                    echo"<th>".$row->pro_prix."</th>";

                    // Rupture de stock si pro_stock = 0
                    if ($row->pro_stock == 0)  {echo"<th>"."Rupture de stock"."</th>";} else {echo"<th>".$row->pro_stock."</th>";}
                    
                    echo"<th>".$row->pro_couleur."</th>";
                    echo"<th>".$row->pro_d_ajout."</th>";
                    echo"<th>".$row->pro_d_modif."</th>";

                    // Cas où le produit est bloqué
                    if ($row->pro_bloque == 1){   ?>
                        <th>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalScrollable">Bloqué</button>
                            <div class="modal" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenteredLabel">Produit Bloqué</h5>
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">Nous vous tiendrons informé de la futur disponibilité du produit</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </th>
             <?php  }
                echo"</tr>";
            }

          ?>
         
          </tbody>        
      </table>
      </div>

    <!--On inclut le footer du formulaire Jarditou-->
      <?php include 'jarditou/Jarditou_php/footer.php'; ?>
</div>

<!--Importation des fichiers Javascript nécessaires à Bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>