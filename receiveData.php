<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $region = $_POST["region"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpass = $_POST["confirmpass"];

    $conn = new mysqli("localhost", "root", "", "registrationAct2");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sqlinsert = "INSERT INTO user (fname, lname, age, region, username, password) VALUES ('$fname', '$lname', '$age', '$region', '$username', '$password')";
    
    if($password === $confirmpass){
        echo "Password match!";
        $insertForm = $conn->query($sqlinsert);
    }else{
        echo "Password do not match!";
    }

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
        //document.addEventListener("DOMContentLoaded", () => {
         //   window.location.href = "form.php"
        //})
    </script>
</body>
</html>