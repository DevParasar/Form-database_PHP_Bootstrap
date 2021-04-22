<?php
include "dbConn.php"; 

if(isset($_POST['submit']))
{		
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $enrollYear = $_POST['enrollYear'];
    print_r($_POST);
    
    echo $query="INSERT INTO student(firstname,lastname,gender,city,phone,enrollyear) 
    VALUES ('$firstName', '$lastName', '$gender', '$city', '$phone', '$enrollYear')";
    
    $insert=$db->query($query);

    if(!$insert)
    {
        echo $db->error;
    }
    else
    {
        echo "Records added successfully.";
        header("location:all_records.php");
    }
}

mysqli_close($db); 
?>