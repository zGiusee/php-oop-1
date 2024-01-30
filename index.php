<?php

// Definisco la classe Movie
class Movies
{
    public $title;
    public $year;
    public $genre;
    public $duration;

    function __construct($_title, $_year, $_genre, $_duration)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->duration = $_duration;
    }
};


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
            <div class="row">

            </div>
        </div>
    </main>
</body>

</html>