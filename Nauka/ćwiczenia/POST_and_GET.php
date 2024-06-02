<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="POST_and_GET.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>

</html>

<?php
echo "{$_POST["username"]} <br>";
echo "{$_POST["password"]} <br>";


?>




//POST and GET are super global variables used to collect data from an HTML from
//data is sent to the file in the action attribute of <form>

    //$_GET - Data is appended to the url
    // NOT SECURE
    // char limit
    // Bookmark is possible w/ values
    // GET requests can be cached
    // better for search purpose

    //$_POST - Data is packaged inside the body of the HTTP requests
    // MORE SECURE
    // No data limit
    // cannot Bookmark
    // GET requests are not cached
    // Better for submitting credentials