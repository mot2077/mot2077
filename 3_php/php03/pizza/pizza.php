<DOCTYPE html>
<html lang="de">
  <head>
	<meta charset="UTF-8">
	<title>Hi</title>
  </head>
  <body>
      <?php
        $pizza = $_POST["rbpizza"];
        echo "<h2> Sie haben $pizza bestellt! </h2>";
        echo "Unser Pizzasprinter liefert Ihre Pizza in ca. 20min an folgende Lieferanschrift aus!";

        $vorname = $_POST["tfvorname"];
        $nachname = $_POST["tfnachname"];
        $strasse = $_POST["tfstrasse"];
        $postleitzahl = $_POST["tfpostleitzahl"];
        $ort = $_POST["tfort"];
        echo "<p>$vorname $nachname</p>";
        echo "<p>$strasse</p>";
        echo "<p>$postleitzahl $ort</p>";
    ?>
  </body>
</html>