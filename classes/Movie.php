<?php
#[AllowDynamicProperties]
class Movie {
    public $title;
    public $director;
    public $mainActor;
    public $language;

    public function __construct($title, $director, $mainActor, $language)
    {
        $this->$title = $title;
        $this->$director = $director;
        $this->$mainActor = $mainActor;
        $this->$language = $language;
    }

    public function pippo() {
        return 'Nice Movie!';
    }
}