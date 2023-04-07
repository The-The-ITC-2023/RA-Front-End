<html>
    <head>
        <title>Roommate Application</title>
        <link rel="stylesheet" href="styles/style.php">
    </head>
    <body>
        
        <form action="index.php" method="post">
            
            First Name:<br>
            <input type="text" name="fname"><br></input>
            Last Name:<br>
            <input type="text" name="lname"><br></input>
            Email:<br>
            <input type="text" name="email"><br></input>
            Picture:<br>
            <input type="image" name="picture"><br></input>
            Bio:<br>
            <input type="text" name="biography"><br></input>
            University:<br>
            <input type="text" name="education"><br></input>
            Major:<br>
            <input type="text" name="major"><br></input>
            <button type="submit" name="submit" value="Submit" id="submit"></button>
        </form>
        <p id ="result">I hate minorities</p>
        <script src="script.js"></script>
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
            $nice = "nice";
        }
    }



?>