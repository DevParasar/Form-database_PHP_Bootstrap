<!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<form action="insert.php" method="POST" class="form-horizontal">
  <div class="container">
    <div class="row col-md-12 ">
      <!-- <div class="panel panel-primary"> -->
        <!-- <div class="panel-heading text-center"> -->

      First Name : <input type="text" name="firstName" placeholder="Enter First Name" Required>
      <br/>
      Last Name : <input type="text" name="lastName" placeholder="Enter Last Name" Required>
      <br/>
      Gender : <input type="text" name="gender" placeholder="Gender" Required>
      <br/>
      City : <input type="text" name="city" placeholder="City" Required>
      <br/>
      Phone : <input type="text" name="phone" placeholder="Phone" Required>
      <br/>
      Enroll Year: <input type="text" name="enrollYear" placeholder="Year of Enrollment" Required>
      <br/>
      <input type="submit" name="submit" value="Submit">
    </div>
  </div>
</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</html>