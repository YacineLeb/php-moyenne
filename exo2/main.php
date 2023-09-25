<?php
include ("statistique.php");
$tab = array(1500,4500,2200,1500,3300,1800,1700);

echo "La moyenne est de : ". moyenne($tab);
echo "\n";
echo "La médiane est de : ". medianee($tab);

//var_dump(trie($tab));
?>;