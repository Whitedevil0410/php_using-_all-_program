
<!-- Write a script to demonstrate a simple
interface. -->

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
     interface Vehicle {
    public function BMW();
    public function FERRAI();
}

class Car implements Vehicle {
    public function BMW() {
        echo "<h2> IT IS A BMW.</h2>";
    }

    public function FERRAI() {
        echo "<h2>IT IS A FERRAI.</h2>";
    }
}

class Motorcycle implements Vehicle {
    public function BMW() {
        echo "<h2>BMW IS LUXURY VEHICAL.</h2>" ;
    }

    public function FERRAI() {
        echo "<h2>FERRAI IS LUXURY SPORT VEHICAL .</h2>";
    }
}

// Create instances of the classes
$car = new Car();

$motorcycle = new Motorcycle();

// Start and stop the engines
$car->BMW();
$car->FERRAI();

$motorcycle->BMW();
$motorcycle->FERRAI();


?> 
</body>
</html>







