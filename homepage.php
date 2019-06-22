<?php include('header.php'); ?>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#post-questionModal">Post a question</a>
                            <a class="dropdown-item"  id="" href="">Answer a Question</a>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <a class="btn  btn-outline-wine ml-3 " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-layer-group"></i> Categories
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Expert Article</a>
                            <a class="dropdown-item" href="business-list.php">Business List</a>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <a class=" ml-3 btn  btn-outline-wine " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-portrait"></i> Profile
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="user-profile.php">View Profile</a>
                          <a class="dropdown-item" href="index.php">Sign Out</a>
                        </div>
                    </div>

                </div>
                <form class="form-inline ml-3 my-lg-0">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <!-- <button  id="login" type="submit" class="btn btn-wine ml-3"><a href="">Login</a></button> -->
                    
                </form>
            </div>
        </nav>

        <section>
            <div class="row">
                <div class="col-md">
                    <div class="banner"></div>
                </div>
            </div>

        </section>

        <section class="">

        </section>

        <!-- body -->
        <section class="main mx-5 p-3 bg-main">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="card list-one" >
                        <div class="card-body">
                            <h6 class="card-title">Categories</h6>
                            <!-- <h6 class="card-subtitle mb-2 text-muted">C</h6> -->
                            <p class="card-text"><a href="" class=" ">Illustrators</a></p>
                            <p class="card-text"><a href="">Designers</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action timeline">
                            <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Post Header</h5>
                            
                                <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            
                            </div>
                            <p class="mb-1">If there is one thing true about passionate product people, is that all 
                                    of them hold a particular product in high regard. Chefs just love certain 
                                    food joints. Painters have their predilection for an Old Master. 
                                    Perhaps it was the app they could never drop, or the utility that saved 
                                    them a lot of time, or the service that arranged the perfect holiday. </p>
                            <small>Like <i class="fa fa-thumbs-up ml-1" aria-hidden="true"></i></small>
                            <small>Unlike <i class="fa fa-thumbs-down ml-1" aria-hidden="true"></i></small>
                        </div>
                        <div class="list-group-item list-group-item-action timeline">
                            <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                            </div>
                            <p class="mb-1">If there is one thing true about passionate product people, is that all 
                                    of them hold a particular product in high regard. Chefs just love certain 
                                    food joints. Painters have their predilection for an Old Master. 
                                    Perhaps it was the app they could never drop, or the utility that saved 
                                    them a lot of time, or the service that arranged the perfect holiday. </p>
                            <small>Like <i class="fa fa-thumbs-up ml-1" aria-hidden="true"></i></small>
                            <small>Unlike <i class="fa fa-thumbs-down ml-1" aria-hidden="true"></i></small>
                        </div>
                        <div class="list-group-item list-group-item-action timeline">
                            <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Post Content/ Answer</p>
                            <small>Like <i class="fa fa-thumbs-up ml-1" aria-hidden="true"></i></small>
                            <small>Unlike <i class="fa fa-thumbs-down ml-1" aria-hidden="true"></i></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <?php include('footer.php'); ?>

    </div>

       





    <!-- jQuery -->
    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <!-- popper -->
    <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.close').click(function () { 
                // e.preventDefault();
                $('.').hide();
            //hides a this post when the close button is closed
            });
            // when a post is submitted, a div .timeline should be created and and added to the center column of the main content
        });

    </script>
    
</body>
</html>