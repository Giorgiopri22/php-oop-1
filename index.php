<?php

class Movie
{
    public $title;
    public $genre;
    public $year;

    public function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getDetails()
    {
        return "Title: {$this->title}, Genres: {$this->genre}, Year: {$this->year}";
    }
}

$movie1 = new Movie('Fast and Furios','Azione', 2000);
$movie2 = new Movie('Interstellar', 'Fantascienza', 2014);


echo $movie1->getDetails() . "<br>";
echo $movie2->getDetails() . "<br>";


?>