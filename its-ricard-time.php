<?php
$nbrRicard = 0;

do {
    $nbrRicard ++;
    if($nbrRicard == 7)
    {
        break;
    }
    echo "Come on ricard number $nbrRicard\n";
    if ($nbrRicard == 3)
    {
        echo "I'll have to stop soon!\n";
    }
    if($nbrRicard ==5)
    {
        echo "I am no longer very fresh ...\n";
    }

}while ($nbrRicard <= 7);
?>