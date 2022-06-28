<?php
// Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
$arr_posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>

<body>

    <?php

    // $posts_length = count($arr_posts);
    // for ($i = 0; $i < $posts_length; $i++) {
    //     $arr_posts = $posts[$i];

    //     echo "<div>{$posts[$i]['title']} {$posts[$i]['author']} {$posts[$i]['text']}</div>";
    // }


    // Estraiamo le chiavi numeriche dell'array
    $keys_arr_posts = array_keys($arr_posts);

    $n_posts = count($arr_posts);

    for ($i = 0; $i < $n_posts; $i++) {
        $key = $keys_arr_posts[$i] ?>
    <h1><?= $key ?><h1> <?php

    $posts_of_date = $posts[$key];
    $n_posts_of_date = count($posts_of_date);

    for ($j = 0; $j < $n_posts_of_date; $j++) { 
    $post = $posts_of_date[$j]; ?>

    <div>
    <h2><?= $post['title'] ?> </h2>
    <h3><?= $post['author'] ?> </h3>
    <p><?= $post['text'] ?> </p>
    </div> <?php

    }

    }



    ?>

</body>

</html>