
<!-- Write a script to demonstrate cloning of objects. -->
<!DOCTYPE html>
<html>
<head>
    <title>pr_7</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>PRIYANSH MASIYAVA (216090307029)</h2>
    <h2>===========================</h2>
<?php
class Person {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
}


$person1 = new Person("<h4> PRIYANSH </h4>");

// Cloning the object
$person2 = clone $person1;

// Modify the name of the cloned object
$person2->name = "<h4> MASIYAVA </h4>";

// Display
echo "<h2>Original: </h2>" . $person1->getName() . "<br>"; 
echo "<h2>Cloned:</h2> " . $person2->getName(); 

?>
</body>
</html>


