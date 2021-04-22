<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

<h2>Employee Details</h2>

<table class='table table-responsive' width="100%" id="notable">
  <thead>
  <tr>
    <td class="th-sm">Sr.No.</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Gender</td>
    <td>City</td>
    <td>Phone</td>
    <td>Enroll Year</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
</thead>
<tbody>
<?php

include "dbConn.php";

$records = mysqli_query($db,"select * from student");

while($data = mysqli_fetch_array($records))
{
?>

  <tr>
    <td><?php echo $data['ID']; ?></td>
    <td><?php echo $data['firstname']; ?></td>
    <td><?php echo $data['lastname']; ?></td>
    <td><?php echo $data['gender']; ?></td> 
    <td><?php echo $data['city']; ?></td> 
    <td><?php echo $data['phone']; ?></td> 
    <td><?php echo $data['enrollyear']; ?></td> 
    <td><a href="edit.php?ID=<?php echo $data['ID']; ?>">Edit</a></td>
    <td><a href="delete.php?ID=<?php echo $data['ID']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</tbody>
</table>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#notable').DataTable();

        } );
    </script>

</body>
</html>



