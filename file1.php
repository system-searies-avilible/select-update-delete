<table border="2">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
$connect=mysqli_connect("localhost","root","","test");

$select=mysqli_query($connect,"select * from register");
$num=mysqli_num_rows($select);
for($i=0; $i<$num; $i++){
	$row=mysqli_fetch_array($select);
	echo"<tr>";
	echo"<td>".$row[0]."</td>";
	echo"<td>".$row[1]."</td>";
	echo"<td>".$row[2]."</td>";
	echo"<td>".$row[3]."</td>";
	echo"<td>".'<a href="mypage.php?id='.$row[0].'"> Update</a>'."</td>";
	echo"<td>".'<a href="delete.php?id='.$row[0].'"> Delete</a>'."</td>";
	echo"</tr>";
	
	
}
?>
</table>