<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once 'person.php';


    $person1 = new Person("Emils", "Grinerts", "emilsgrinerts@inbox.lv", "Java,PHP,Python");
    $person2 = new Person("Karlis", "Beidins", "k.beidins@gmail.com", "None");
    $person3 = new Person("Tomass", "Silavs", "tomsilavs@gmail.com", "C++,Python,Java");

    $people = [$person1, $person2, $person3];

    foreach ($people as $person) {
        echo $person->get_name() . "<br>";
        echo $person->get_lname() . "<br>";
        echo $person->get_email() . "<br>";
        echo $person->get_programming() . "<br> <br>";
    }

    ?>
</body>

</html>