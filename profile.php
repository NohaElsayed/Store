<!-- header -->
<?php include("includes/header.php");

     
      

?>
 
    <!-- Start Navbar -->
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <a class="navbar-brand" href="index.php">
        <img src="Images/logo-title.png" width="70" height="70" alt="" loading="lazy">
        Arab Freelancers</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item active">
            <a class="nav-link" href="#portifilio">Portfolio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
         
        </ul>
        
      </div>
    </nav>

    
      <!-- Container -->
    
    
     
      
      
      <div class="container-fluid ">

        <div class="info">
         
          <h1>
           <?php 
          if(isset($_GET['frn'])){
           echo ucwords($_GET['frn']);
          }?>
          
          </h1>
          <h2>
            <?php 
             if(isset($_GET['fj'])){
               echo ucwords($_GET['fj']);
             }
          ?></h2>
         
        </div>
        </div>
      
     
  


    

  
    <!-- Content -->
   
    <div class="content">
        <div class="portifilio" id="portifilio">
            <h1> <span id="feature">Featured</span> Portfolio</h1>
          

            <div class="container mt-5">
              <div class="row ">
                <div class="col-md-6 mb-3 col-12">
                  <div class="card">
                    <img src="Images/pexels-luis-gomes-546819.jpg" class="card-img-top img-fluid w-100 h-auto" alt="...">
                    <div class="card-body">
                      <a href ="#"class="card-text">Webapp Development & Chrome Extension</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mb-3 col-12">
                  <div class="card" >
                    <img src="Images/pexels-vojtech-okenka-392018.jpg" class="card-img-top img-fluid w-100 h-auto" alt="...">
                    <div class="card-body">
                      <a href ="#"class="card-text">Webapp Development</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mb-3 col-12">
                  <div class="card" >
                    <img src="Images/pexels-pixabay-267350.jpg" class="card-img-top img-fluid w-100 h-auto" alt="...">
                    <div class="card-body">
                      <a href ="#"class="card-text">Mobile App</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mb-3 col-12">
                  <div class="card" >
                    <img src="Images/pexels-pixabay-60504.jpg" class="card-img-top img-fluid w-100 h-auto" alt="...">
                    <div class="card-body">
                      <a href ="#"class="card-text">App Development</a>
                    </div>
                  </div>
                </div>
               </div>

            </div> 
       
        </div>
     
        <!-- About -->
    
        <div class="about" id="about">
          <hr class="text-center" style="background-color:white;margin: auto;">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-12 my-3" >
               
                <h1>About Me</h1>
                
                <p><?php if(isset($_GET['fd'])){
                        echo $_GET['fd'];
                } ?> </p>
              
             
              </div>
              <div class=" rounded-circle col-md-6 col-12 my-3" >
                <img src="Admin/uploaded/<?php 
                if(isset($_GET['imf'])){
                  echo $_GET['imf'];
                } 
                else{
                  echo "<img src='../Images/person.svg' alt='freelancer image' >";
                }
                ?>" alt="person" >
              </div>
             
            </div>
          </div>
        </div>

        <!-- Contact  -->
        
        <div class="contact " id="contact">
          <hr class="text-center" style="background-color:white;margin: auto;">
          <div class="contact-header my-3">
            <h1>Contact</h1>       
            
              <i class="fas fa-envelope-open fa-4x mx-auto d-block mb-2" style="color: white;"></i>
              
              

             </div>
           
             <!-- Form   -->
            <div class="container" >
              <div class="row mx-auto d-block "> 
                <form>
                <input type="text" class="form-control" name="text" required placeholder="Enter Your Name" autocomplete="off"> 
                <input type="email" class="form-control" name="email" required autocomplete="off" placeholder="Enter Your Email"> 
                <textarea name="comment" class="form-control" rows=8 cols=35 placeholder="Leave a Message.."></textarea> 
                <button type="submit" class="form-control">Submit</button>
               </form>
              </div>
            </div>
         
       
      
        </div>
        

       



    </div>
     
        <!-- Footer  -->
    <div class="footer ">
      <div class="social_links">
      <a href="https://www.facebook.com/profile.php?id=100006476602944" target="_blank"><i class="fab fa-facebook-square fa-2x" style="color: white"></i></a> &nbsp;&nbsp;
          <a href="https://twitter.com/small_zara" target="_blank"><i class="fab fa-twitter-square fa-2x" style="color: white ;"></i></a> &nbsp;&nbsp;
          <a href="https://www.linkedin.com/in/sarah-ahmed-950225128/" target="_blank"> <i class="fab fa-linkedin fa-2x" style="color:white;"></i></a> &nbsp;&nbsp;
      </div>
          <span> Copyright &copy Sarah Ahmed 2020.</span>

       
    </div>
    <div class="footer ">
          <span> Copyright &copy Sarah Ahmed 2020.</span>
     </div>
    
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <?php include("includes/footer.php"); ?>