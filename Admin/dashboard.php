<?php include("includes/header.php") ?>

    <!-- Begin Navbar  -->
    <?php 
    include("includes/navbar.php");
    if(!isset($_SESSION['user_id'])){
      header("location:index.php");
    }

    ?>
    <!-- End Navbar  -->
   
    <!--Container -->
    
   


    <div class="container">
       <div class="row">
      
      
           <div class="col-md-4 col-8">
             <!-- Start Side Bar -->
           <?php
              if(isset($_SESSION['role']) && $_SESSION['role']==1){
                include("includes/admin-sidebar.php");
              }
             else if(isset($_SESSION['role']) && $_SESSION['role']==2){
                  include("includes/user-sidebar.php");

                }
              
              ?>
            <!-- End Side Bar -->
           </div>


           <div class="col-8">
             <!-- Start Alert 
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Well Done!</strong> User Added Successfully.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
             </div>
            -->
             <!-- End Alert-->


           



             <!-- Start Card -->
             <div class="card ">
              <div class="card-header">
                <?php
                   if(isset($_GET['page'])){
                     $url=$_GET['page'];
                     switch($url){
                       case'home':echo "Dashboard";break;
                       case'create_user':echo "Create New User";break;
                       case'manage_user': echo "Manage Users";break;
                       case 'freelancer': echo "Manage Freelancers"; break;
                       case 'edit':echo "Edit User";break;
                       
                     }
                    }

                     else{ 
                       echo "Dashboard";
                      }
                   
                ?>
              </div>
              <div class="card-body">
                  <?php 
                     if(isset($_GET['page'])){
                       include($_GET['page'].'.php');
                     }
                     else{
                       include("home.php");
                     }
                  ?>
             
            </div>
         
             <!-- End Card -->


           </div>


       </div>

   </div>
 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
 <?php include("includes/footer.php"); ?>

     
    