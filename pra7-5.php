
<!-- Write a script to demonstrate multilevel
inheritance. -->

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
    class Animal {
    public function eat() {
    	echo "<h2> IT IS Animal.</h2>";
        echo "<h3>-> I'm eating.</h3>";
    }
}

class Mammal extends Animal {
    public function run() {
    	echo "<h2> IT IS Mammal.</h2>";
        
        echo "<h3>-> I'm running.</h3>";
    }
}

class Dog extends Mammal {
    public function bark() {
    	echo "<h2> IT IS Dog.</h2>";

        echo "<h3>-> Woof woof!</h3>";
    }
}

$dog = new Dog();
$dog->eat();
$dog->run();
$dog->bark();


?>    
</body>
</html>


