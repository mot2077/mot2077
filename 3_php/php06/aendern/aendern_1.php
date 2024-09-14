<!DOCTYPE html>
<html lang="de">
<head>
<title>Kundendaten ändern</title>
<meta charset="utf-9">
</head>
<body>
<?php

$kundennummer = $_POST["tfKundennummer"];
if($kundennummer != "")
{
    $db = @mysqli_connect("localhost", "root", "", "kunde") or DIE("Keine Verbindung zur Datenbank");

    $sql = "SELECT * FROM adresse WHERE kundennummer = $kundennummer";

    $ergebnis = @mysqli_query($db, $sql) or DIE("SQL-Fehler");

    $datensatz = @mysqli_fetch_assoc($ergebnis);

    if($datensatz['kundennummer'] != "")
    {
        echo "<h2>Kundennummer: $datensatz[kundennummer] </h2>";
        echo "<h2>Bitte führen Sie die Änderung aus</h2>";

        //Formular
        echo "<form action='aendern_2.php' method='POST'> <br>";
        echo "<input type='hidden' name='tfKundennummer' value='$datensatz[kundennummer]'> <br>";
        echo "<input type='text' name='tfVorname' value='$datensatz[vorname]'> Vorname <br>";
        echo "<input type='text' name='tfNachname' value='$datensatz[nachname]'> Nachname <br>";
        echo "<input type='text' name='tfStrasse' value='$datensatz[strasse]'> Strasse <br>";
        echo "<input type='text' name='tfPlz' value='$datensatz[plz]'> Postleitzahl <br>";
        echo "<input type='text' name='tfOrt' value='$datensatz[ort]'> Ort <br>";
        echo "<input type='submit' name='button' value='&auml;ndern'> &nbsp; <input type='reset' name='button' value='nein'>";
        echo "</form>";
    }
    else {
        echo "Diese Kundennummer gibt es in der Datenbank nicht.";
        echo "<a href='aendern.html'> Bitte geben Sie eine gültige Kundennummer ein </a>";
    }
    
    @mysqli_close($db);
}
else{
    echo "<a href='aendern.html'> Bitte geben Sie eine Kundennummer ein. </a>";
}

?>
</body>
</html>