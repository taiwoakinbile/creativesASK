<?php include_once('indexheader.php');
$pagetitle = 'Admin Login';
?>

        <section>
            <div class="row">
                    <div class="col-md-3">
                        <div class="side-bar">
                            <!-- <p></p>
                            <div class="blockquote">
                                <p class="mb-0 display-4">If you want the answer—ask the question.</p>
                                <p class="blockquote-footer">Lorii Myers</p>
                            </div>                             -->
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-5">
                        <div class="signin-login-box">
                            
                            <div class=" offset-2 col-md-6 col-sm">
                                <div>
                                    <span class="text-green font-weight-bolder" style="font-size: 2.5rem;" >Create Account</span>
                                    <p><a href="adminsignin.php" class="" style="font-size: 14px;">sign in to your account</a></p>
                                </div>
                                <!-- <button class="signup-button btn btn-block btn-lg btn-outline-yellow active">Sign Up</button> -->
                            </div>
                                <!-- <div class="col-md-4 col-sm">
                                    <button class="login-button btn btn-block btn-lg btn-outline-green">Login</button>
                                </div> -->
                          
                            <div class="row">
                                <div class="offset-2 col-md-8">
                                    <div>                                    
                                        <?php include_once('adminsignup.php');?>  
                                        <?php //include_once('login.php');?>    
                                            
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="side-bar">
                            <!-- <p></p>
                            <div class="blockquote">
                                <p class="mb-0 display-4">If you want the answer—ask the question.</p>
                                <p class="blockquote-footer">Lorii Myers</p>
                            </div>                             -->
                        </div>
                    </div>
            </div>
        </section>

<?php include_once('footer.php');?>       
        
