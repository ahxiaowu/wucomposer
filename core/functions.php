<?php
function p($arg){
    echo '<pre>';
    print_r($arg);
    echo '</pre>';
    exit;
}

function dd($arg){
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
    exit;
}