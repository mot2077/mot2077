<DOCTYPE html>
<html lang="de">
  <head>
	<meta charset="UTF-8">
	<title>Hi</title>
  </head>
  <body>
      <?php
      $vorname = $_POST["tfvorname"];
      $nachname = $_POST["tfnachname"];
      $strasse = $_POST["tfstrasse"];
      $postleitzahl = $_POST["tfpostleitzahl"];
      $ort = $_POST["tfort"];
      if ($vorname != "" and $nachname != "" and $strasse != "" and $postleitzahl != "" and $ort != "")
        {
          $pizza = $_POST["rbpizza"];
          if (isset($pizza))
          {
            echo "<h2> Sie haben $pizza bestellt! </h2>";
            echo "Unser Pizzasprinter liefert Ihre Pizza in ca. 20min an folgende Lieferanschrift aus!";
            echo "<p>$vorname $nachname</p>";
            echo "<p>$strasse</p>";
            echo "<p>$postleitzahl $ort</p>";
          } else
          {
            echo "Bitte wählen Sie eine Pizza aus";
          }
        } else
        {
          echo "Ihre Adressdaten sind leider unvollständig";
        }
        echo "<a href=pizza.html> zurück zur Startseite </a>";


        
    ?>
  </body>
</html>