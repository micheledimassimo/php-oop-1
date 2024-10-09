<?php
    require_once __DIR__.'/classes/Movie.php';

    $pirates = new Movie('Pirates of The Caribbean', 'Gore Verbinski', 'Johnny Depp','en');
    $pirates->title = 'Pirates of The Caribbean';
    $pirates->director = 'Gore Verbinski';
    $pirates->mainActor = 'Johnny Depp';
    $pirates->language = 'en';


    $topGun = new Movie('Top Gun', 'Tony Scott', 'Tom Cruise', 'en');
    $topGun->title = 'Top Gun';
    $topGun->director = 'Tony Scott';
    $topGun->mainActor = 'Tom Cruise';
    $topGun->language = 'en';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 1</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        
        <header class="py-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            PHP OOP 1
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                 <?php
                    var_dump($pirates);
                    echo $pirates->title;
                    echo '<br>';
                    echo $pirates->director;
                    echo '<br>';
                    echo $pirates->mainActor;
                    echo '<br>';
                    echo $pirates->language;
                    echo '<br>';

                 ?>
                </div>
                <hr>
                <div class="row">
                 <?php
                    var_dump($topGun);
                    echo $topGun->title;
                    echo '<br>';
                    echo $topGun->director;
                    echo '<br>';
                    echo $topGun->mainActor;
                    echo '<br>';
                    echo $topGun->language;
                    echo '<br>';
                    echo $topGun->pippo();
                 ?>
                </div>
                <hr>
            </div>
        </main>

    </body>
</html>