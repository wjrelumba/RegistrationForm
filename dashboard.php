<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="DESIGN/styles.css" type="text/css">
</head>
<body class="registration-form-page">
<img src="DESIGN/logo.png" alt="climb-logo" class="logo">
    <div class="quote">"When life gives you lemons, make lemonade."</div>
    <div class="author">- William Shakespeare</div>
    <div class="profile-form-container">
        <div class="registration-form">
            <h1 class="registration-form-title">ADVENTURER PROFILE</h1>
            
            <?php
            $startCount = 0;
            $titles = array("First Name", "Middle Initial", "Last Name", "Birthdate", "Age", "Gender", "Region", "Phone", "Email", "Username");

            foreach ($titles as $title) {
                $titleNoSpaces = strtolower(str_replace(' ', '', $title));
                echo '<div class="profile-group">';
                echo '<label for="' . $titleNoSpaces . '">' . $title . ':</label>';
                
                if (isset($_SESSION["userData"])) {
                    echo '<span id="' . $titleNoSpaces . '">' . $_SESSION['userData'][$startCount] . '</span>';
                    $startCount ++;
                } else {
                    echo '<span id="' . $titleNoSpaces . '">Data not available</span>';
                }
                
                echo '</div>';
            }
            ?>
            
        </div>
        <form action="logout.php">
            <button id="submitBtn">
                Log Out
            </button>
        </form>
    </div>

    <script>
    window.addEventListener('load', function () {
        // This code will run when the page is fully loaded
        // You can customize the notification message and style here
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.innerHTML = 'You have successfully signed in!';

        // Add your CSS styles to the notification
        notification.style.position = 'fixed';
        notification.style.top = '0';
        notification.style.left = '0';
        notification.style.right = '0';
        notification.style.backgroundColor = '#407282';
        notification.style.color = 'white';
        notification.style.padding = '10px';
        notification.style.textAlign = 'center';
        
        // Append the notification to the body of the page
        document.body.appendChild(notification);

        // Automatically hide the notification after 3 seconds
        setTimeout(function () {
            notification.style.display = 'none';
        }, 3000);
    });
</script>


</body>
</html>