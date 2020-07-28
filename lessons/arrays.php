<?php
//Arrays exercises
/*$phones = [
    'iphone'=>'iphone_x_max',
    'samsung'=>'gallaxy_9+',
    'nokia',
    'motorola'=>'razr_v3',
    'LG'
];

$countries = [
    'US'=>'new_york',
    'Italy'=>'milan',
    'Uzbekistan'=>'Samarkand'
];

//razr_v3 - new_york - javobi shunaqa chiqishi kk. Senga darsgacha vazifa
*/
/*$football_players = [
    'Ferdandes','Rashford','Fred','Ronaldo','Messi','Felix'
];
$key = array_search('Ronaldo',$football_players);
print_r($football_players[$key]);
*/
//Array-column
/*$countries = [
    'Uzbekistan'=>[
        'capital'=>'Tashkent',
        'language'=>'uzbek',
        'religion'=>'muslim'
    ],

    'Russia'=>[
    'capital'=>'Moscow',
    'language'=>'russian',
    'religion'=>'christian'
    ],

    'USA'=>[
        'capital'=>'Vashington DC',
        'language'=>'american-english',
        'religion'=>'christian'
    ],
];

$result = array_column($countries,'capital');
echo "<pre>";
print_r($result);
*/

//Array rand
$brands = ['apple','samsung','nike','adidas','starbucks'];
$result = array_rand($brands,'1');
echo "<pre>";
print_r($brands);
echo "<hr>";
echo $brands[$result];