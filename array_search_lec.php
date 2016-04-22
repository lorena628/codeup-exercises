<?php

$nextFounders = [
    'Steve Jobs',
    'Avie Tevanian',
    'Joanna Hoffman',
    'Bud Tribble',
    'Susan Kare'
];

$indexOfBud = array_search('Bud Tribble', $nextFounders);

echo $indexOfBud . PHP_EOL;
echo $nextFounders[$indexOfBud] . PHP_EOL;