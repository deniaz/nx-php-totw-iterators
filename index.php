<?php

namespace Namics\TopicOfTheWeek\Generator;

require_once __DIR__ . '/vendor/autoload.php';

$importer = new PostImporter();
foreach ($importer->run() as $post) {
    echo $post->getTitle() . "\n";
}
