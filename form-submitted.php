<?php
$name = $lname = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Submitted data</h1>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>First Name: <?php echo $name; ?></p>
        <p>Last Name: <?php echo $lname; ?></p>
        <p>E-mail: <?php echo $email; ?></p>
    <?php else: ?>
        <p>No data has been submitted yet</p>
    <?php endif; ?>
</body>

</html>