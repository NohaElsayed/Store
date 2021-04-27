<?php
require('Admin/functions.php');
if(isset($_GET['f'])){
    $freelance='%'.$_GET['f'].'%';
    $sql="SELECT * FROM tbl_freelancers INNER JOIN details ON tbl_freelancers.f_id = details.f_id AND details.description LIKE '$freelance'";
    $action=mysqli_query($connection,$sql);
    if(mysqli_num_rows($action)>0){
        ?>
        <!-- card code  -->
    <div class="container">
     <div class=" row ">
         
       <?php
        while($arr=mysqli_fetch_array($action)){
         ?>
     
       <div class="col-lg-4 col-md-6 col-12  d-flex align-items-stretch mb-3 mx-auto">
          <div class="card h-auto" style="width: 18rem;">
          <?php if($arr['photo']!= NULL) {
              ?>
              <img src="Admin/uploaded/<?= $arr['photo']; ?> " class="card-img-top round-image img-fluid my-3 " alt="freelancer-image" >
           <?php } else{
               ?>
                <img src="Images/person.svg" class="card-img-top round-image img-fluid my-3 " alt="freelancer-image" >
          <?php }?>
               <div class="card-body flex-fill text-center">
                  <h5 class="card-title"><?=ucwords($arr['f_name']); ?></h5>
                  <p class="card-text ellipsis"><?=$arr['description']; ?></p>
                  <a href="profile.php?frId<?=$arr['f_id']; ?>&frn=<?=$arr['f_name']; ?>&fj=<?= $arr['job'];?>&imf=<?= $arr['photo'];?>&fd=<?= trim($arr['description']);?>" class="btn btn-primary ">View Profile</a>
               </div>
            </div> 
        </div>
       
        <?php }?>
    </div>
    </div>
   <?php
    }
    else{
        echo  getMessage("No Result Found","warning");
    }
}
?>