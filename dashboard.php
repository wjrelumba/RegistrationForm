<?php
    $userData = $_GET["data"];
    //$userDataArray = explode(",", $userData);
    
    foreach($userData as $userData){
        echo $userData, "<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <a href="index.php">
        <button>
            Log Out!
        </button>
    </a>
</body>
</html>