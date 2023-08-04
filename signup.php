<?php
$showAlert = false;
$showError = false; 
if($_SERVER["REQUEST_METHOD"] == "POST"){

  include 'partials/_dbconnect.php';
  $email = $_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  //$exists=false;
  //Check whether this email Exists
  $existSql = "SELECT * FROM `users` WHERE email = '$email'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  //To show that the email already exist even if the password  
  if($numExistRows > 0){
    //$exist = true;
    $showError = "Email Already Exists";
  }
  else{
    //$exist = false;
    if(($password == $cpassword)){
        $sql = "INSERT INTO `users` (`email`, `password`) 
        VALUES ('$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;  
        }
    }
    else{
        $showError = "Passwords do not match";
    }
  }
}
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>SignUp</title>
    </head>
    <body>
        <?php require '<partials/_nav.php' ?>
        <?php
        if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                
            </button>
            </div>';  
        }
        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> '.$showError.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    
                </button>
                </div>';  
            }
        ?>
        <div class="container my-4">
            <h1 class="text-center">Signup to our website</h1>
            <form action="/loginsystem/signup.php" method="post" style="display: flex;
            flex-direction: column;
            align-items: center;
            }">
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3 col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <small id="emailHelp" class="form-text">Your password must be 8-20 
                        characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </small>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                    <small id="emailHelp" class="form-text">Make sure to type the same passwords.</small>
                </div>
                
                <button type="submit" class="btn btn-primary col-md-6">SignUp</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
    
</html>

