<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Seashore Restaurant</title>
    <link rel="stylesheet" href="rstyles.css">
</head>
<body>
    <main>
        <section>
            <h2>Welcome <?php echo $_SESSION['login_user']; ?>!</h2>
            <p>You have successfully logged in.</p>
            <a href="logout.php">Logout</a>
        </section>
    </main>
</body>
</html>
