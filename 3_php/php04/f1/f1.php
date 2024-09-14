<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="format.css" />
    </head>
    <body>
        <h1>Live-Ticker</h1>
        <table>
            <tr>
                <td>
                    <img src="spyker_f1.jpg" width="300" height="200" />
                </td>
                <td>
                    <?php
                    $anzahl = $_POST["tfRunden"];
                    echo "<h3>Der Start von Sebastian Vettel ist gegelückt &nbsp; <br /> und nun fährt er...</h3>";
                    for ($runde = 1; $runde <= $anzahl; $runde++)
                    {
                        echo "Runde um Runde und <br/>";
                    }
                    ?>
                </td>
            </tr>
        </table>
        
    </body>
</html>