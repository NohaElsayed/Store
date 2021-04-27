
 <?php 

/*
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
  else{
    //insert into db 
    $userCreate="INSERT INTO tbl_users VALUES (Null,'$name','$email','$username','$password','$role')";
    mysqli_query($connection,$userCreate);
  }
}
   */


 ?>
                 <!-- Form -->
                <form method="post">
                    <?php
                    /* display the list of errors if user submit empty inputs  */

                    /*
                      if(!empty($errors)){
                      
                    ?>
                    <div class="alert alert-danger">
                      <?php 
                        for($i=0; $i<count($errors); $i++){
                          echo " <li> $errors[$i] </li>";
                        }
                      */
                      ?>
                  
                    <?php
                    /*
                    }
                    else {
                      */
                      /* Check the username or email if admin try to create an already exist user in the db  */
                      if(isset($_POST['submit'])){
                        $email=$_POST['email'];
                        $username=$_POST['username'];
                        echo checkUser('username','email','tbl_users',"where username='$username' OR email='$email' ");
                        }
                      /*
                      if(isset($_POST['submit'])){
                        getMessage("User created successfuly");
                      }
                      
                    }
                     */
                    ?>
                       
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" >

                      <span id="nameError"></span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" >
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      <span id="emailError"></span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">UserName</label>
                      <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" >

                      <span id="usernameError"></span>
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                      <span id="passError"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm">
                      </div>

                      <div class="form-group check-password">
                          <span id="pass_msg"></span>
                      </div>
                      <div class="form-group ">
                        <label>User Role</label>
                    </div>
                    <div class="form-group droplist" >
                        <select name="roles" style=" background-color: #282828; color:white;width:100px;">
                        <option value="0">Select Role</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                          </select>
                        </div>
                    <button type="submit" id="btnCreate" name="submit" class="btn btn-primary" style="background-color: #282828;">Create</button>
                    <button type="button" onclick="clearInput()" class="btn btn-primary" style="background-color: #282828;">Clear All</button>
                  </form>
               
            