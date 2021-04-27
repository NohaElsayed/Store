               <?php
               $sql="SELECT f_id,f_name FROM tbl_freelancers ORDER BY f_name";
               $action=mysqli_query($connection,$sql);

              ?>
              
               <select id="freeval" class="form-control">
               <option>Select Freelancer</option>
               <?php 
                  while( $arr=mysqli_fetch_array($action) ){

               ?>
                   <option value="<?=$arr['f_id'];?>" > <?= $arr['f_name']; ?> </option>
                
              <?php 
            } 
            ?>   
                           
               </select>
                
               <div class="free-table"></div>
          

               