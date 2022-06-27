<?php 
    function randomNum($min, $max, $nItems) 
    {
        $newArray = [];

        while (count($newArray) < $nItems) {
            $number = rand($min, $max);

            if (!in_array($number, $newArray)){
                $newArray[] = $number;
            }
        }

        return $newArray;
    }
    var_dump(randomNum(1, 100, 15));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    
</body>
</html>