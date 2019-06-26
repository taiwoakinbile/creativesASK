
<!-- footer -->


<footer class="pt-4 position-sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img src="images/img.png" alt="creativeasklogo">
                        </div>
                    </div>
                    <div class="offset-3 col-md-4">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>

                    
                </div>
                <div class="row mb-1">
                    <div class="col-md-2">
                        <p>About Us</p>
                    </div>
                    <div class="col-md-2">
                        <p>About Us</p>
                    </div>
                    <div class="col-md-2">
                        <p>About Us</p>
                    </div>
                    <div class="col-md-2">
                        <p>About Us</p>
                    </div>
                    <div class="col-md-2">
                        <p>About Us</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>About Us</p>
                    </div>
                    
                    <div class="col-md-3">
                        <p>About Us</p>
                    </div>
                    <div class="col-md-3">
                        <p>About Us</p>
                    </div>
                                   
                </div>
                
            </div>

            <div class="col-md-5">
                <!-- <div class="">                                                          Newsletter
                    <h5 id="footer-header" class="text-center text-capitalize">Subscribe For Updates!</h5>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="newsletter-email" placeholder="Email Address" aria-label="Email Address" aria-describedby="button-addon2">
                            <div class="input-group-append pb-3">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>       -->
                
            </div>
            
        </div>
    </div>    
    <hr class="mx-auto" width="90%">


    <div class="container-fluid">
        <div class="row">            
            <p class="col-md col-sm-12  text-center align-text-bottom"> creativesASK &nbsp; Copyright &copy; <?php echo date('Y'); ?>| &nbsp;All rights reserved &reg;.</p>  
        </div>
    </div>
    
</footer>


</div>

<!-- jQuery -->
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<!-- popper -->
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('.question').hide();
        $('#writequestion').click(function (e) { 
            // e.preventDefault();
            // alert('hey');
            

            // $('.question').load("writepost.php", {});
            $('.question').show();

            
            
        });

        // $('#submitpost').click(function (e) { 
        //     // e.preventDefault();
        //     alert('hey');
        //     // $('.showpost').load("viewpost.php", ,{});
            
        // });

        
        
    });
</script>
    
</body>
</html>
<?php ob_flush();?>