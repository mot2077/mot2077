<!DOCTYPE html>
<html>
    <head>
        <title>Datensätze einfügen</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $kundennummer = $_POST["tfKundennummer"];
        $vorname = $_POST["tfVorname"];
        $nachname = $_POST["tfNachname"];
        $strasse = $_POST["tfStrasse"];
        $plz = $_POST["tfPlz"];
        $ort = $_POST["tfOrt"];

        

        if ($kundennummer != "" and $vorname != "" and $nachname != ""
        and $strasse != "" and $plz != "" and $ort != "")
        {
            $db = @mysqli_connect("localhost", "root", "", "kunde") or
            DIE("Keine Verbindung zur Datenbank möglich");

            $sql = "INSERT into adresse(kundennummer, vorname, nachname, strasse, plz, ort) VALUES ($kundennummer, $vorname, $nachname, $strasse, $plz, $ort)";

            $ergebnis = @mysqli_query($db, $sql) or DIE("SQL-Fehler");

            if(mysqli_errno($db) == 0)
            {
                echo "Datensatz wurde erfolgreich eingefügt";
            }
            mysqli_close($db);
        } else
        {
            echo "Ihre Kundendaten sind leider unvollständig";
        }
        
        ?>
        <a href="einfuegen.html"> Zurück </a>
    </body>
</html>