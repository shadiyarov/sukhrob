<?php
$clubs = [
    'Manchester United' => ['David De Gea','Bruno Fernandes','Paul Pogba','Daniel James'],
    'Liverpool' => ['Yurgen Klopp'=>['Borussia Dortmung']],
    'Real Madrid',
    'Barcelona',
    'Inter Milan',
    'Juventus'
];

unset($clubs['2']);

$clubs[2] = 'Arsenal';
echo "<pre>";
//print_r($clubs['Manchester United'][1]);//Bruno Fernandes
//print_r($clubs['Liverpool']['Yurgen Klopp']['0']);//Borussia Dortmund
print_r($clubs);//unset removed Inter Milan and Arsenal added

