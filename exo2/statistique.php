<?php
function trie($tableau)
{
    sort($tableau, SORT_NATURAL | SORT_FLAG_CASE);
    return $tableau;
}
function medianee($tableau)
{
    $tableau = trie($tableau);
    $taille = count($tableau);
    if ($taille % 2 ==1)
    {
        $mediane = $tableau[($taille+1)/2-1];
    }
    else
    {
        $mediane = $taille/2;
        return $n = ($tableau[$mediane]+$tableau[$mediane-1])/2;
        //$mediane = $tableau[$n];
    }
    return $mediane;
}
function moyenne($tableau)
{
    $moy = 0;
    for ($i =0;$i<count($tableau);$i++)
    {
        $moy = $tableau[$i]+$moy;
    }

    return $moy/count($tableau);
}
/*$n = 0;
    for ($i=0;$i<$tableau;$i++)
    {
        for ($p=0;$p<$tableau;$p++)
        {

        }
    }*/
?>;