<!-- Write a script to demonstrate method
overloading based on the number of arguments. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practical 7.7</title>
</head>
<body>
  <h2>===========================</h2>
    <h2>PRIYANSH MASIYAVA (216090307029)</h2>
    <h2>===========================</h2>
    
    <?php
    class Calculator {
        public function add($num1, $num2 = null) {
            if ($num2 === null) {
                return "Sum = " . $num1;
            }
            return "Sum = " . $num1 + $num2;
        }
    }
    
    $calc = new Calculator();
    echo $calc->add(10) . "<b><br>";
    echo $calc->add(20, 40) . "<b><br>";
    ?>
</body>
</html>