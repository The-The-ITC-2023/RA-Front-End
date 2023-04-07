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
            <input type="email" name="email"><br>
            Password:<br>
            <input type="password" name="password"><br>
            Confirm Password:<br>
            <input type="password" name="cpassword"><br>
            <input type="submit" name="submit" value="Submit" id="submit" onclick="changeP()">
        </form>
    </body>
    
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        // $bio = filter_input(INPUT_POST, "biography", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($fname)) {
            $fnameErr = "Please enter your first name";
            echo "{$fnameErr}";
        }
        else if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $fnameErr = "First name must have only letters and white space";
            echo "{$fnameErr}";
        }
        else if(empty($lname)) {
            $lnameErr = "Please enter your last name";
            echo "{$passwordErr}";
        }
        else if(!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            $lnameErr = "Last name must have only letters and white space";
            echo "{$lnameErr}";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            echo "{$emailErr}";
        }
        else if($password < 8) {
            $passwordErr = "Password must be at least 8 characters long";
            echo "{$passwordErr}";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Password must contain at least 1 Number";
            echo "{$passwordErr}";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Password must contain at least 1 Capital Letter";
            echo "{$passwordErr}";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Password must contain at least 1 Lowercase Letter";
            echo "{$passwordErr}";
        }
        else if($password != $cpassword) {
            $passwordErr = "Passwords do not match";
            echo "{$passwordErr}";
        }
        else {
            $valid = "nice";
            echo "{$valid}";
        }


    }



?>