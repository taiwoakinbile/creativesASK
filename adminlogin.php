<?php

$errorlist = array();
   
if (isset($_POST['signin']) && $_POST['signin'] == 'signin') {

    //isset($_POST['signup']) && $_POST['signup'] == 'Login'
    
    // Code here for login form 

    $email = $_POST['email'];
    $password = $_POST['password'];


    //validate email field
    if (empty($email)) {
        $errorlist['email'] = "<span class='text text-danger'>Email Address is required!</span>";
    }  
    elseif (!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
        $errorlist['email'] = "<span class='text text-danger'>Invalid Email Address</span>";
    }


    //validate password field
    if (empty($password)) {
        $errorlist['password'] = "<span class='text text-danger'>Password is required!</span>";
    }
    elseif (strlen($password) < 8) {
        $errorlist['password'] = "<span class='text text-danger'>Your password is less than 8 characters!</span>";
    }
    
    if (count($errorlist)== 0) {
        // create an object of user class and reference signup method
        $userobject = new User;
        $userobject -> login($email, $password);
    }

}
?>

<div class="login-form py-3 px-3 ">
    <form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">          
        <?php 
            if (isset($output)) {
            echo $output;
            }
        ?>                                                  

        <div class="form-group row">
            <label for="Email" class="col-md-12 col-form-label" hidden>Email</label>
            <div class="col-md-12">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" 
                value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>">
            </div>
        </div>
        <?php if (isset($errorlist['email'])) { echo $errorlist['email'];}?>

        <input type="hidden" name="signin" value="signin">

        <div class="form-group row">
            <label for="Password" class="col-md-12 col-form-label" hidden>Password</label>
            <div class="col-md-12">
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                <small><a href="#" class="text-dark">Fogotten Password?</a></small>
            </div>
        </div>   
        <?php if (isset($errorlist['password'])) { echo $errorlist['password'];}?>                                                            
        
        
        <div class="form-group row">
            <div class="col-sm">
                <button name="login" id="login" type="submit" class="btn btn-block btn-green text-uppercase font-weight-bold">Login</button>
            </div>
        </div>
    </form>
</div>


