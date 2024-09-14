<!DOCTYPE html>
<html lang="de">
  <body>
    <?php
    //Eingabe
    $art1 = 22.5;
    $art2 = 12.3;
    $art3 = 5.2;
    $e = "Euro";

    //Verarbeitung
    $sum = $art1 + $art2 + $art3;
    $mitust = $sum * 1.19;

    //Ausgabe
    echo "Artikel1: $art1 $e <br />";
    echo "Artikel2: $art2 $e <br />";
    echo "Artikel3: $art3 $e <br /> <br />";
    echo "Nettosumme: $sum $e <br />";
    echo "Umsatzsteuer: 19% <br />";
    echo "Bruttosumme: $mitust $e <br />";
    ?>
  </body>
</html>