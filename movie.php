<?php

class Movie {
    public $title;
    public $director;
    public $yor;
    public $genre;
    public $restriction;
    public $age;
    public $visibile;

    public function __construct($_title, $_director, $_yor, $_genre, $_restriction, $_age){
        $this->title = $_title;
        $this->director = $_director;
        $this->yor = $_yor;
        $this->genre = $_genre;
        $this->restriction = $_restriction;
        $this->age = $_age;
        $this->visible = $this->setVisibility($this->age, $this->restriction);
    }
    //Establish if the the movie is visible or not according to the user age
    private function setVisibility($age, $restriction){
        if ($restriction && $age < 18){
            return false;
        } else {
            return true;
        };
    }

    public function showMovie() {
        echo "<li>";        
        echo "Title: {$this->title}";
        echo "Directed by: {$this->director}";
        echo "Released in: {$this->yor}";
        echo "Genre: {$this->genre}";
        echo "<li>";
    }

};
