<?php
$result = "";
$n = $_GET['multiple'];
$m = $_GET['num'];
for ($i=1;$i<=$n;$i++)
{
    for ($k = 1;$k<=$m;$k++)
    {
        $transmition = $i*$k;
        $result =$result.$transmition." ";
    }
    echo $result." \n ";
    echo "<br>";
    $result = "";
}
?>