<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP-Exo4 | W7_D1</title>
</head>
<body>
    <h1> Exercise 4 : Calculate The Difference</h1>
    <?php 
        
             $dateTime1 = new DateTime("1981-11-03");
             $dateTime2 = new DateTime("2013-09-04");

            $difference = $dateTime1->diff($dateTime2);
            
            echo 'Difference: '.$difference->y.' Annees, ' 
                   .$difference->m.' Mois, ' 
                   .$difference->d.' Jours';
     
    ?>
</body>
</html>