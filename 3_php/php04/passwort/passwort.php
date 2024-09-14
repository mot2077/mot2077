<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $zahl1 = $_POST["tfZahl1"];
            $zahl2 = $_POST["tfZahl2"];
            if ($zahl1 != "" and $zahl2 != "")
            {
                if (is_numeric($zahl1) and is_numeric($zahl2))
                {
                    $summe = $zahl1 + $zahl2;
                    echo "Das Ergebnis lautet: $zahl1 + $zahl2 = $summe";
                } else
                {
                    echo "Bitte Zahlen eingeben!";
                }
            } else
            {
                echo "Mindestens eine Eingabe fehlt!";
            }
            echo "<br /><a href=passwort.html>zurück zur Startseite</a>";
        ?>
    </body>
</html>