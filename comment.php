<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
</head>
<body>
    <h2>Comment</h2>
    <form action="" method="post">
        <textarea name="comment" id="comment" placeholder="Comment"></textarea>
        <BUtton type="submit" name="submit">Post</BUtton>
    </form>
    <h2>Comments</h2>
    <?php
    $a=$_POST['comment'];
    echo $a;
    ?>
</body>
</html>