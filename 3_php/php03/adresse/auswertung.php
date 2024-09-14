<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formular</title>
    </head>
    <body>
        <?php
        $tfVorname = $_POST["tfVorname"];
        $tfNachname = $_POST["tfNachname"];
        $tfStrasse = $_POST["tfStrasse"];
        $tfPostleitzahl = $_POST["tfPostleitzahl"];
        $tfOrt = $_POST["tfOrt"];

        /*
        echo "<p> Folgende Daten wurden übermittelt: </p>";
        echo "Vorname: $tfVorname <br />";
        echo "Nachname: $tfNachname <br />";
        echo "Strasse: $tfStrasse <br />";
        echo "Postleitzahl: $tfPostleitzahl <br />";
        echo "Ort: $tfOrt <br />";
        ?>
        <br />
        Zurück zur <a href="adresse.html">Startseite</a>
        */
        echo "Guten Tag, $tfVorname $tfNachname <br /> <br />";
        echo "Sie wohnen in $tfPostleitzahl $tfOrt, $tfStrasse";
        ?>
        <br /> <br />
        <a href="adresse.html">zurück</a>
    </body>
</html>
