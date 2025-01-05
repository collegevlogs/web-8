<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['views']))
    $_SESSION['views']=1;
    else
    $_SESSION['views']++;
    ?>
    <h2>Page view Counter</h2>
    <p>This page has been viewed <?php echo $_SESSION['views']?> times </p>
    <p>Refresh the page to increment the page count </p>
</body>
</html>