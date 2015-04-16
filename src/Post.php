<?php

namespace Namics\TopicOfTheWeek\Generator;

class Post
{
    private $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
