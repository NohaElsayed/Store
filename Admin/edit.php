<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM tbl_users WHERE userid=$id";
    $edit=mysqli_query($connection,$sql);
    $result =mysqli_fetch_array($edit);

}
//update data in db
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['roles'];
    $sql="UPDATE tbl_users SET name='$name',email='$email',user_pass='$password',roles='$role' WHERE userid='$id' ";
    $update=mysqli_query($connection,$sql);
    getMessage("User Updated Successfuly","success");
}

?>

<!-- Form -->
<form method="post">
 
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $result['name']; ?>" >

      <span id="nameError"></span>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $result['email']; ?>" >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <span id="emailError"></span>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">UserName</label>
      <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp"  value="<?php  echo $result['username'];?>">

      <span id="usernameError"></span>
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" value="<?php echo $result['user_pass'];?>">
      <span id="passError"></span>
    </div>
    

      <div class="form-group check-password">
          <span id="pass_msg"></span>
      </div>
      <div class="form-group ">
        <label>User Role</label>
    </div>
    <div class="form-group droplist" >
        <select name="roles" style=" background-color: #282828; color:white;width:100px;">
        <?php 
           if($result['roles']=="1"){
               echo "<option value='1'>Admin</option>";
           }
           else{
               echo "<option value='2'>User</option>";
           }
          
        ?> 
        
        <option value="1">Admin</option>
        <option value="2">User</option>
          </select>
        </div>
    <button type="submit"  name="submit" class="btn btn-primary" style="background-color: #282828;">Create</button>
    <button type="button" onclick="clearInput()" class="btn btn-primary" style="background-color: #282828;">Clear All</button>
  </form>