<?php

include "dbConn.php"; 

$ID = $_GET['ID']; 


$qry = mysqli_query($db,"select * from student where ID='$ID'"); 

$data = mysqli_fetch_array($qry); 

if(isset($_POST['update'])) 
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $enrollyear = $_POST['enrollyear'];
    print_r($_POST);

    $alt = "UPDATE `student` SET `firstname`='$firstname',`lastname`='$lastname',`gender`='$gender',`city`='$city',`phone`='$phone',`enrollyear`='$enrollyear' WHERE `ID`='$ID'";
    	
    $edit = mysqli_query($db,$alt);
	
    if($edit)
    {
        mysqli_close($db); 
        header("location:all_records.php"); 
        exit;
    }
    else
    {
        echo "Failed"; //mysqli_error();
    }    	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
</head>
<body>
    <section class="intro">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="cardborder border-primary">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2">Student Update Form</h3>
  
                <form method="POST">
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
  
                      <div class="form-outline">
                      <label class="form-label" >First Name</label>
                        <input type="text" name="firstname"  id="f1" value="<?php echo $data['firstname'] ?>" class="form-control" required/>
                       
                      </div>
  
                    </div>
                    <div class="col-md-6 mb-4">
  
                      <div class="form-outline">
                        <label class="form-label" >Last Name</label>
                        <input type="text" name="lastname" class="form-control" value="<?php echo $data['lastname'] ?>" required/>                        
                      </div>
  
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                        
                        <div class="form-outline">
                            <label class="form-label" >City</label>
                            <input type="text" name="city" class="form-control" value="<?php echo $data['city'] ?>" required/>
                        </div>
  
                    </div>
                    <div class="col-md-6 mb-4">
  
                        <div class="form-outline">
                            <label class="form-label" >Gender</label>
                            <input type="text" name="gender" class="form-control" value="<?php echo $data['gender'] ?>" required/>                            
                        </div>
  
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
  
                      <div class="form-outline">
                        <label class="form-label" >Enrollent Year</label>
                        <input type="enrollyear" name="enrollyear" class="form-control" value="<?php echo $data['enrollyear'] ?>" required/>                        
                      </div>
  
                    </div>
                    <div class="col-md-6 mb-4">
  
                      <div class="form-outline">
                        <label class="form-label" >Phone Number</label>
                        <input type="tel" name="phone" class="form-control" value="<?php echo $data['phone'] ?>" required/>                        
                      </div>
  
                    </div>
                  </div>      
                      <div class="mt-4">
                        <input class="btn btn-primary btn-lg" type="submit" name="update" value="Update" />
                      </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>
                    


