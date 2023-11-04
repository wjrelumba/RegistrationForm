<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="DESIGN/styles.css" type="text/css">
</head>
<body class="registration-form-page">
    <div class="quote">"Hike more distance away from Heaven's Door."</div>
    <div class="author">- William Shakespeare</div>
    <div class="registration-form-container">
    <div class="registration-form">
    <h1 class="registration-form-title">REGISTRATION FORM</h1>
    <form action="receiveData.php" method="post">
        <!-- <label for="">Name: </label> -->
        <!-- <label for="fname">First Name: </label>
        <input type="text" name="fname" id="fname" placeholder="Juan Shanks" required> -->
        
        <!-- <label for="minitial">Middle Initial: </label>
        <input type="text" name="minitial" id="minitial" placeholder="D."> -->
    
        <!-- <label for="lname">Last Name: </label>
        <input type="text" name="lname" id="lname" placeholder="Dela Cruz" required> <br> -->

        <!-- <input type="text" name="fname" id="fname" placeholder="First Name" required>
        <input type="text" name="minitial" id="minitial" placeholder="Middle Initial">
        <input type="text" name="lname" id="lname" placeholder="Last Name" required> <br> -->

        <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="First Name" required>
        </div>

        <div class="form-group">
        <label for="minitial">Middle Initial:</label>
        <input type="text" name="minitial" id="minitial" placeholder="Middle Initial">
        </div>

        <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
        </div>

        <!-- <div class="form-group">
        <label for="birthday">Birthdate: </label>
        <input type="date" name="birthdate" id="birthdate">
        <input type="number" name="month" id="month" hidden>
        <input type="number" name="day" id="day" hidden>
        <input type="number" name="year" id="year" hidden> <br>
        </div>
        
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" readonly> <br> -->

        <div class="form-group">
        <label for="birthday">Birthdate: </label>
        <input type="date" name="birthdate" id="birthdate">
        <input type="number" name="month" id="month" hidden>
        <input type="number" name="day" id="day" hidden>
        <input type="number" name="year" id="year" hidden> <br>
        </div>

        <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" readonly>
        </div>

        <!-- <div class="form-group">
        <div class="column">
        <label for="birthday">Birthdate: </label>
        <div class="form-input">
        <input type="date" name="birthdate" id="birthdate">
        <input type="number" name="month" id="month" hidden>
        <input type="number" name="day" id="day" hidden>
        <input type="number" name="year" id="year" hidden> <br>
        </div>
        </div>
        <div class="form-input">
        <div class="column">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" readonly>
        </div>
        </div>
        </div>   -->


        <!-- <label for="gender">Gender:</label> <br>
        <input type="radio" name="gender" id="male" value="Male" required>
        <label for="male">Male</label> <br>
        <input type="radio" name="gender" id="female" value="Female" required>
        <label for="female">Female</label> <br>
        <input type="radio" name="gender" id="others" value="Others" required>
        <label for="others">Others</label> <br>
        <input type="text" name="gender" id="gender" disabled> <br> -->

        <div class="form-group">
        <label for="gender">Gender:</label> <nobr>
        <div class="gender-options">
        <label for="male"><input type="radio" name="gender" id="male" value="Male" required> Male</label>
        <label for="female"><input type="radio" name="gender" id="female" value="Female" required> Female</label>
        <label for="others"><input type="radio" name="gender" id="others" value="Others" required> Others</label>
        <input type="text" name="gender" id="gender" disabled>
        </div>
        </div>
<!-- 
        <label for="gender">Gender:</label> <nobr>
        <div class="gender-options">
        <label for="male"><input type="radio" name="gender" id="male" value="Male" required> Male</label>
        <label for="female"><input type="radio" name="gender" id="female" value="Female" required> Female</label>
        <label for="others"><input type="radio" name="gender" id="others" value="Others" required> Others</label>
        <input type="text" name="gender" id="gender" disabled>
        </div> -->

        <div class="form-group">
        <label for="region">Region:</label>
        <select name="region" id="region" required>
            <option value="">--- Choose Your Region ---</option>
            <option value="Ilocos Region">Region I - Ilocos Region</option>
            <option value="Cagayan Valley">Region II - Cagayan Valley</option>
            <option value="Central Luzon">Region III - Central Luzon</option>
            <option value="CALABARZON">Region IV-A - CALABARZON</option>
            <option value="MIMAROPA">Region IV-B - MIMAROPA</option>
            <option value="Bicol Region">Region V - Bicol Region</option>
            <option value="Western Visayas">Region VI - Western Visayas</option>
            <option value="Central Visayas">Region VII - Central Visayas</option>
            <option value="Eastern Visayas">Region VIII - Eastern Visayas</option>
            <option value="Zomboanga Peninsula">Region IX - Zomboanga Peninsula</option>
            <option value="Northern Mindanao">Region X - Northern Mindanao</option>
            <option value="Davao Region">Region XI - Davao Region</option>
            <option value="SOCCSKSARGEN">Region XII - SOCCSKSARGEN</option>
            <option value="Caraga">Region XIII - Caraga</option>
            <option value="National Capital Region">NCR - National Capital Region</option>
            <option value="Cordillera Administrative Region">CAR - Cordillera Administrative Region</option>
            <option value="Bangsamoro Autonomous Region in Muslim Mindanao">BARMM - Bangsamoro Autonomous Region in Muslim Mindanao</option>
        </select> <br>
        </div>

        <div class="form-group">
        <label for="phone">Phone Number (+63): </label>
        <input type="number" name="phone" id="phone" maxlength="999999999" required> <br>
        </div>

        <div class="form-group">
        <label for="email">Email Address: </label>
        <input type="email" name="email" id="email" required>
        <br><br>
        </div>

        <div class="form-group">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="Username"> <br>
        </div>

        <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" placeholder="Password"> <br>
        </div>

        <div class="form-group">
        <label for="confirmpass">Confirm Password: </label>
        <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password"> <br>
        </div>

        </div>

        <!-- <button type="button" id="checkerBtn">
        Check data
        </button> -->
        <div class="registration-form-button">
        <button type="submit" id="submitBtn">Submit</button>
    </form>
    
    <a href="index.php" class="back-btn">
        Go back
    </a>
        </div>
    <script type="text/javascript" src="formFunction.js">
    </script>
    </div>
</body>
</html>