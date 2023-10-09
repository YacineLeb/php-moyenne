<?php
$tab = [12,15,9];

function baba($baba){
    $moyenne = 0;
    for ($i =0;$i<count($baba);$i++)
    {
        $moyenne = $baba[$i]+$moyenne;
    }

    return $moyenne/count($baba);

}
echo "Votre moyenne est de : "+ baba($tab);
?>;