<html>
    <head>
        <title>Roommate Application</title>
        <link rel="stylesheet" href="styles/style.php">
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
            <button type="submit" name="submit" value="Submit" id="submit" onclick="changeP()"></button>
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

        // $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
        // Sanitize input
        if(empty($fname)) {
            echo "Please enter first name";
        }
        else if(empty($lname)) {
            echo "Please enter last name";
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
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