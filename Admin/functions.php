<?php
require('config.php');
  function setTitle(){
      if(isset($_GET['page'])){
          $title=$_GET['page'];
          switch($title){

              case 'home':echo "Dashboard";break;
              case 'create_user':echo "Create New User";break;
              case 'freelancer':echo "Manage Freelancers";break;
              case 'manage_user':echo "Manage Users"; break;
              

          }
      }
      else {
          echo 'Dashboard';
      }
  }
  function getTotals($tbl){
      global $connection;
      $sql="SELECT COUNT(*) AS 'Total' FROM $tbl";
      $data=mysqli_query($connection,$sql);
      $result=mysqli_fetch_array($data);
      return $result['Total'];
  }

  function getMessage($msg,$bgcolor="success"){
      echo "<div class='alert alert-$bgcolor ' >$msg</div>";
     

  }
  
  function deleteUser($id,$tbl,$extra=""){
      
         global $connection;
          $query="DELETE FROM $tbl $extra";
          
          mysqli_query($connection,$query);
          
        
       
          
       
      
  }

function showTotal($tbl){
  global $connection;
  $sql="SELECT COUNT(*) AS 'showTotal' FROM $tbl";
  $data=mysqli_query($connection,$sql);
  $result=mysqli_fetch_array($data);
  return $result['showTotal'];

}

function checkUser($col1,$col2,$tbl,$extra){
    global $connection;
  
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
      
        $password=$_POST['password'];
        $role=$_POST['roles'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $errors=array();
      
        if(empty($name)){
          $errors[]="Name is required";
        }
        if(empty($email)){
          $errors[]="Email is required";
        }
        if(empty($username)){
          $errors[]="UserName is required";
        }
        if(empty($password)){
          $errors[]="Password is required";
        }
        if(empty($role)){
          $errors[]="Role is required";
        }

        $sql="SELECT $col1,$col2 FROM $tbl $extra";
        $action=mysqli_query($connection,$sql);
        if(!empty($errors)){
                      
          echo"<div class='alert alert-danger'>";
                for($i=0; $i<count($errors); $i++){
                  echo " <li> $errors[$i] </li>";
                }
                
           echo"</div>";
              }
      
       
      else if(mysqli_num_rows($action)== 1){
           getMessage("UserName or Email Address already exist","danger");
       }
       else{
        //insert into db 
        $userCreate="INSERT INTO tbl_users VALUES (Null,'$name','$email','$username','$password','$role')";
        mysqli_query($connection,$userCreate);
        getMessage("User created successfuly");
      }
      
    
}
}