<?php
// var_dump($_POST);



    $errorlist = array();

    // echo "<pre>";
    // print_r ($_POST);
    // echo "</pre>";
    
    
    

if (isset($_POST['register']) && $_POST['register'] == 'register') {
    // Code here for signup form


    // && isset($_POST['signup']) && $_POST['signup'] == 'Sign Up'
    
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //assign the user input to variables
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $lastname = sanitizeInput($lastname);
        $firstname = sanitizeInput($firstname);
        $email = sanitizeInput($email); 
        $password = sanitizeInput($password);
        $confirmpassword = sanitizeInput($confirmpassword);


        
        //server side validation
        if (empty($lastname) ) {
            $errorlist['lastname'] = "<span class='text text-danger'>Lastname is required!</span>";
        }
        // if (!isset($_POST['lastname']) ) {
        //     $lname_error = "<span class='text text-danger'>Lastname is required!</span>";
        // }
        //validate firstname field
        if (empty($firstname)) {
            $errorlist['firstname'] = "<span class='text text-danger'>Firstname is required!</span>";
        }


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


        //validate confirm password field
        
        if ($password !== $confirmpassword) {
            $errorlist['confirmpassword'] = "<span class='text text-danger'>Password does not match!</span>";
        }
        if (empty($confirmpassword)) {
            $errorlist['confirmpassword'] = "<span class='text text-danger'>Confirm Password is required!</span>";
        }

        //valiadate both 
    // if all error variables are empty then create an object i.e if there is no validation error
        //check if there is no validation error
        if (count($errorlist)== 0) {
            // create an object of user class and reference signup method
            $newuserobject = new User;
            $newuserobject -> signup($lastname, $firstname, $email, $password);
        }        
    
    
    

}
    
    

?>


<div class="signup-form py-5 px-3 ">
<?php 
    //check if there is no validation error
    $count_errorlist = count($errorlist);
    // var_dump($errorlist);
    if($count_errorlist > 0){
     ?>
     <div class="alert alert-warning">
    
        <?php 
            foreach ($errorlist as $key => $value) {
                echo "<div>".$value."</div>";
            }        
       ?>         
    </div>
    <?php 
    }
    
     ?>
    <form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-group row">
            <label for="Firstname" class="col-md-12 col-form-label" hidden>Firstname</label>
            <div class="col-md-12">
                <input type="text" class="form-control" name="firstname" id="'firstname'" placeholder="Firstname"
                 value="<?php if (isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="Lastname" class="col-md-12 col-form-label" hidden>Lastname</label>
            <div class="col-md-12">
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname"
                value="<?php if (isset($_POST['lastname'])) { echo $_POST['lastname']; } ?>">
            </div> 
        </div>
        
        <input type="hidden" name="register" value="register">
        

        <div class="form-group row">
            <label for="Email" class="col-md-12 col-form-label" hidden>Email</label>
            <div class="col-md-12">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="Password" class="col-md-12 col-form-label" hidden>Password</label>
            <div class="col-md-12">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
        </div>

        <div class="form-group row">
            <label for="Confirm Password" class="col-md-12 col-form-label" hidden>Confirm Password</label>
            <div class="col-md-12">
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm">
                <button name="signup" type="submit" class="btn btn-block btn-yellow text-uppercase font-weight-bold">Sign Up</button>
            </div>
        </div>
    </form>
</div>
<?php  ?>