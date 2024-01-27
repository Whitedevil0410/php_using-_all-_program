<!-- Write a script that uses the set attribute and get
attribute methods to access a class’s private
attributes of a class. -->

<!DOCTYPE html>
<html>
<head>
    <title>pr_7.2</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>PRIYANSH MASIYAVA(216090307029)</h2>
    <h2>===========================</h2>

<?php
class Person {
    private $name;
    private $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$person = new Person();
$person->setName("PRIYANSH");
$person->setAge(17);

echo "<h2>Name:</h2> " . $person->getName() . "<br>";
echo "<h2>Age: </h2>" . $person->getAge();
?>
    
</body>
</html>




