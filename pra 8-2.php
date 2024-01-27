<!-- Extend practical - 8(i) to validate user
information using regular expressions. -->
<!-- Create a web page using a form to collect employee information. -->
<!DOCTYPE html>
<html>
<head>
    <title>Employee Information Form</title>
</head>
<body>
    <h1>TATA Employee Information Form</h1>
    <form method="post" action="pra8-2_2.php">
        <label for="name"><b>Name:</b></label>
        <input type="text" name="name" required><br><br>
        
        <label for="email"><b>Email:</b></label>
        <input type="email" name="email" required><br><br>
        
        <label for="position"><b>Position:</b></label>
        <input type="text" name="position" required><br><br>
        
        <label for="age"><b>Age:</b></label>
        <input type="number" name="age" required><br><br>
        
        <label for="phone"><b>Phone Number:</b></label>
        <input type="tel" name="phone" required><br><br>
        
        <label for="salary"><b>Salary:</b></label>
        <input type="number" name="salary" required><br><br>
        
        <label for="department"><b>Department:</b></label>
        <input type="text" name="department" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
