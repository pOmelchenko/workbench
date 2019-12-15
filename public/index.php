<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Say;

$say = new Say();

echo $say->hello('Pop');
