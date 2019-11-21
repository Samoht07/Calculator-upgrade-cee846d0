<?php
$plus = "+";
$min = "-";
$deel = "%";
echo "Welke operatie wil je uitvoeren? (+, -, %)" . PHP_EOL;
$A = readline(">");
if ($A != $plus && $A != $min && $A != $deel) {
    exit ($A . " " . "is geen geldige operatie");
}

echo "1e getal: " . PHP_EOL;
$B = readline(">");
if (is_numeric($B)){
}else {
    exit ($B . " " . "is geen getal");
}
    

echo "2e getal: "  . PHP_EOL;
$C = readline(">");
if (is_numeric($C)){
}else {
    exit ($C . " " . "is geen getal");
}


if ($A === "+") {
    echo "Uw resultaat is: " . $B += $C;
} elseif ($A === "-") {
    echo "Uw resultaat is: " . $B -= $C;
} elseif ($A === "%") {
    echo "Uw resultaat is: " . $B %= $C;
}


