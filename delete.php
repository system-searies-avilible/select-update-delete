<?php
$connect=mysqli_connect("localhost","root","","test");
$id=$_GET['id'];

$delete=mysqli_query($connect,"delete from register where id='$id'");
if($delete){
	
	echo"<script>alert('Data deleted sucessfully')</script>";
	echo"<script>window.location.assign('file1.php')</script>";
}
else{
	echo"<script>alert('Data  can't be deleted ')</script>";
	
}
?>