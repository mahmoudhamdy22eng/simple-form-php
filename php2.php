

<?php 

    // var_dump($_GET);
    echo "<br>";
    $male = "male";
    $female = "female";

// Field Checks
    for($i = 0; $i < sizeof($_GET); $i++){
        if($_GET["fname"] == null || $_GET["lname"] == null ){
            echo "Please enter your name <br><br>";
            break;
        } 
        elseif($_GET["address"] == null){
            echo "Please enter your address <br><br>";
            break;
        }
        elseif($_GET["country"] == null){
            echo "Please choose your country <br><br>";
            break;
        }
        elseif($_GET["gender"] == null){
            echo "Please choose your gender <br><br>";
            break;
        }
        elseif($_GET["UserName"] == null){
            echo "Please enter your username <br><br>";
            break;
        }
        elseif($_GET["Password"] == null){
            echo "Please enter your password <br><br>";
            break;
        }
        elseif($_GET["captcha"] == null ){
            echo "Please enter your captcha <br><br>";
            break;
        }
        elseif( $_GET["captcha"] != "G4H99L"){
            echo "Wrong captcha <br><br>";
            break;
        }

// Review Your Information
// Male
        elseif($_GET["gender"] === $male){
            echo "Thanks Mr. " . $_GET["fname"] . " " . $_GET["lname"]."<br>"."<br>";
            echo "Please review your information <br><br>";

            echo "Name:" . " " . $_GET["fname"] . " " . $_GET["lname"] . "<br>";
            echo "Address:" . " " . $_GET["address"] . "<br>". "<br>";


            $checkboxes = isset($_GET['checkbox']) ? $_GET['checkbox'] : $_GET['checkbox'];
            echo "Your Skills : " . " " ;
            foreach( $checkboxes  as $i){
                echo "  " . " (" . $i . ")" . " "; 
            };

            echo "<br>". "<br>";
            echo "Department:" . " " . $_GET["Department"] . "<br>";
            break;
        }
// Female   
        else if($_GET["gender"] === $female){
            echo "Thanks Mrs. " . $_GET["fname"] . " " . $_GET["lname"]."<br>"."<br>";
            echo "Please review your information <br><br>";

            echo "Name:" . " " . $_GET["fname"] . " " . $_GET["lname"] . "<br>";
            echo "Address:" . " " . $_GET["address"] . "<br>". "<br>";


            $boxes = isset($_GET['checkbox']) ? $_GET['checkbox'] : $_GET['checkbox'];
            echo "Your Skills : " . " " ;
            foreach( $boxes  as $i){
                echo " (" . $i . ")". " " . ""; 
            };

            echo "<br>". "<br>";
            echo "<div> Department: " . " " . $_GET["Department"] . "</div>" . "<br>";
            break;
        }
        
    }
    

?>