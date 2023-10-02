<?php
function triangle ($etoile)
{
    $k = "";
    $ligne = 1;
    $compteur = 0;
    for ($i = 0; $i < $etoile; $i++) {
        while ($compteur != $ligne) {
            echo "*";
            $k = $k."*";

            $compteur++;
        }
        echo "<script>console.log('$k');</script>";
        $k="";
        echo "<br>";
        $compteur = 0;
        $ligne++;
    }
}
$n = $_GET['ligne'];
echo triangle($n);
?>;