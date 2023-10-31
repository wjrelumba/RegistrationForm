<?php
    $fname = $_POST["fname"];
    $minitial = $_POST["minitial"];
    $lname = $_POST["lname"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $year = $_POST["year"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $region = $_POST["region"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpass = $_POST["confirmpass"];

    $birthdate = "$month/$day/$year";

    echo $birthdate;

    $conn = new mysqli("localhost", "root", "", "registrationAct2");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sqlinsert = "INSERT INTO user (fname, minitial, lname, birthdate, age, gender, region, phone, email, username, password) VALUES ('$fname', '$minitial', '$lname', '$birthdate', '$age', '$gender', '$region', '$phone', '$email', '$username', '$password')";
    
    $insertForm = $conn->query($sqlinsert);

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if($result -> num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br>", "First Name: " .$row["fname"]. "<br>", 
            "Last Name: " .$row["lname"]. "<br>", 
            "Age: " .$row["age"]. "<br>", 
            "Region: " .$row["region"]. "<br>";
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receive Data</title>
</head>
<body>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
           window.location.href = "index.php"
        })
    </script>
</body>
</html>