<html>
    <head>
        <title>Edit Account</title>

    </head>
    <body>
        <form action="moreInfo.php" method="post">
            
            <div class="container">
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" value="female">Female <br>
                <input type="radio" name="gender" value="male">Male <br>
                <input type="radio" name="gender" value="other">Other <br>
            </div>

            <div class="container">
                
            </div>
           
            Description: Tell us about yourself! <br>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea> <br>
            University <br>
            <input type="text" name="university"> <br>
            Major <br>
            <input type="text" name="major"> <br>

            <div class="preferences-container">
                <label for="clean">How do you like your room to be clean?</label><br>
                <select name="clean" id="clean">
                    <option value="">Select Option</option>
                    <option value="messy">Messy</option>
                    <option value="little messy">A little messy</option>
                    <option value="medium">Medium</option>
                    <option value="little neat">A little neat</option>
                    <option value="neat">Neat</option> 
                </select>
            </div>
            <div class="preferences-container">
                <label for="smoking">Do you smoke?</label><br>
                <select name="smoking" id="smoking">
                    <option value="">Select Option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="preferences-container">
                <label for="drugs">What is your opinion towards drugs?</label><br>
                <select name="drugs" id="drugs">
                    <option value="">Select Option</option>
                    <option value="uncomfortable">Uncomfortable</option>
                    <option value="indifferent">Indifferent</option>
                    <option value="tried">I have tried them</option>
                    <option value="comfortable">Comfortable</option>
                </select>
            </div>
            <div class="preferences-container">
                <label for="sleep">On weekdays, at what times do you typically go to sleep?</label><br>
                <select name="weekdaySleep" id="sleep">
                    <option value="">Select Option</option>
                    <option value="8-10">8pm - 10pm</option>
                    <option value="10-12">10pm - Midnight</option>
                    <option value="12+">Past Midnight</option>
                </select>
            </div>
            <div class="preferences-container">
                <label for="sleep">On weekends, at what times do you typically go to sleep?</label><br>
                <select name="weekendSleep" id="sleep">
                    <option value="">Select Option</option>
                    <option value="8-10">8pm - 10pm</option>
                    <option value="10-12">10pm - Midnight</option>
                    <option value="12+">Past Midnight</option>
                </select>
            </div>
            <div class="preferences-container">
                <label for="noise">How loud/quiet would you like your environment to be?</label><br>
                <select name="noise" id="noise">
                    <option value="">Select Option</option>
                    <option value="very loud">Very loud</option>
                    <option value="loud">Loud</option>
                    <option value="neutral">Neutral</option>
                    <option value="quiet">Quiet</option>
                    <option value="silent">Silent</option>
                </select>
            </div>
            <div class="preferences-container">
                <label for="pets">Are you comfortable with having pets?</label><br>
                <select name="pets" id="pets">
                    <option value="">Select Option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>

    </body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if(isset($_POST["submit"])) {
            $description = null;
            $university = null;
            $major = null;
            $clean = null;
            $smoke = null;
            $drugs = null;
            $weekdaySleep = null;
            $weekendSleep = null;
            $noise = null;
            $petPreference = null;

            if(isset($_POST["gender"])) {
                $gender = $_POST['gender'];
            }
            else {
                $genderErr = "Please select an option for gender<br>";
                echo "{$genderErr}";
            }

            if(empty($_POST["desc"])) {
                $descErr = "Please write a description about yourself<br>";
                echo "{$descErr}";
            }
            else if(strlen($_POST["desc"]) > 500) {
                $descErr = "Description too long. 500 characters max.";
                echo "{$descErr}";
            }
            else {
                $description = $_POST["desc"];
            }

            if(empty($_POST["university"])) {
                $uniErr = "Please enter your university<br>";
                echo "{$uniErr}";
            }
            else {
                $university = $_POST["university"];
            }

            if(empty($_POST["major"])) {
                $majorErr = "Please enter your major<br>";
                echo "{$majorErr}";
            }
            else {
                $major = $_POST["major"];
            }

            if(empty($_POST["clean"])) {
                $Err = "Please select answer for cleanliness<br>";
                echo "{$Err}";
            }
            else {
                $clean = $_POST["clean"];
            }

            if(empty($_POST["smoking"])) {
                $Err = "Please select answer for smoking<br>";
                echo "{$Err}";
            }
            else {
                $smoke = $_POST["smoking"];
            }

            if(empty($_POST["drugs"])) {
                $Err = "Please select answer for drugs<br>";
                echo "{$Err}";
            }
            else {
                $drugs = $_POST["drugs"];
            }

            if(empty($_POST["weekdaySleep"])) {
                $Err = "Please select answer for weekday sleeping habits<br>";
                echo "{$Err}";
            }
            else {
                $weekdaySleep = $_POST["weekdaySleep"];
            }

            if(empty($_POST["weekendSleep"])) {
                $Err = "Please select answer weekend sleeping habits<br>";
                echo "{$Err}";
            }
            else {
                $weekendSleep = $_POST["weekendSleep"];
            }

            if(empty($_POST["noise"])) {
                $Err = "Please select answer for noise preference<br>";
                echo "{$Err}";
            }
            else {
                $noise = $_POST["noise"];
            }

            if(empty($_POST["pets"])) {
                $Err = "Please select answer for pet preference<br>";
                echo "{$Err}";
            }
            else {
                $petPreference = $_POST["pets"];
            }
        }
        
    }


    
?>