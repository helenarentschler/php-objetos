<?php

require_once "vendor/autoload.php";

use Cocur\Slugify\Slugify;

$slug = new Slugify();

echo $slug->slugify("Teste tranformaçao em url");