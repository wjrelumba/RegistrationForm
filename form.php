<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "registrationAct2");

    if(isset($_SESSION["userData"])){
        header("Location: dashboard.php");
    };

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if($result -> num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<input type='text' class='usernames' name='usernames' value='$row[username]' hidden>";
        }
    };

    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="DESIGN/styles.css" type="text/css">
</head>
<body class="registration-form-page">
<img src="DESIGN/logo.png" alt="climb-logo" class="logo">
    <div class="quote">"Hike more distance away from Heaven's Door."</div>
    <div class="author">- William Shakespeare</div>
    <div class="registration-form-container">
    <div class="registration-form">
    <h1 class="registration-form-title">REGISTRATION FORM</h1>

    <?php if(isset($_SESSION["userInput"])): ?>
    <form action="receiveSession.php" method="post">
        <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="First Name" value="<?php echo $_SESSION["userInput"][0]; ?>" required>
        </div>

        <div class="form-group">
        <label for="minitial">Middle Initial:</label>
        <input type="text" name="minitial" id="minitial" placeholder="Middle Initial" value="<?php echo $_SESSION["userInput"][1]; ?>">
        </div>

        <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php echo $_SESSION["userInput"][2]; ?>" required>
        </div>

        <div class="form-group">
        <label for="birthday">Birthdate: </label>
        <input type="date" name="birthdate" id="birthdate">
        <input type="number" name="month" id="month" hidden>
        <input type="number" name="day" id="day" hidden>
        <input type="number" name="year" id="year" hidden> <br>
        </div>

        <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" value="<?php echo $_SESSION["userInput"][6]; ?>" readonly>
        </div>

        <div class="form-group">
        <label for="gender">Gender:</label> <nobr>
        <div class="gender-options">
        <label for="male"><input type="radio" name="gender" id="male" value="Male" required> Male</label>
        <label for="female"><input type="radio" name="gender" id="female" value="Female" required> Female</label>
        <label for="others"><input type="radio" name="gender" id="others" value="Others" required> Others</label>
        <input type="text" name="gender" id="gender" disabled>
        </div>
        </div>

        <div class="form-group">
        <label for="region">Region:</label>
        <select name="region" id="region" value="<?php echo $_SESSION["userInput"][8]; ?>" required>
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
        <input type="number" name="phone" id="phone" value="<?php echo $_SESSION["userInput"][9]; ?>" required> <br>
        </div>

        <div class="form-group">
        <label for="email">Email Address: </label>
        <input type="email" name="email" id="email" value="<?php echo $_SESSION["userInput"][10]; ?>" required>
        <br><br>
        </div>

        <div class="form-group">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $_SESSION["userInput"][11]; ?>"> <br>
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

        <div class="registration-form-button">
        <button type="submit" id="submitBtn">Submit</button>
    </form>
    <?php endif; ?>

    <?php if(!isset($_SESSION["userInput"])): ?>
    <form action="receiveSession.php" method="post">
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

        <div class="form-group">
        <label for="gender">Gender:</label> <nobr>
        <div class="gender-options">
        <label for="male"><input type="radio" name="gender" id="male" value="Male" required> Male</label>
        <label for="female"><input type="radio" name="gender" id="female" value="Female" required> Female</label>
        <label for="others"><input type="radio" name="gender" id="others" value="Others" required> Others</label>
        <input type="text" name="gender" id="gender" disabled>
        </div>
        </div>

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
        <input type="number" name="phone" id="phone" required> <br>
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

        <div class="registration-form-button">
        <button type="submit" id="submitBtn">Submit</button>
    </form>
    <?php endif; ?>
    
    <a href="index.php" class="back-btn">
        Go back
    </a>
        </div>
    <script type="text/javascript" src="formFunction.js">
    </script>
    </div>
</body>
</html>