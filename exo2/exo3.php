<?php
$triangle = 20;
$ligne = 1;
$compteur = 0;
for($i=0;$i<$triangle;$i++)
{
    while($compteur != $ligne)
    {
        echo "*";
        $compteur++;
    }
    echo "\n";
    $compteur = 0;
    $ligne++;
}

?>