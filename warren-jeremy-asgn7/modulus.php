<?php

$FH = fopen("lines.txt", "r");

$lineNumber = trim(fgets($FH));

while(!feof($FH)) {

    if($lineNumber % 2 == 0) {
        echo "Line: $lineNumber<br>";
    }
    $lineNumber = trim(fgets($FH));
}
