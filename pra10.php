<html>
<head>
</head>
<body>
<div>
    <form action = "#" method = "POST">
    Enter Empid: <input type = "text"  name="empid"><br><br>
    Enter Uname:<input type = "text"  name="uname"><br><br>
    Enter Pwd:<input type = "password"  name="pwd"><br><br>
    Enter Firstname:<input type = "text"  name="fname"><br><br>
    Enter Designation:<input type = "text"  name="desig"><br><br>
    Enter Salary:<input type = "text"  name="salary"><br><br>
    <input type = "submit" name = "save_btn" value = "Save">
    <button><a href = "#">View </a></button>
    </form>
</div>
<?php
include('dbconnemp.php');
//step 1. establish connection

    $hostname="localhost";
    $uname="root";
    $password="";

    $con=mysqli_connect($hostname,$uname,$password);
    /*echo gettype($con)."<br>";
    print_r($con);*/
    if($con)
    {
        // echo "Step 1 Performed Connection with MySQL is established<br>";
        //step 3 perform operation -> create database
        $query="create database empdetails";
    //     $sql=mysqli_query($con,$query) or die("Error in Query");
        
    //     /*echo gettype($sql)."<br>";
    //     print_r($sql);*/
    //     if($sql)
    //     {
    //         echo "Query executed database created<br>";
    //     }
    //     else
    //     {
    //         echo "Database not created<br>";
    //     }
    // }
    // else
    // {
    //     die("Failed To connect MySQL");
    // }

    // //step 4 close the coonection

    // mysqli_close($con);
    }

if (isset($_POST['save_btn'])){
    $empid = $_POST['empid'];
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $fname = $_POST['fname'];
    $desig = $_POST['desig'];
    $salary = $_POST['salary'];
    $query = "INSERT INTO empdetails VALUES ('$empid', '$uname', '$pwd', '$fname', '$desig', '$salary')";

    $data = mysqli_query($con,$query);
    if ($data)
    {
        echo "data saved";
        ?>
        <script type = "text/javascript">
            alert("Data Saved");
        </script>
        <?php
    }
    else
    {
        echo "try again";
        ?>
        <script type = "text/javascript">
            alert("Try Again");
        </script>
        <?php
    }
}
?>
</body>
</html>