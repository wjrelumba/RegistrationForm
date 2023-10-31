<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="receiveData.php" method="post">
        <label for="">Name: </label> <br>
        <label for="fname">First Name: </label>
        <input type="text" name="fname" id="fname" placeholder="Juan Shanks" required>
        <label for="minitial">Middle Initial: </label>
        <input type="text" name="minitial" id="minitial" placeholder="D.">
        <label for="lname">Last Name: </label>
        <input type="text" name="lname" id="lname" placeholder="Dela Cruz" required> <br>
        <label for="birthday">Birth Date: </label> <br>
        <label for="month">Month: </label>
        <input type="number" name="month" id="month">
        <label for="day">Day: </label>
        <input type="number" name="day" id="day" disabled>
        <label for="year">Year: </label>
        <input type="number" name="year" id="year"> <br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age"> <br>
        <label for="gender">Gender:</label> <br>
        <input type="radio" name="gender" id="male" value="male" required>
        <label for="male">Male</label> <br>
        <input type="radio" name="gender" id="female" value="female" required>
        <label for="female">Female</label> <br>
        <input type="radio" name="gender" id="others" value="others" required>
        <label for="others">Others</label> <br>
        <input type="text" name="gender" id="gender" disabled> <br>
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
        <label for="phone">Phone Number (+63): </label>
        <input type="number" name="phone" id="phone" maxlength="999999999" required> <br>
        <label for="email">Email Address: </label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="JSDC"> <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" placeholder="Password"> <br>
        <label for="confirmpass">Confirm Password: </label>
        <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password"> <br>

        <button type="submit" id="submitBtn">Submit</button> <br>
    </form>
    <a href="index.php">
        <button>
            Back
        </button>
    </a>
    <script type="text/javascript" src="formFunction.js">
    </script>
</body>
</html>