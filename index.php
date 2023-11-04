<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the World</title>
    <link rel="stylesheet" href="DESIGN/styles.css" type="text/css">
</head>
<body class="landing-page-bg">
    <div class="landing-page-title">
        <h1>EXPLORE THE WORLD</h1>
        <h2>WITHIN YOUR FINGERTIPS</h2>
    <div class="landing-page-btn-div">
    <a href="form.php">
        <button type="button" class="landing-page-btn">
            Register
        </button>
    </a>
    <!-- <a href="login.php">
        <button type="button" class="landing-page-btn">
            Login
        </button>
    </a> -->
        <button type="button" class="landing-page-btn" id="showLogin">Login</button>
    </div>
    <div id="loginContainer" class="hidden">
        <?php include 'login.php'; ?>
    </div>
    <script src="script.js"></script>
</body>
</html>