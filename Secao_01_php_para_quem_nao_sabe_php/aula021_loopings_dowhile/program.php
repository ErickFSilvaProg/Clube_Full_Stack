<?php

$names = ['Carlos','Antônio','Lucas'];
$a = 0;
$b = 0;


do {
    echo $names[$a] . "\n";
    $a++;
} while ($a < count($names));
echo "\n";


// 
while ($b < count($names)) {
    echo $names[$b] . "\n";
    $b++;
}
echo "\n";