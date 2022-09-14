

<?php
$connect=mysqli_connect("localhost","root","","test");
$id=$_GET['id'];
$select=mysqli_query($connect,"select * from register where id='$id'");
$row=mysqli_fetch_array($select);
if(isset($_POST['btn_upd'])){
	$name=$_POST['tname'];
	$email=$_POST['temail'];
	$pass=$_POST['tpass'];
	
	
	$update=mysqli_query($connect,"update register set name='$name',email='$email',password='$pass' where id='$id'");
	if($update){
		echo"<script>alert('Data updated sucessfully')</script>";
		echo"<script>window.location.assign('file1.php')</script>";
		
	}
	else{
		
		echo"<script>alert('Data can't be updated sucessfully')</script>";
	}
	
	
	
}

?>
<form method="post" action="">
<table border="2">

<tr>
<th>Name</th>
<td><input type="text" name="tname" value="<?php  echo $row[1]; ?>"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="email" name="temail" value="<?php  echo $row[2]; ?>"></td>
</tr>
<tr>
<th>Password</th>
<td><input type="Password" name="tpass" value="<?php  echo $row[3]; ?>"></td>
</tr>

<tr>
<th> : </th>
<td><input type="submit" name="btn_upd" value="Update"></td>
</tr>
</table>
</form>