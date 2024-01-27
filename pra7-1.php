
<!-- a. Define a class with constructor and destructor. -->

<!-- practical7-1 -->
<!DOCTYPE html>
<html>
<head>
    <title>pr_7.1</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>PRIYANSH MASIYAVA (216090307029)</h2>
    <h2>===========================</h2>

<!-- Define a class with constructor and destructor. -->
<?php
class MyClass {
    private $name;

    public function __construct($name) {
        echo "Creating object... <br>";
        $this->name = $name;
    }

    public function hi() {
        echo "Hello, $this->name<br>";
    }

    public function __destruct() {
        echo "Destroying object...<br>";
    }
}

$obj = new MyClass("PRIYANSH");
$obj->hi();
unset($obj);


?>
    
</body>
</html>


