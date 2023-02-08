<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP-Exo1 | W7_D1</title>
</head>
<body>
    <h1>Exercise 1 : Display A String</h1>
    <?php 
        //Declaration de la Classe
        class MyClass {

            public $myString;

            public function myFonction(){
                return $this -> myString;
            }
        }
        //creons une instance de la class MyClass qui est myObject
        $myObject = new myClass();

        $myObject -> myString = 'MyClass class has initialized !';
        echo $myObject -> myFonction();
    ?>
</body>
</html>