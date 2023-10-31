<?php 
    $conn = new mysqli("localhost", "root", "", "registrationAct2");
    $sqlSelect = "SELECT * FROM user";

    $result = $conn->query($sqlSelect);

    if(isset($_POST["passInput"])){
        if(isset($_POST["usernameInput"])){
            $username = $_POST["usernameInput"];
        };
        $pass = $_POST["passInput"];

        $accountFound = false;
        while($row = $result->fetch_assoc()){
            if($row["password"]  == $pass && $row["username"] == $username){
                $userArray = [$row["lname"], $row["minitial"], $row["lname"], $row["birthdate"], $row["age"], $row["gender"], $row["region"], $row["phone"], $row["email"], $row["username"]];
                $queryString = http_build_query(["data" => $userArray]);
                header("Location: dashboard.php?$queryString");
                
                $accountFound = true;
                break;
            }
            else{
                
            }
        }
        if(!$accountFound) {
            echo "Account not found";
        }
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
    <form action="" method="post">
        <input type="text" name="usernameInput" id="usernameInput" required>
        <input type="password" name="passInput" id="passInput" required>
        <button type="submit">Submit</button>
    </form>
    <a href="index.php">
        <button>
            Back
        </button>
    </a>
</body>
</html>