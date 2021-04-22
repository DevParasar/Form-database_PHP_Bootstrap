<?php

include "dbConn.php"; 

$ID = $_GET['ID']; 

$del = mysqli_query($db,"delete from student where ID = '$ID'"); 

if($del)
{
    mysqli_close($db); 
    header("location:all_records.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>