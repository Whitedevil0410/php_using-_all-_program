<!-- Write a script to demonstrate single inheritance. -->
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
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function ABC() {
    echo "<h2>The fruit is {$this->name} and the color is {$this->color}.</h2>";
  }
}

// apple is inherited from Fruit
class Apple extends Fruit {
  public function message() {
    echo "<h1>I am a fruit</h1><br> ";
  }
}
$Apple= new Apple("Apple", "red");
$Apple->message();
$Apple->ABC();
?>

    
</body>
</html>



