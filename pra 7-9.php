
<!-- //Write a script to demonstrate a simple abstract
class. -->
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
abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    abstract public function makeSound();
    
    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof........";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow........";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");


echo $dog->getName();
$dog->makeSound();
echo "<br>";

echo $cat->getName();
$cat->makeSound(); 
?> 
</body>
</html>







