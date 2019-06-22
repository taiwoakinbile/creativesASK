
    <?php include('header.php'); ?>
    <div class="container-fluid">
        
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon dark"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto ">
                    <div class="dropdown">
                        <a class="btn  btn-outline-wine  ml-3 " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Posts
                        </a>
                    </div>
       
                    <div class="dropdown">
                        <a class="btn  btn-outline-wine ml-3 " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-layer-group"></i> Categories
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Expert Articles</a>
                            <a class="dropdown-item" href="#">Business List</a>
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
                </div>

                
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
                            <h6 class="card-title"><a href="">Categories</a> </h6>
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
                            <p class="mb-1"> Username, user description</p>
                            <h5 class="mb-1">Question Title</h5>
                            <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
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

        <?php include('footer.php'); ?>
