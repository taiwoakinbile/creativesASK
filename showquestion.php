<?php 
include_once('creativaskclass.php');

$post = new Post;
$output = $post->showQuestion();


var_dump($output);

if(isset($output)){
    foreach ($output as $key => $value) {
        ?>
        <div class='box col-md-6'>
        <!-- <?php //
        //if (empty($value['photograph'])) {
            ?>
            <img src="images/female.jpg" style="width: 210px; height=210px;"><br>
            <?php
        //}else{
            ?>
            <img src="<?php //echo $value['photograph'];?>"  alt="<?php// echo $value['firstname'];?>" style="width: 210px; height:210px;" >
            <?php
        //}
        ?> -->

        <div>
            <?php echo  $value['questioncontent'];?>
            
            <p ></p>
        
        </div>


            
        
        </div>
        
        
        <?php
    }
}




?>