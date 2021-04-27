
<?php session_start();?> 
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
      <a class="navbar-brand" href="#">
        <img src="Images/logo-title.png" width="70" height="70" class="d-inline-block align-center" alt="" loading="lazy">
        Arab Freelancers</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <form class="form-inline my-2 my-lg-0">
           <a href="#" id="search-icon"> <i class="fas fa-search " style="color: white; margin-right:10px"></i></a>
            
          </form>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="admin_name" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?= ucwords($_SESSION['name']) ;?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="logout.php">Log Out</a>
             
            </div>
          </li>
         
        </ul>
        
      </div>
    </nav>