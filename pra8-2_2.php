
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

        // Regular expression patterns
        $emailPattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
        $phonePattern = "/^[0-9]{10}$/";

        // Perform validation
        $errors = array();

        if(empty($name)){
            $errors[] = "Name is required";
        }

        if(empty($email)){
            $errors[] = "Email is required";
        } else if(!preg_match($emailPattern, $email)){
            $errors[] = "Invalid email format";
        }

        if(empty($phoneNumber)){
            $errors[] = "Phone number is required";
        } else if(!preg_match($phonePattern, $phoneNumber)){
            $errors[] = "Invalid phone number format";
        }

        // Display submitted data or errors
        if(empty($errors)){
            echo "<h2>TATA Employee Information:</h2>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Position:</strong> $position</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Phone Number:</strong> $phoneNumber</p>";


            echo "<p><strong>Salary:</strong> $salary</p>";
            echo "<p><strong>Department:</strong> $department</p>";
        } else {
            echo "<h2>Error:</h2>";
            foreach($errors as $error){
                echo "<p>$error</p>";
            }

        }
    }
?>

