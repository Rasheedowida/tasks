<?php
/* while  loop */
$i = 1;
while ($i <= 10) {
    echo $i++ . "\n";
}
echo "\n";

$a = 1;
while ($a <= 10):
    echo $a . "\n";
    $a++;
endwhile;

$b = 0;
do {
    echo $b . "\n";
} while ($b > 0);

/*do while  loop */
do {

    echo "c is ok" . "\n";

    /* process  */
} while (0);
$d = 1;
switch ($d) {
    case 0:
        echo "d equals 0";
        break;
    case 1:
        echo "d equals 1";
    case 2:
        echo "d equals 2";
        break;
}


/* switch  loop */


switch ($f = 5) {
    case 0:
        echo "e equals 0";
        break;
    case 1:
        echo "e equals 1";
        break;
    case 2:
        echo "e equals 2";
        break;
    default:
        echo "e is not equal to 0, 1 or 2" . "\n";
}





$d = 3;

switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "The week feels so long!";
        break;
    case 6:
    case 0:
        echo "Weekends are best!";
        break;
    default:
        echo "Something went wrong";
}
