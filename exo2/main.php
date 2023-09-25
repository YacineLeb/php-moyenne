<?php
include ("statistique.php");
$tab = array(2200,1500,4500,1500,3300,1800,1700);
trie($tab);
for($i=0;$i<count($tab);$i++){
    echo $tab[$i];
    echo "\n";
}
echo "La moyenne est de : ". moyenne($tab);
//echo "\n";
//echo "La médiane est de : ". medianee($tab);

//var_dump(trie($tab));
?>;