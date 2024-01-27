<!DOCTYPE html>
<html>
<head>
    <title>pr_9.2</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>priyansh masiyava (216090307029)</h2>
    <h2>===========================</h2>

<?php
// Storing information in a cookie
$cookieName = "username";
$cookieValue = "priyansh masiyava";
$expiration = time() + (86400 * 2); // Cookie will expire after 2 days

setcookie($cookieName, $cookieValue, $expiration, "/");

// Retrieving information from a cookie
if (isset($_COOKIE[$cookieName])) {
    $storedValue = $_COOKIE[$cookieName];
    echo "Welcome back, " . $storedValue . "!";
} else {
    echo "Welcome!";
}
?>
</body>
</html>