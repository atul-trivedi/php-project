<?php 
 
 $con = mysqli_connect('localhost','root');

 if($con){

 	//echo "connection successful";
 	?>

<script>
	
	alert('connection successful');
</script>

 	<?php


 }else{

 	echo "no connection";
 }


 mysqli_select_db($con,'youtubeuserdata');

 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $comments = $_POST['comments'];

 $query = "insert into  iduserinfodata(user,email,mobile,comments) values('$user','$email','$mobile','$comments')";


 mysqli_query($con,$query);
  

 ?>