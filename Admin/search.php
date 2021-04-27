<?php
include('functions.php');
if(isset($_GET['k'])){
    $name="%".$_GET['k']."%";
    $sql="SELECT * FROM tbl_users WHERE name LIKE '$name'";
    $action=mysqli_query($connection,$sql);
    if(mysqli_num_rows($action)){
        while($data=mysqli_fetch_array($action)){
            echo "<a href='#'>".$data['name']."</a><br>";

        }
    }
    else{
        echo  getMessage("No Result Found","danger");
    }
}