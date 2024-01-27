<!-- Create web pages to demonstrate passing
information using Session.(9-1) -->
<!-- index.php page -->
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

// Set a session variable
$_SESSION['message'] = '<b>Hello!';

?>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Session Demo</title>
</head>
<body>
    <h1>Session Demo - Index page</h1>
    <p><h2>A session variable has been create.</h2></p>
    <a href="process.php">Go to Process page</a>
</body>
</html>
