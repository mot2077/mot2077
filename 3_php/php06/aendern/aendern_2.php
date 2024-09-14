<!DOCTYPE html>
<html lang="de">
    <head>
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

        //Button muss nicht da sein
        $button = $_POST["button"];
        if($button == "aendern")
        {
            $db = @mysqli_connect("localhost", "root", "", "kunde") or DIE("Keine Verbindung zur Datenbank");
            $sql = "UPDATE adresse SET vorname='$vorname', nachname='$nachname', strasse='$strasse', plz='$plz', ort='$ort' WHERE kundennummer=$kundennummer";
            mysqli_query($db, $sql) or DIE("SQL-Fehler");
            
            if(mysqli_errno($db) == 0)
            {
                echo "<h1> Der Datensatz wurde erfolgreich geändert</h1>";
            } 
        } else{
                echo "<h1> Daten wurden nicht geändert </h1>";
        }
        ?>
    </body>
</html>