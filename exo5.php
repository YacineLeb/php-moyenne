<?php
function factorielle($n)
{
    $p=1;
    $phrase = 0;
    while ($p < $n)
    {
        $phrase = $phrase+ $p*$n;
        $p++;
    }
    return $phrase;
}
function addition($n)
{
    $phrase = 0;
    while ($n > 0)
    {
        $phrase = $phrase+$n;
        --$n;
    }
    return $phrase;
}

$test = 4;
$final = factorielle($test);
$final2= addition($test);
echo $final;
echo "\n";
echo $final2;

?>