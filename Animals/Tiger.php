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
include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');

class Tiger extends Animal
{
    public function makeSound()
    {
        return 'Tiger: roarrrrr!';
    }
}
?>
</body>
</html>