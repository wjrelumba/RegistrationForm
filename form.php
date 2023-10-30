<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="receiveData.php" method="post">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="Juan Shanks"> <br>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" placeholder="Dela Cruz"> <br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age"> <br>
        <label for="region">Region:</label>
        <select name="region" id="region">
            <option value="">--- Choose Your Region ---</option>
            <option value="calabarzon">CALABARZON</option>
        </select> <br><br>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="JSDC"> <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" placeholder="Password"> <br>
        <label for="confirmpass">Confirm Password: </label>
        <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password"> <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>