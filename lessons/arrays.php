<?php
//Arrays exercises

$phones = [
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

echo "<pre>";
print_r($phones['motorola']. ' - ' .$countries['US']);