<?php
    include("header.html");

?>

<html>
    <head>
        <title>Roommate Application</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <form action="index.php" method="post">
            Name:<br>
            <input type="text" name="name"><br>
            Email:<br>
            <input type="text" name="email"><br>
            Bio:<br>
            <input type="text" name="biography"><br>
            Education:<br>
            <input type="text" name="education"><br>
            <input type="submit" name="submit" value="Submit">
        </form>

    </body>
</html>