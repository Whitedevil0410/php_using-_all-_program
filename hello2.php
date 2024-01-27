<?php
$name = $_POST["name"];
$age = $_POST["age"];
$connection = mysqli_connect("localhost","root","","dip4");
if(!$connection)
{
    echo "Failed to connect";
}

else
{
    $q = 'insert into person (name, age) values ($name, $age)';
    $qu = mysqli_query($connection,$q);
    if($qu)
    {
        echo "Inserted values person";
    }

    else
    {
        echo "Failed to insert values person";
    }
}
?>