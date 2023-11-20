<?php
    session_start();

    $_SESSION["userInput"] = [$_POST["fname"], $_POST["minitial"], 
    $_POST["lname"], $_POST["month"], $_POST["day"], $_POST["year"], 
    $_POST["age"], $_POST["gender"], $_POST["region"], $_POST["phone"], 
    $_POST["email"], $_POST["username"],
    $_POST["password"], $_POST["confirmpass"]];


    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["minitial"] = $_POST["minitial"];
    $_SESSION["lname"] = $_POST["lname"];
    $_SESSION["month"] = $_POST["month"];
    $_SESSION["day"] = $_POST["day"];
    $_SESSION["year"] = $_POST["year"];
    $_SESSION["age"] = $_POST["age"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["region"] = $_POST["region"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["confirmpass"] = $_POST["confirmpass"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="DESIGN/styles.css" type="text/css">
</head>
<body class="landing-page-bg">
    <h1>Your data has been saved!</h1>
    <h2>Do you want to go back and check your details?</h2>
    <a href="receiveData.php">
        <button id="submitBtn">Confirm</button>
    </a>
    <a href="form.php" class="back-btn">Go back</a>
</body>
</html>