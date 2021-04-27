<?php include("includes/header.php");?>


<?php 
require('Admin/functions.php');

  if(isset($_POST['submit'])){

    /** Uploade directory */
    $path=$_FILES['photo']['tmp_name'];
    $file_name=$_FILES['photo']['name'];
    $dir=dirname(__FILE__).'/Admin/uploaded/';
    move_uploaded_file($path,$dir.$file_name);

      $name=$_POST['username'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $descr=$_POST['description'];
      $password=$_POST['pass'];
      $job=$_POST['job'];
      $errors=array();
      
      if(empty($name)){
        $errors[]="Name is required";
      }
      if(empty($email)){
        $errors[]="Email is required";
      }
      if(empty($phone)){
        $errors[]="Phone is required";
      }
      if(empty($password)){
        $errors[]="Password is required";
      }
      if(empty($descr)){
        $errors[]="Description is required";
      }
      if(empty($job)){
        $errors[]="Job is required";
      }
      $sql="SELECT $name,$email FROM tbl_freelancers WHERE f_name='$name' OR f_email= '$email'";
      $action=mysqli_query($connection,$sql);
      if(!empty($errors)){
        
        echo"<div class='formsign'><div class=' alert alert-danger'>";
              for($i=0; $i<count($errors); $i++){
                echo " <li> $errors[$i] </li>";
              }
              
         echo"</div></div>";
            }
    
     
       else if(mysqli_num_rows($action)== 1){
         getMessage("UserName or Email Address already exist","danger");
     }
     else{
       

  $addFreelancer="INSERT INTO tbl_freelancers VALUES (Null,'$name','$phone','$email','$file_name','$password')";
  if(mysqli_query($connection,$addFreelancer)){
      $last_fid=mysqli_insert_id($connection);
      $action=mysqli_query($connection,"INSERT INTO details(`id`, `description`, `f_id`, `job`) VALUES (NULL,'$descr','$last_fid',' $job')");
      getMessage("Signed up Successfuly");
      header("Location:signin.php");
  }
}
}
?>
<!--Nav bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <a class="navbar-brand" href="index.php">
        <img src="Images/logo-title.png" width="70" height="70" alt="ArabFreelancers-logo" loading="lazy">
        Arab Freelancers</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
          
          <li class="nav-item">
            <a class="nav-link btn" href="index.php" title="Home page">Home </a>
          </li>
          
       </ul>    
      </div>
    </nav>
<!--Container-->
<div class="container formsign ">
<h1 class="text-center header">Create your account</h1>
<p class="text-center"><small>Sign up today and pursue bold ideas with ArabFreelancers.com</small></p>
 <div class="row">
   <!--Data -->
    <div class="data col-md-5 ">
      <h1>Are you a freelancer?</h1>
        <p>We are constantly on the lookout for great talents to join us build the largest vetted network of freelancers in the region
            There’s no better place than Ureed.com to kickstart your freelance journey, and here’s why:</p>
        <ul>
          <li><i class="fas fa-check-circle" style="color:#20c997" ></i>Expand your client base by working with over 5000 active clients across all industries</li>
          <li><i class="fas fa-check-circle" style="color:#20c997"></i>Build an ever-lasting online portfolio in minutes and display it to renowned clients</li>
          <li><i class="fas fa-check-circle" style="color:#20c997"></i>Get paid securely and on time, every time, with less fees and waiting time</li>
          <li><i class="fas fa-check-circle" style="color:#20c997"></i>Your learning curve will just keep on improving with access to over 20 courses on our Academy</li>
        </ul>
</div>
<!--Side Image-->
<div class="sideImage col-md-4  ">
     <img src="Images/howto-img.png" class="w-190" alt="support">
</div>
<!--Form signup-->
  <form enctype="multipart/form-data" method="POST" class="col-md-6 "  >
     <div class="form-group" >
   
                      <label for="exampleInputEmail1">UserName</label>
                      <input type="text" class="form-control" id="name" name="username" aria-describedby="emailHelp" >

                  
                    </div>

                    <div class="form-group ">
                      <label for="exampleInputEmail1">Phone Number</label>
                      <input type="text" class="form-control"name="phone" aria-describedby="emailHelp"  >
                      
                      
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      <span id="emailError"></span>
                    </div>

                    <div class="form-group">
                    <label for="inputPassword2" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password" >
                    </div>


                    <div class="form-group">
                    <label for="inputPassword2" class="visually-hidden">Job</label>
                    <input type="text" class="form-control" name="job" placeholder="Your Job" >
                    </div>

                    <div class="form-group ">
                      <div class="mb-3">
                          <label for="formFile" class="form-label">Photo</label>
                        <input class="form-control" type="file" name="photo" id="formFile">
                     </div>
                      
    
                    </div>
                    <div class="form-group">
                      <div class="form-floating">
                        <label for="floatingTextarea2">Description</label>
                        <textarea class="form-control" name="description" placeholder="Leave a description here" id="floatingTextarea2"style="height: 100px"></textarea>
                      
                    </div>
                    </div>
                     
                   

                      
                    <button type="submit" name="submit" class="btn btn-primary w-50 d-block mx-auto" style="background-color: #282828;">SignUp</button>
                    
                  </form>
                 
                 

 </div>

        </div>
             
</div>
   </div>
 

                       
<?php include("includes/footer.php"); ?>