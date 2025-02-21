#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use BracketChecker\BracketChecker;

if ($argc < 2) {
    fwrite(STDERR, "Usage: php run.php '<expression>'\n");
    exit(1);
}

$input = $argv[1];
$isValid = BracketChecker::validate($input);

echo $isValid ? "OK\n" : "Error\n";
exit($isValid ? 0 : 1);