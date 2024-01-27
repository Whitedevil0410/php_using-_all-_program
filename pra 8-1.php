<!-- Create a web page using a form to collect employee information. -->

<!DOCTYPE html>
<html>
<head>
    <title>Employee Information Form</title>
</head>
<body>
    <?php
        // Check if the form is submitted
        if(isset($_POST['submit'])){
            // Retrieve form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $position = $_POST['position'];
            $age = $_POST['age'];
            $phoneNumber = $_POST['phone'];
            $salary = $_POST['salary'];
            $department = $_POST['department'];

            // Display submitted data
            echo "<h2>TATA Employee Information:</h2>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Position:</strong> $position</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Phone Number:</strong> $phoneNumber</p>";
            echo "<p><strong>Salary:</strong> $salary</p>";
            echo "<p><strong>Department:</strong> $department</p>";
        }
    ?>
    
    <h1>TATA Employee Information Form</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name"><b>Name:</b></label>
        <input type="text" name="name" required><br><br>
        
        <label for="email"><b>Email:</b></label>
        <input type="email" name="email" required><br><br>
        
        <label for="position"><b>Position:</b></label>
        <input type="text" name="position" required><br><br>
        
        <label for="age"><b>Age:</b></label>
        <input type="number" name="age" required><br><br>
        
        <label for="phone"><b>Phone Number:</b></label>
        <input type="tel" name="phone" required><br><br>
        
        <label for="salary"><b>Salary:</b></label>
        <input type="number" name="salary" required><br><br>
        
        <label for="department"><b>Department:</b></label>
        <input type="text" name="department" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
