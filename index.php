<?php

// Definisco la classe Movie
class Movies
{
    // Parametri della classe
    public $title;
    public $genre;
    public $duration;
    public $casa;
    public $year;
    public $voto;

    // Funzione construct
    function __construct($_title, $_genre, $_duration, Voto $_voto)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->voto = $_voto;
    }

    // Funzione per esercizio 
    public function setFilmYear($year)
    {
        if ($year > 2020) {
            $this->year = 'Film recente';
        } else {
            $this->year = 'Film non recente';
        }
    }
};

// Definisco la classe Voto di Movie
class Voto
{
    public $voto;
    public $casa;

    function __construct($_voto, $_casa)
    {
        $this->voto = $_voto;
        $this->casa = $_casa;
    }
};

$voto_movie_1 = new Voto(5, 'Movie DB');
$voto_movie_2 = new Voto(3.3, 'Movie DB');
$voto_movie_3 = new Voto(2, 'Movie DB');



// Aggiungo le istanze alla classe Movie
$movie_1 = new Movies('L ultima volta che siamo stati bambini', ['Commedia'], '1h 30min', $voto_movie_1);
$movie_2 = new Movies('Borg McEnroe', ['Sportivo', 'Thriller'], '1h 48min', $voto_movie_2);
$movie_3 = new Movies('Senza Freni', ['Azione', 'Horror'], '1h 31min', $voto_movie_3);

// Inserisco la data applicando la funzione
$movie_1->setFilmYear(2023);
$movie_1->setFilmYear(2017);
$movie_1->setFilmYear(2013);

// Inserisco le istanze in un array per ciclarle
$moviesArray = [
    $movie_1,
    $movie_2,
    $movie_3
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="row py-5">
                <?php foreach ($moviesArray as $movie) { ?>
                    <div class="col-4">
                        <div class="text-center">
                            <h1><?php echo $movie->title ?></h1>

                            <!-- Ciclo i generi dell'array -->
                            <h3><?php foreach ($movie->genre as $genres) { ?>
                                    <?php echo $genres ?>
                                <?php  } ?>
                            </h3>

                            <h5><?php echo  $movie->year . " Durata del film:" . $movie->duration ?></h5>

                            <h5 class="pt-2  "><?php echo "Casa:" . $movie->voto->casa ?></h5>
                            <h5><?php echo "Voto:" . $movie->voto->voto ?></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>