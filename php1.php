<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    


    <form action="php2.php" method="GET" class="container">
        <!-- first name -->
        <br><div>
            <label for="fname">First Name : </label>
            <input type="text" name="fname">
        </div><br>
        
        <!-- last name -->
        <div>
            <label for="lname">Last Name : </label>
            <input type="text" name="lname">
        </div><br>
        
        <!-- address -->
        <div style="display: flex;">
            <label for="address" class=" address">Address : </label>
            <textarea  rows="5" cols="50" name="address" ></textarea>
        </div><br>
        
        <!-- select country -->
        <div>
            <label for="country" class="country">Country : </label>    
            <select name="country" >
                <option disabled selected>Select Country</option>
                <option value="Cairo">Cairo</option>
                <option value="Asyut">Asyut</option>
                <option value="Giza">Giza</option>
            </select>
        </div><br>
        
        <!-- gender -->
        <br><div>
            <label for="gender" class="gender">Gender : </label>
            <input type="radio" name="gender" id="male" value="male">
                                        <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" class="female">
                                        <label for="female">female</label>
        </div><br>
        
        <!-- skills -->
        <br><div>
            <label for="skills" style="margin-right: 40px;">Skills : </label>
            <input type="checkbox" name="checkbox[]" value="PHP" id="PHP"> 
                            <label for="PHP" class="skills"> PHP </label>

            <input type="checkbox" name="checkbox[]" value="Angular" id="Angular" style="margin-left: 20px;" > 
                            <label for="Angular" class="skills"> Angular </label><br><br>

            <input type="checkbox" name="checkbox[]" value="MySQL" id="MySQL" class="skills1"> 
                            <label for="MySQL" class="skills"> MySQL </label>

            <input type="checkbox" name="checkbox[]" value="Laravel" id="Laravel" > 
                            <label for="Laravel" class="skills"> Laravel </label>
        </div><br>
        
        <!-- username -->
        <br><div>
            <label for="UserName">Username : </label>
            <input type="text" name="UserName">
        </div><br>
        
        <!-- password -->
        <div>
            <label for="Password" style="margin-right: 5px;">Password : </label>
            <input type="text" name="Password">
        </div><br>
        <!-- department -->
        <br><div>
            <label for="Department">Department : </label>
            <input type="text" name="Department"  value="OpenSource">
        </div><br>
        
        <!-- captcha -->
        <br>
        <div class="container" >
            <div class="container " >
            <label for="captcha" class="container " style="text-align: center;" >
                G4H99L    <p style="color: red;">Please insert the code in the below box</p> 
                <input type="text" name="captcha" >
            </label>
            </div><br>
        </div>
        
        <!-- submit and reset -->
        <div class="container"  style="text-align: center; margin-bottom: 20px;">
        <input type="submit" class="submit">
        <input type="reset" class="reset">
        </div>
        
    </form>
</body>
</html>