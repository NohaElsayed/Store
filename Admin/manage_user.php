

<?php 
$sql="SELECT * FROM tbl_users";
$data=mysqli_query($connection,$sql);




?>   
<!-- Search bar-->
<input type="text" id="find" autocomplete="off" class="form-control ">
<div class="result"></div>
<!-- End search bar-->
<?php 
if(mysqli_num_rows($data)>0){
?>

<table class="table table-bordered ">
<thead>
<tr>

<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">User Role</th>
<th scope="col" class="text-center">Operations</th>
</tr>
</thead>
<tbody>
<?php
while($result=mysqli_fetch_array($data)){
?>
<tr>

<td><?php echo $result['name'] ?></td>
<td><?php echo $result['email'] ?></td> 
<td><?php
if($result['roles']=="1"){
echo "Admin";
}
else{
echo "User";
}
?>
</td>
<td class="text-center">
<a href="dashboard.php?page=edit&id=<?php  echo $result['userid']; ?>" title="edit" class="btn btn-primary"> <i class="fas fa-edit"></i></a>
&nbsp; &nbsp;

<a href="delete.php?Id=<?=$result['userid']; ?>" title="delete" class="btn btn-danger"  id="deleteuser"> <i class="fas fa-trash"></i></a>
</td>
</tr>

<?php }?> 




</tbody>
</table>
<?php }
else{
getMessage("There is no data","danger");  
}
?>