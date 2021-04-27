<?php
require('config.php');
if(isset($_GET['Id'])){
    $fid=$_GET['Id'];
    $sql="SELECT * FROM tbl_freelancers WHERE f_id='$fid'";
    $action=mysqli_query($connection,$sql);
    $data=mysqli_fetch_array($action);
}
?>

<table class="table table-hover table-responsive-lg table-dark table-bordered" id="freedata">
<thead>
<tr>
<th>Name</th>
<th>Phone Number</th>
<th>Email Adress</th>
<th>Photo</th>
</tr>
<tbody>
<tr>
<td class="vertical-align: middle; "><?= $data['f_name']; ?> </td>
<td class="vertical-align: middle; "><?= $data['f_phone']; ?> </td>
<td class="vertical-align: middle; "><?= $data['f_email']; ?> </td>
<td class="vertical-align: middle; "> <?php
if($data['photo']!=NULL){ 
    ?>
    <img src="uploaded/<?= $data['photo']; ?>"  width="80" height="80"  alt="freelancer-image">
    <?php
     $data['photo'];
    }
    else{
        ?>
        <img src="../Images/person.svg" width="80" height="80" alt="freelancer-image" >
   <?php }?>
 </td>
</tr>
</tbody>
<thead>
</table>
