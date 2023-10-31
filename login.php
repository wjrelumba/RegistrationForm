<?php 
    $conn = new mysqli("localhost", "root", "", "registrationAct2");
    $sqlSelect = "SELECT * FROM user";

    $result = $conn->query($sqlSelect);

    while($row = $result->fetch_assoc()){
        echo $row["password"];
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="dashboard.php">
        
    </form>
</body>
</html>