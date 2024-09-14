<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="format.css" />
  </head>
  <body>
    <h1>&nbsp Wertetabelle 1</h1>
    <table>
        <tr>
            <td class="blue">x</td>
            <td class="blue">x<sup>2</sup></td>
        </tr>
    <?php
    $endwert = $_POST["tfEndwert"];
    for ($zahl = 1; $zahl <= $endwert; $zahl++)
    {
        $yWert = $zahl * $zahl;
        echo
        "<tr>
            <td>$zahl</td>
            <td>$yWert</td>
        </tr>";
    }
    ?>
    </table>
  </body>
</html>