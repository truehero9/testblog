<?php

function d($data) {
    echo '<pre>' . print_r($data, true) . '</pre>';
}

function dd($data) {
    d($data);
    die;
}
