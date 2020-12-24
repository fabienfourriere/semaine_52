<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Atelier PHP N°4 - Affichage de la liste</title>
</head>

<body> 
    <div class="container">

    <?php
    //Connexion à la base de données
    require "connexion_bdd.php";
    $db = connexionBase();
    $requete = "SELECT pro_id, pro_ref, pro_libelle 
    FROM produits 
    WHERE ISNULL(pro_bloque) ORDER BY pro_d_ajout DESC";

    $result = $db->query($requete);

//Cas où il y'a une erreur dans la requête
    if (!$result) 
    {
        $tableauErreurs = $db->errorInfo();
        echo $tableauErreur[2]; 
        die("Erreur dans la requête");
    }
//Cas où le champ recherché est vide
    if ($result->rowCount() == 0) 
    {

       die("La table est vide");
    }

    echo "<table>";

    while ($row = $result->fetch(PDO::FETCH_OBJ))
    {
        echo"<tr>";
        echo"<td>".$row->pro_id."</td>";
        echo"<td>".$row->pro_ref."</td>";
        echo '<td><a href="detail.php?id='.$row->pro_id.'" title='.$row->pro_libelle.'>'.$row->pro_libelle.'</a></td>';
        echo"</tr>";
    }

    echo "</table>"; 
    ?>
</body>
</html> 