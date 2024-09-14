<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="format.css" />
  </head>
  <body>
    <h2 size="40px">Kapitalentwicklung</h2>
    <?php
    $kapital = $_POST["tfKapital"];
    $zinsen = $_POST["tfZinsen"];
    $jahre = $_POST["tfJahre"];
    $produkt = $kapital;
    echo "Ein Kapital von $kapital Euro wird sich bei einem Zinssatz von $zinsen % folgendermaßen entwickeln: <br />";
    for ($anzahl = 1; $anzahl <= $jahre; $anzahl++)
    {
        $produkt = $produkt * (1 + $zinsen / 100);
        echo "Nach $anzahl Jahren &nbsp", round($produkt, 2), "&nbsp Euro <br />";
    }
    ?>
  </body>
</html>