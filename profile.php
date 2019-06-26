<?php 
$pagetitle = 'View Profile';

include('loginheader.php');
       ?>
        <!-- body -->
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-6">
                    <div>
                        <h3 class="text-green text-center">Your Posts</h3>
                    
                    </div>
                      <!-- show user interest here! -->
                </div> 

                 

                <div class="col-md-4">
                    <div class="card" style="min-height: 500px" >
                        <div class="card-body">
                        <?php if (isset($output)) { echo $output; }?>
                            <!-- show personalization choices and business info if uploaded -->

                            <div>
                            <?php 
                                if (empty($_SESSION['profilephoto'])) {
                                ?>
                                    <img src="images/female.jpg" alt="profile photo" class="img-fluid img-thumbnail w-25 h-25"><br>
                                <?php
                                }else{
                                    ?>
                                    <img src="<?php echo $_SESSION['profilephoto'];?>" alt="<?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?>"  class="img-fluid w-50 h-50">
                                    <?php
                                }
                                ?>

                            </div>
                            <h5 class="card-title">Welcome, <?php echo $_SESSION['lastname']." ".$_SESSION['firstname'];?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['bio'];?></h6>                 
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
                

        <?php include('loginfooter.php'); ?>


        

    

    
    
   
    




  