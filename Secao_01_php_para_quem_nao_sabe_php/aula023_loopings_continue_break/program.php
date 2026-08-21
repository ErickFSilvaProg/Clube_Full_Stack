<?php

$names = ['Alexandre','Maria','João'];


for ($i = 0; $i < count($names); $i++) {

    if ($i == 0) {
        continue;
    }

    echo $names[$i] . "\n";

    if ($i == 1) {
        break;
    }

}


foreach ($names as $key => $name) {

    if ($name == "Maria") {
        continue;
    }

    echo $name . "\n";

}