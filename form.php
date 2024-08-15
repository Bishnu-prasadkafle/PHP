<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Variable</title>
</head>
<body>
    <h1>Using form and variable</h1>
    <?php
    echo "Hello All";
    ?>
    <h2>Form</h2>
    <?php
    $age=21;
    echo $age;
    ?>
    <h2>Form and Variable</h2>
    <form action="" method="post">
        <input type="text" name="age" id="age" placeholder="Enter Your Age">
        <button type="submit" name="submit">Send</button>
    </form>
    <?php
    echo $_POST['age'];
    echo $a;
    ?>
</body>
</html>