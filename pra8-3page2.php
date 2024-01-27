<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <h1>Page 2</h1>
    
    <?php
        if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age']) ){
            $name = $_GET['name'];
            $email = $_GET['email'];
              $age = $_GET['age'];

            echo "<p><b>Name: $name</p>";
            echo "<p><b>Email: $email</p>";
               echo "<p><b>age: $age</p>";
        } else {
            echo "<p>No data passed.</p>";
        }
    ?>
</body>
</html>
