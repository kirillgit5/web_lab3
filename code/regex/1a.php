<?php

// 1

// 1.a
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a\S{2}b/', $str, $matches);
print_r($matches);

// 1.b

function cube($matches) {
    return $matches[0] ** 3;
}

$str = 'a1b2c3';
print_r(preg_replace_callback('/(\d+)/', 'cube', $str));