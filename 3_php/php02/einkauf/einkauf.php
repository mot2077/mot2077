<DOCTYPE html>
<html>
    <body>
        <?php
        /*Eingabe*/
        $artikel1 = 22.5;
        $artikel2 = 12.3;
        $artikel3 = 5.2;
        $ust = 19;
        $e = "Euro";

        /*Verarbeitung*/
        $netto = $artikel1 + $artikel2 + $artikel3;
        $brutto = $netto * (1 + $ust / 100);
        
        /*Ausgabe*/
        echo "Artikel1: $artikel1 $e <br />";
        echo "Artikel1: $artikel2 $e <br />";
        echo "Artikel1: $artikel3 $e <br /> <br />";
        echo "Nettosumme: $netto $e <br />";
        echo "Umsatzsteuer: $ust % <br />";
        echo "Bruttosumme: $brutto $e";
        ?>
    </body>
</html>