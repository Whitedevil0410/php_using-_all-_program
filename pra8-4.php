<!-- Create two different web pages to demonstrate
information passing between web pages using
Hidden variables – Post method. -->

<!DOCTYPE html>
<html>
<head>
    <title>Page 1</title>
</head>
<body>
	
    <h1>Page 1</h1>
    <form method="post" action="pra8-4R.php">
        <input type="hidden" name="hidden_variable" value="Hello, Page 2!">
        <input type="submit" value="Go to Page 2">
    </form>
</body>
</html>
