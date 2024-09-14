<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $bad = isset($_POST["cbBad"]);
        $tresor = isset($_POST["cbTresor"]);
        $minibar = isset($_POST["cbMinibar"]);
        $meerblick = isset($_POST["cbMeerblick"]);
        if (!isset($_POST["cbBad"]) and !isset($_POST["cbTresor"]) and !isset($_POST["cbMinibar"]) and !isset($_POST["cbMeerblick"]))
        {
            echo "Geben Sie bitte mindestens eine der Möglichkeiten an! <br />";
        }
        else
        {
            echo "Danke für Ihre Anfrage, wir reservieren: <br />";
            if ($bad)
            {   
                echo "Zimmer mit Bad <br />";
            }
            if ($tresor)
            {   
                echo "Zimmer mit Tresor <br />";
            }
            if ($minibar)
            {   
                echo "Zimmer mit Minibar <br />";
            }
            if ($meerblick)
            {   
                echo "Zimmer mit Meerblick <br />";
            }
        }
        echo "<a href=hotel.html>zurück</a>";
        ?>
    </body>
</html>