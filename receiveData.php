<?php
    session_start();

    $fname = $_SESSION["fname"];
    $minitial = $_SESSION["minitial"];
    $lname = $_SESSION["lname"];
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $year = $_SESSION["year"];
    $age = $_SESSION["age"];
    $gender = $_SESSION["gender"];
    $region = $_SESSION["region"];
    $phone = $_SESSION["phone"];
    $email = $_SESSION["email"];
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $confirmpass = $_SESSION["confirmpass"];

    $birthdate = "$month/$day/$year";

    $phone = "(+63)" . $phone;

    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    echo $birthdate;

    $conn = new mysqli("localhost", "root", "", "registrationAct2");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sqlinsert = "INSERT INTO user (fname, minitial, lname, birthdate, age, gender, region, phone, email, username, password) VALUES ('$fname', '$minitial', '$lname', '$birthdate', '$age', '$gender', '$region', '$phone', '$email', '$username', '$hashedPass')";
    
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
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
           window.location.href = "index.php"
        })
    </script>
</body>
</html>

<?php
    session_destroy();
?>