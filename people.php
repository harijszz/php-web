<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black
        }

        th,
        td,
        tr {
            border: 1px solid black
        }
    </style>
</head>

<body>

    <?php

    $people = [
        [
            "name" => "Emils",
            "lname" => "Grinerts",
            "email" => "emilsgrinerts@inbox.lv",
            "programming" => "Java, PHP, Python"
        ],
        [
            "name" => "Karlis",
            "lname" => "Beidins",
            "email" => "k.beidins@gmail.com",
            "programming" => "None"
        ],
        [
            "name" => "Tomass",
            "lname" => "Silavs",
            "email" => "tomasssilavs1@gmail.com",
            "programming" => "Java, C++"
        ]

    ]
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Programming Languages</th>
        </tr>
        <?php foreach ($people as $person): ?>
            <tr>
                <td><?php echo $person["name"]; ?></td>
                <td><?php echo $person["lname"]; ?></td>
                <td><?php echo $person["email"]; ?></td>
                <td><?php echo $person["programming"]; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
    <a href="index.php">Back to main </a>

</body>

</html>