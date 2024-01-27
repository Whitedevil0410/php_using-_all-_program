<!DOCTYPE html>
<html>
<head>
    <title>pr_6.4</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>PRIYANSH MASIYAVA (216090307029)</h2>
    <h2>===========================</h2>
    <?php
        // Get the current timestamp
        $time = time();

        // Display the current date and time in different formats
        echo "Current timestamp: $time<br>";
        echo "Current date and time: " . date('Y-m-d H:i:s', $time) . "<br>";
        echo "Current date: " . date('d/m/Y', $time) . "<br>";
        echo "Current time: " . date('H:i:s', $time) . "<br>";
        echo "Current day of the week: " . date('l', $time) . "<br>";

    ?>
    
</body>
</html>
