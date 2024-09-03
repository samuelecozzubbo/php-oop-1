<?php
class Movie
{
    //propietà obbligatorie
    public $title;
    public $duration;
    public $release_year;
    //propietà non obbligatorie
    public $box_office;
    public $genre = [];

    //COSTRUTTORE
    function __construct($_title, $_duration, $_release_year)
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->release_year = $_release_year;
    }

    //METODI
    public function getMovieTitle()
    {
        return $this->title;
    }

    public function getMovieInfo()
    {
        return 'Durata:' . $this->duration . '<br>Anno di rilascio:' . $this->release_year;
    }
}
