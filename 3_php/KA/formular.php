<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $vorname = $_POST["tfVorname"];
            $nachname = $_POST["tfNachname"];
            $wohnort = $_POST["tfWohnort"];
            echo "Sie heißen $vorname $nachname und leben in $wohnort <br /> <br />";
            echo "$vorname <br />";
            echo "$nachname <br />";
            echo "$wohnort";
        ?>
    </body>
</html>