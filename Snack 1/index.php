<?php 
/* Snack 1 (visto a lezione)
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

    $arr_partite = [
        //partita 1
        [
            [
                'nome'		=> 'Olimpia Milano',
                'di_casa'	=> true,
                'punteggio'	=> 55
            ],
            [
                'nome'		=> 'Cantù',
                'di_casa'	=> false,
                'punteggio'	=> 60
            ],
        ],
        //partita 2
        [
            [
                'nome'		=> 'Bari',
                'di_casa'	=> false,
                'punteggio'	=> 80
            ],
            [
                'nome'		=> 'Napoli',
                'di_casa'	=> true,
                'punteggio'	=> 90
            ],
        ],
        //partita 3
        [
            [
                'nome'		=> 'Torino',
                'di_casa'	=> true,
                'punteggio'	=> 99
            ],
            [
                'nome'		=> 'Roma',
                'di_casa'	=> false,
                'punteggio'	=> 105
            ],
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack partite basket</title>
</head>
<body>
    
<?php
	$arr_length = count($arr_partite);
	for ($i = 0; $i < $arr_length ; $i++) {
		$partita = $arr_partite[$i];

		echo "<div>{$partita[0]['nome']} - {$partita[1]['nome']} | {$partita[0]['punteggio']}-{$partita[1]['punteggio']}</div>";
    }?>

</body>
</html>