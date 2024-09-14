<!DOCTYPE html>
<html>
<head>
    <title>Daten aus einer Datenbank anzeigen</title>
    <meta charset="utf8">
</head>
<body>
<?php
//Verbindung zum Server aufnehmen und Datenbnk auswählen
$db = @mysqli_connect("localhost", "root", "", "kunde") or
DIE ("Keine Verbindung zur Datenbank möglich");

//SQL-Abfrage ausführen
$ergebnis = @mysqli_query($db, "SELECT * from adresse") or 
DIE ("SQL-Fehler");

//Datensätze ausgeben
$anzahlzeilen = mysqli_num_rows($ergebnis);

//Ausgabe
echo "$anzahlzeilen Datens&auml;tze in der Tabelle adresse gefunden: <br><br>";

while ($zeile = mysqli_fetch_assoc($ergebnis))
    {
        echo "$zeile[kundennummer] $zeile[vorname] $zeile[nachname], $zeile[strasse], $zeile[plz] $zeile[ort] <br>";
    }

//Verbindung zur Datenbank schließen
mysqli_close($db);

?>
</body>
</html>