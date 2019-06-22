<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="creative, fashion, vocation, question, forum, shoe, bakers">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Taiwo">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Kalam|Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fa/css/all.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>creativesASK</title>
    <style>
        body{
            background: url('images/img.jpg') beige no-repeat;
            background-size: cover;
        }

        
    
    </style>
</head>
<body>
<?php  include('validationauthentication.php'); ?>

<?php
        // function to sanitize any value passed into it
        function sanitizeInput($data){
        // $data = trim(htmlspecialchars(addslashes($data)));
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = addslashes($data);

        return $data;
    } 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

        

        //$_REQUEST['name attribute'] sends information to the server
        //call the sanitizeInput() now to clean the user input before assigning it to  variable
        $email = sanitizeInput($_REQUEST['email']);
        $password = sanitizeInput($_REQUEST['password']);
        $fname = sanitizeInput($_REQUEST['firstname']);
        $lname = sanitizeInput($_REQUEST['lastname']);
        $password2 = sanitizeInput($_REQUEST['password2']);

        if (empty($email)) {
            $email_error = "<span class='text text-danger'>Email Address is required!</span>";
        }
        elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $email_error = "<span class='text text-danger'>Invalid Email Address</span>";
        }

        // validate password
        if (empty($password)) {
            $password_error = "<span class='text text-danger'>Password is required</span>";
           }
           //check passord length
        elseif (strlen($password) < 8) {
            $password_error = "<span class='text text-danger'>Your password is less than 8 characters!</span>";
        }

        // if both email error variable and password error variable are empty then create an object 
        // when the user input has been validated, sanitized with no error(validation)
        if (empty($email_error) && empty($password_error) ) {
            
            // create authentication class object and make use of login() method
            //the object at this point interacts with the db
            $loginobj = new Validation;

            $output = $loginobj->login($emailaddress, $password);            

        }
    }

    
?>


    <div class="container-fluid">
        <section class="bg-white mx-auto mt-5 w-50">
            <div class="row">
                <div class="col-md mt-3">
                    <a href="index.php"><img src="images/logo.png" alt="" class="img-fluid  m-auto d-block"></a> 
                    <h6 class="text-center text-muted font-italic">If you want the answer—ask the question.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-5">
                        <button type="button" class="btn btn-danger w-75 my-1 ml-4"> <i class="" aria-hidden="true"></i> Continue with Gmail</button>
                        <button type="button" class="btn btn-primary w-75 my-1 ml-4"><i class="fab fa-facebook ml-0 mr-3" aria-hidden="true"></i> Continue with Facebook</button>
                        <button id="signup-email" type="submit" class="btn btn-outline-wine w-75 my-1 ml-4">Sign Up with e-mail</button>
                    </div>
                </div>
                <div class="col-md-6 p-4">
                    <!--  -->
                    <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="form1" >
                        <p class="field-error"></p>
                        <div class="form-group">
                            <label hidden>First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname"  placeholder="FirstName" required>
                        </div>
                        <div class="form-group">
                            <label hidden>Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname"  placeholder="LastName">
                        </div>
                        <div class="form-group">
                            <label hidden>Email address</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail"><p class="email-error text text-danger"></p>
                            <?php //the email error variable holds a value echo/return variable value
                                if(isset($email_error)) {//if isset() function is not used, it will return an error
                                    echo $email_error;    // because the $email_error variable is not valid until it form is submitted                                } 
                                }?>
                        </div>
                        <div class="form-group">
                            <label hidden>Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password"><p class="password-error text text-danger"></p>
                            <?php //the password error variable holds a value echo/return variable value
                                if(isset($password_error)) {
                                    echo $password_error;
                                } ?>
                        </div>
                        <div class="form-group">
                            <label hidden>Confirm Password</label>
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="check" id="check">
                            <label>Remember Me</label>
                        </div>
                        <div class="button-bar mb-3">
                            <button id="login" type="submit" class="btn btn-wine">Login</button>
                            <button id="signup" type="submit" class="btn btn-wine">Sign Up</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <footer>
                <div class="row ">
                    <div class="col-md text-center p-1">
                        <div class="landing-footer">
                            <ul class="list-inline ">
                                <li class="list-inline-item">Privacy</li>
                                <li class="list-inline-item">Terms</li>
                                <li class="list-inline-item">Careers</li>
                                <li class="list-inline-item">Contact</li>
                                <li class="list-inline-item">&copy; creativesASK 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            
            

        </section>
       
    </div>


    <!-- jQuery -->
    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <!-- popper -->
    <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript"> 
    <?php include('script.js'); ?>
    </script>
    
</body>
</html>