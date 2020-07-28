<?php

define('FAV','Manchester');

$clubs = ['Real Madrid','Manchester','Barcelona','Liverpool'];

foreach ($clubs as $club){
    if ($club == FAV){
        echo "$club - My favorite club ". FAV;
        echo "<hr>";
    }else{
        echo "$club -  The best club";
        echo "<hr>";

    }
}
