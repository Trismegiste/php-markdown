<?php

require_once __DIR__ . '/vendor/autoload.php';

use Michelf\MarkdownTagFlavored;

$service = new MarkdownTagFlavored();
echo $service->transform(file_get_contents(__DIR__ . '/verif.md'));