<?php
include ("statistique.php");
/*$tab = array(2200,1500,4500,1500,3300,1800,1700);
trie($tab);
for($i=0;$i<count($tab);$i++){
    echo $tab[$i];
    echo "\n";
}
echo "La moyenne est de : ". moyenne($tab);
//echo "\n";
//echo "La médiane est de : ". medianee($tab);

//var_dump(trie($tab));*/
$tab = array();
if (isset($_GET['note1']) && isset($_GET['note2']) && isset($_GET['note3']) &&
    isset($_GET['note4']) && isset($_GET['note5']) && isset($_GET['note6']) &&
    isset($_GET['note7'])) {

    $tab[] = $_GET['note1'];
    $tab[] = $_GET['note2'];
    $tab[] = $_GET['note3'];
    $tab[] = $_GET['note4'];
    $tab[] = $_GET['note5'];
    $tab[] = $_GET['note6'];
    $tab[] = $_GET['note7'];

    // Faites ce que vous voulez avec les valeurs récupérées ici
    // Par exemple, les afficher ou les traiter d'une certaine manière
    //echo "Note 1 : $tab[0], Note 2 : $tab[1], ..., Note 7 : $tab[6]";
    echo "\n";
} else {
    echo "Toutes les notes ne sont pas fournies.";
    }
trie($tab);
echo "La moyenne est de : ". moyenne($tab);
echo "\n";
echo "La médiane est de : ". medianee($tab);


?>;