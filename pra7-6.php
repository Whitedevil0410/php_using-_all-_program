
<!-- Write a script to demonstrate method
overriding. -->

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
 	 public function sound() {
    	echo "<h2>The animal makes a sound. </h2>";
  	}
}

	class Dog extends Animal {
  	public function sound() {
    	echo "<h2>The dog barks.</h2> ";
  	}
}

	class Cat extends Animal {
  	public function sound() {
    	echo "<h2>The cat meows.</h2> ";
  	}	
}

$animal = new Animal();
$dog = new Dog();
$cat = new Cat();


$animal->sound(); 
$dog->sound();    
$cat->sound();    

?> 

</body>
</html>



