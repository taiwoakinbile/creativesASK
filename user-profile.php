        <?php include('loginheader.php'); ?>
        <!-- body -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <section>                       
                            
                        <div class="col-md-12">
                            <div class="list-group">
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Recent Posts</h5>                                        
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action timeline">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">How important is product management?</h5>
                                    <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">If there is one thing true about passionate product people, is that all 
                                            of them hold a particular product in high regard. Chefs just love certain 
                                            food joints. Painters have their predilection for an Old Master. 
                                            Perhaps it was the app they could never drop, or the utility that saved 
                                            them a lot of time, or the service that arranged the perfect holiday. </small>
                                </div>
                                <div class="list-group-item list-group-item-action timeline">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small>Donec id elit non mi porta.</small>
                                </div>
                            </div>
                        </div>                            
                        
                    </section>   
                </div>   

                <div class="col-md-6">
                    <div class="card" >
                        <div class="card-body">
                            <i class="fas fa-user fa-5x"></i>
                            <img src="images/img1" alt="avatar" class="img-fluid rounded-circle mx-auto d-block">
                            <h5 class="card-title">Username</h5>
                            <h6 class="card-subtitle mb-2 text-muted">user@yahoo.com</h6>                        
                            <form action="index.php" method="post" > 
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for=""></label>
                                    <input type="file" class="form-control-file" name="profilephoto" id="profilephoto"
                                    placeholder="" aria-describedby="fileHelpId">
                                    
                                </div>
                        </div>   

                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" name="" id="" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Area of Specialty</label>
                                    <select class="custom-select" name="" id="">
                                        <option selected>Choose</option>
                                        <option value="">Designers</option>
                                        <option value="">Illustrators</option>                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <small id="helpId" class="form-text text-muted">(Optional)</small> 
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Other area of specialty">
                                </div>
                                
                                <button type="button" class="btn btn-primary btn-sm btn-block text-uppercase" data-toggle="modal" data-target="#businessModal" >Add business</button>

                                <button id="login" type="submit" class="btn btn-primary btn-sm btn-block text-uppercase">UPDATE PROFILE</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
                

        <?php include('loginfooter.php'); ?>


        

    

    
    
   
    




  