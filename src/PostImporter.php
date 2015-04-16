<?php

namespace Namics\TopicOfTheWeek\Generator;

use Symfony\Component\DomCrawler\Crawler;

class PostImporter
{
    const CRAWL_URL = 'http://www.20min.ch/sport/fussball/';

    public function run()
    {
        $crawler = new Crawler(file_get_contents(self::CRAWL_URL));
        $crawler = $crawler->filter('.box h2');

        // Array Version
        //$posts = [];
        //foreach ($crawler as $teaser) {
        //    $post = new Post($teaser->nodeValue);
        //    $posts[] = $post;
        //}

        //return $posts;

        // Generator Version
        foreach ($crawler as $teaser) {
            yield new Post($teaser->nodeValue);
        }
    }
}
