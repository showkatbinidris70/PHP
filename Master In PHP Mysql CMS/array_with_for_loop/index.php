<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array with for loop</title>
</head>

<body>
    <?php
    $cars = array("Toyota", "BMW", "Corola", "Volvo");
    foreach ($cars as $value) {
        echo $value;
    }
    $length = count($cars);
    for ($i = 0; $i < $length; $i++) {
        echo $cars[$i];
    }
    ?>
</body>

</html>