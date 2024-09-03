<?php
class Movie
{
    //propietà obbligatorie
    public $title;
    public $duration;
    public $release_year;
    public $genre = [];
    //propietà non obbligatorie
    public $box_office;


    //COSTRUTTORE
    function __construct($_title, $_duration, $_release_year, $_genre = [])
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->release_year = $_release_year;
        $this->genre = $_genre;
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

    public function printMovieGenre()
    {
        $list = '<ul>';
        foreach ($this->genre as $single_genre) {
            $list .= "<li>$single_genre</li>";
        }
        $list .= '</ul>';
        echo $list;
    }
}
