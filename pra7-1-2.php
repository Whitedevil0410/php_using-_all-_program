<!-- b. Create an object of a class and access its public
properties and methods. -->

<!-- practical-7.1 -->
<!DOCTYPE html>
<html>
<head>
    <title>pr_7-1,2</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>PRIYANSH MASIYAVA (216090307029)</h2>
    <h2>===========================</h2>

<?php

//Create an object of a class and access its public properties and methods.

class Person {
    public $name;
    public $age;
    
    public function hi() {

        echo "Hello, my name is $this->name and I am $this->age years old!";
    }
}

// Create a new Person object
$person = new Person();

// Set the name and age properties
$person->name = "PRIYANSH";
$person->age = 17;

// Call the hi method to display a hi message
$person->hi();
?>
   
</body>
</html>
