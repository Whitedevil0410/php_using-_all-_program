
<!-- Create two distinct web pages to demonstrate
information passing between them using URL - Get
method. -->

<!DOCTYPE html>
<html>
<head>
    <title>Page 1</title>
</head>
<body>
    <h1>STUDENT INFORMATION</h1>
    
    <form action="pra8-3page2.php" method="get">
        <label for="name"><b>Name:</label>
        <input type="text" name="name" required><br>
        
        <label for="email"><b>Email:</label>
        <input type="email" name="email" required><br>

        <label for="age"><b>age:</label>
        <input type="text" name="age" required><br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
