<?php include('loginheader.php'); ?>
                </div>  
                    <div class="dropdown">
                        <a class="btn  btn-outline-wine ml-3 " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-layer-group"></i> Categories
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <!-- <a class="dropdown-item" href="#">Expert Articles</a> -->
                            <a class="dropdown-item" href="business-list.php">Business List</a>
                        </div>
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
                <button  id="login" type="submit" class="btn btn-wine ml-3"><a href="landing.php">Join</a></button>
                
            </form>
        </nav>

        <section>
            <div class="row">
                <div class="col-md">
                    <div class="banner">
                            <h1 class=" text-center text-uppercase heading pt-5"><i class="fa fa-list" aria-hidden="true"></i> Business List</h1>
                    </div>
                </div>
            </div>

        </section>

        
        <!-- body -->
        <section class="main mx-5 p-3 bg-main">
            <div class="row">
                
                <div class=" offset-2 col-md-8 ">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action timeline">
                            <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Business Name</h5>
                            <small class="text-muted"></small>
                            </div>
                            <p class="mb-1">AbOUT THE BUSINESS Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>username/profile.</small>
                        </div>
                        <div class="list-group-item list-group-item-action timeline">
                            <div class="d-flex w-100 justify-content-between">
                            <p class="mb-1"> Username, user description</p>
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3 ">
                    <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>
                    </div>
                </div> -->
            </div>

        </section>

        <?php include('loginfooter.php'); ?>

