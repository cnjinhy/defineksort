<?php

/**
 * defineksort
 * @param type $input
 * @param type $seed
 * @return type
 */
function defineksort($input, $seed) {
    $tmp = array();
    foreach ($input as $key => $item) {
        $tmp[md5($key . '_' . $seed)] = $key;
    }
    ksort($tmp);
    $return = array();
    foreach ($tmp as $khash => $k) {
        $return[$k] = $input[$k];
    }
    return $return;
}