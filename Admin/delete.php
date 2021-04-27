
<?php

require('functions.php');
if(isset($_GET['Id'])){
    $id=$_GET['Id'];
   deleteUser($id,'tbl_users',"WHERE userid=$id");
  header("location:dashboard.php?page=manage_user");
}
?>


