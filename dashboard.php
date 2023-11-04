<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="DESIGN/styles.css" type="text/css">
</head>
<body class="registration-form-page">
    <div class="registration-form-container">
        <div class="registration-form">
            <h1 class="registration-form-title">ADVENTURER PROFILE</h1>
            
            <?php
            $startCount = 0;
            $userData = $_GET["data"];
            $titles = array("First Name", "Middle Initial", "Last Name", "Birthdate", "Age", "Gender", "Region", "Phone", "Email", "Username");

            foreach ($titles as $title) {
                $titleNoSpaces = strtolower(str_replace(' ', '', $title));
                echo '<div class="form-group">';
                echo '<label for="' . $titleNoSpaces . '">' . $title . ':</label>';
                
                if (isset($userData[$startCount])) {
                    echo '<span id="' . $titleNoSpaces . '">' . $userData[$startCount] . '</span>';
                    $startCount ++;
                } else {
                    echo '<span id="' . $titleNoSpaces . '">Data not available</span>';
                }
                
                echo '</div>';
            }
            ?>
            
        </div>
        <a href="index.php" class="back-btn">
            Go back
        </a>
    </div>
</body>
</html>
