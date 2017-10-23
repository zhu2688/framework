<?php
//test
require_once '../vendor/autoload.php';

$hello = new Soeasy\Demo\HelloWorld('My First test');
echo $hello->hello();
