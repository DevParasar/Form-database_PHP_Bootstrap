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
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9 col-xl-7 ">
            <div class="card border border-warning">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2">Student Registration Form</h3>

                <form action="insert.php" method="POST">
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
  
                      <div class="form-outline">
                        <input type="text" name="firstName" class="form-control" required/>
                        <label class="form-label" for="firstname">First Name</label>
                      </div>
  
                    </div>
                    <div class="col-md-6 mb-4">
  
                      <div class="form-outline">
                        <input type="text" name="lastName" class="form-control" required/>
                        <label class="form-label" for="lastname">Last Name</label>
                      </div>
  
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                        
                        <div class="form-outline">
                            <input type="text" name="city" class="form-control" required/>
                            <label class="form-label" for="city">City</label>
                        </div>
  
                    </div>
                    <div class="col-md-6 mb-4">
  
                        <div class="form-outline">
                            <input type="text" name="gender" class="form-control" required/>
                            <label class="form-label" for="gender">Gender</label>
                        </div>
  
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
  
                      <div class="form-outline">
                        <input type="enrollyear" name="enrollYear" class="form-control" required/>
                        <label class="form-label" for="enrollyear">Enrollent Year</label>
                      </div>
  
                    </div>
                    <div class="col-md-6 mb-4">
  
                      <div class="form-outline">
                        <input type="tel" name="phone" class="form-control" required/>
                        <label class="form-label" for="phone">Phone Number</label>
                      </div>
  
                    </div>
                  </div>      
                      <div class="mt-4">
                        <input class="btn btn-warning btn-lg" type="submit" name="submit" value="Submit" />
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
                    