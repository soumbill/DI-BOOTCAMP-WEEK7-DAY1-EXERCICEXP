<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP-Exo2 | W7_D1</title>
</head>
<body>
    <h1>Exercise 2 : Calculate The Factorial</h1>
    <?php 
        class Factoriel {
            public $number;

            public function calculFact($number){
                $multiple = 1;
                for($i = 1; $i <= $number; $i++){
                    $multiple *= $i;
                }
                return $multiple;
            }
        }
        $factDe = new Factoriel();

        $factDe -> number = 3;
        echo $factDe -> calculFact(3);
    ?>
</body>
</html>