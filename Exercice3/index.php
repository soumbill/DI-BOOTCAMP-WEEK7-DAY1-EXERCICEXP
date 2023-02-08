<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP-Exo3 | W7_D1</title>
</head>
<body>
    <h1>Exercise 3 : Sort An Ordered Integer</h1>
    <?php 
        class array_sort
        {
            public $myArray;
            
            public function __construct(array $mySort)
            {
                $this->myArray = $mySort;
            }
            public function orderSort()
            {
                $sorted = $this->myArray;
                sort($sorted);
                return $sorted;
            }
        }
        $sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
        print_r($sortarray->orderSort())."\n";
    ?>
</body>
</html>