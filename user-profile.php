        <?php 
        $pagetitle = 'Edit Profile';
        include('loginheader.php');
        
        $errordisplay = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //assign the variables to form input
        $userbio = $_REQUEST['userbio'];
         

        //sanitize the user input
        $userbio = sanitizeInput($userbio);
        

        echo "<pre>";
        echo print_r($_FILES);
        var_dump($_SESSION);
        echo "</pre>";

        //check if any of the user input field is empty 
        //validate product name field
        // if (isset($userbio) ) {
        // $errordisplay['productname'] = "<span class='text text-danger'>Product Name is required!</span>";
        // }


        //if all error variables are empty then create an object
        if(isset($userbio)){

            $userobj = new User;
            $output =  $userobj-> updateProfile($userbio);
        }


    }
        
        ?>
        <!-- body -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                      
                </div>   

                <div class="col-md-6">
                    <div class="card" >
                        <div class="card-body">
                        <?php if (isset($output)) { echo $output; }?>
                        <button type="button" class="btn btn-green btn-sm text-uppercase ml-1 float-right">Choose Interest</button>

                        <button type="button" class="btn btn-yellow btn-sm text-uppercase float-right">Add business</button>

                            <div>
                            <?php 
                                 if (empty($_SESSION['profilephoto'])) {
                                ?>
                                    <img src="images/female.jpg" alt="profile photo" class="img-fluid w-25 h-25"><br>
                                <?php
                                }else{
                                    ?>
                                    <img src="<?php echo $_SESSION['profilephoto'];?>" alt="<?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?>"  class="img-fluid w-50 h-50">
                                    <?php
                                }
                                ?>

                            </div>
                            <h5 class="card-title">Welcome, <?php echo $_SESSION['lastname']." ".$_SESSION['firstname'];?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['email']?></h6>                        
                            <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post" > 
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for=""></label>
                                        <input type="file" class="form-control-file" name="profilephoto" id="profilephoto"
                                        placeholder="" aria-describedby="fileHelpId">
                                    </div>
                                </div>   

                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" name="userbio" id="" rows="2"></textarea>
                                </div>

                                <?php include_once('chooseinterest.php')?>

                                <button id="login" type="submit" class="btn btn-primary btn-sm btn-block text-uppercase">UPDATE PROFILE</button>

                                
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
                

        <?php include('loginfooter.php'); ?>


        

    

    
    
   
    




  