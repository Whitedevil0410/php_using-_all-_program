<!DOCTYPE html>
<html>
<head>
    <title>pr_9.1</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>priyansh masiyava (216090307029)</h2>
    <h2>===========================</h2>

<?php
session_start();

// Check if the session variable is set
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    // Clear the session variable after retrieving its value
    unset($_SESSION['message']);
}
else{
    $message = 'No message set in the session';
}
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
    <h1>Session Demo - Process page</h1>
    <p><h2>Session variable value is : <?php echo $message; ?></h2></p>
    <a href="index.php">Go back to Index page</a>
</body>
</html>
