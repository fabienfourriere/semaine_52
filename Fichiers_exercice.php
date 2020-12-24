  <?php
    $fichier = file("ListeLiens.txt");
    $total = count($fichier);
      for($i = 0; $i < $total; $i++) {
        echo nl2br($fichier[$i]);
    }
  ?>