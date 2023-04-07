<html>
    <head>
        <title>Roommate Application</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        
        <form action="index.php" method="post">
            
            First Name:<br>
            <input type="text" name="fname"><br>
            Last Name:<br>
            <input type="text" name="lname"><br>
            Email:<br>
            <input type="text" name="email"><br>
            Picture:<br>
            <input type="image" name="picture"><br>
            Bio:<br>
            <input type="text" name="biography"><br>
            University:<br>
            <input type="text" name="education"><br>
            Major:<br>
            <input type="text" name="major"><br>
            <input type="submit" name="submit" value="Submit">

        </form>

    </body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $bio = filter_input(INPUT_POST, "biography", FILTER_SANITIZE_SPECIAL_CHARS);


        // Sanitize input
        if(empty($fname)) {
            echo "Please enter first name";
        }
        else if(empty($lname)) {
            echo "Please enter last name";
        }
        else if(empty($email)) {
            echo "Please enter email";
        }
        else if(empty($bio)) {
            echo "Please enter a short biography";
        }
        else {
            echo "NICE";
        }
    }
?>