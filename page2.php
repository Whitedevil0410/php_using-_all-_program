<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <h1>Page 2</h1>
    
    <?php
        if(isset($_GET['name']) && isset($_GET['email'])){
            $name = $_GET['name'];
            $email = $_GET['email'];

            echo "<p><b>Name: $name</p>";
            echo "<p><b>Email: $email</p>";
        } else {
            echo "<p>No data passed.</p>";
        }
    ?>
</body>
</html>
