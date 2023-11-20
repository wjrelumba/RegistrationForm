<?php 
    session_start();
    $conn = new mysqli("localhost", "root", "", "registrationAct2");
    $sqlSelect = "SELECT * FROM user";

    $result = $conn->query($sqlSelect);

    if(isset($_SESSION["userData"])){
        header("Location: dashboard.php");
    };
    if(!isset($_SESSION["userData"])){
        if(isset($_POST["passInput"])){
            if(isset($_POST["usernameInput"])){
                $username = $_POST["usernameInput"];
            };
            $pass = $_POST["passInput"];
    
            $accountFound = false;
            while($row = $result->fetch_assoc()){
                if($row["username"] == $username){
                    if(password_verify($pass, $row["password"])){
                        $_SESSION["userData"] = [$row["fname"], $row["minitial"], $row["lname"], $row["birthdate"], $row["age"], $row["gender"], $row["region"], $row["phone"], $row["email"], $row["username"]];
                        //$queryString = http_build_query(["data" => $userArray]);
                        header("Location: dashboard.php");
                        
                        $accountFound = true;
                        break;
                    }
                }
                else{
                    
                }
            }
            if(!$accountFound) {
                echo "Account not found";
            }
        };   
    };
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="DESIGN/styles.css" type="text/css">
</head>
<body>
    <h3 class="login-title">Account Login</h3>
    <div class="login-form">
    <?php if(!isset($_SESSION["userData"])): ?>
    <form action="" method="post">
        <div class="login-group">
        <input type="text" name="usernameInput" id="usernameInput" required placeholder="Username">
        </div>

        <div class="login-group">
        <input type="password" name="passInput" id="passInput" required placeholder="Password">
        </div>
        
        <button class="login-submit" type="submit">Submit</button>
    </form>
    <?php endif; ?>
    </div>
</body>
</html>