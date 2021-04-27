<?php
session_start();
//require('config.php');
 include("includes/header.php");
if (isset($_POST['submit'])){
  


    $userName=trim($_POST['username']);
    $password=trim($_POST['password']);
   
    if(empty($userName)){
        $userError="Email address or Username is required";

    }
    if(empty($password)){
        $passError="Password is required";
    }

    $sql="SELECT * FROM tbl_users WHERE ( username='$userName' OR email='$userName') AND user_pass ='$password'";
    $action=mysqli_query($connection,$sql);
    if(mysqli_num_rows($action)==1){
        $user=mysqli_fetch_array($action);
        $_SESSION['name']=$user['name'];
        $_SESSION['role']=$user['roles'];
        $_SESSION['user_id']=$user['userid'];
        header("location:dashboard.php");

    }
    else{
        
        getMessage("Invalid login","danger");
    }
}
?>


    <div class="container">
        <div class="login-form">
            
            <h1 class="text-center text-primary" ><img src="Images/logo.png" width="70" height="70">Arab Freelancer</h1>
            <p>Log In to your account</p>
        <form method="post" >
           <input type="text" name="username" placeholder="Email Address or Username" value="<?php if(isset($userName)) echo $userName; ?>" class="form-control "  autocomplete="off" autofocus > <br>
           <span style="color:white; font-weight:bold">
           <?php

           if(isset($userError)){
            echo $userError;
           }
           ?>

           </span>
            <input type="password" name="password" placeholder="Enter your password" class="form-control" > <br>
           <span style="color:white; font-weight:bold">
            <?php

            if(isset($passError)){
            echo $passError;
            }
            ?>

           </span>
           <button type="submit" name="submit" class="btn btn-primary">LogIn </button>
        </form>
    </div>
    </div>
 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
 <?php include("includes/footer.php"); ?>