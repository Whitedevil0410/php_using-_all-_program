<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <h1>Page 2</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['hidden_variable'])) {
            $hidden_variable = $_POST['hidden_variable'];
            echo "<p>Received hidden variable: " . $hidden_variable . "</p>";
        }
    }
    ?>
    <a href="pra8-4.php">Go back to Page 1</a>
</body>
</html>
