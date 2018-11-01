<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include 'Animals/Chicken.php';
include 'Animals/Tiger.php';
include 'Fruit/Apple.php';
include 'Fruit/Orange.php';
echo '---Animals <br>';
$animals[0] = new Tiger();
$animals[1] = new Chicken();
foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . '<br>';
    }
}
echo '---Fruits <br>';
$fruits[0] = new Apple();
$fruits[1] = new Orange();
foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}
?>
</body>
</html>