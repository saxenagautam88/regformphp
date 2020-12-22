<?php
$con= mysqli_connect('localhost','root');
 mysqli_select_db($con,'userinfodb');
 extract($_POST);
 if(isset($_POST['submit'])){
 $q="insert into userinfo(First Name,Last Name,Email,Date _of _Birth,Mobile,Designation,Gender,Hobbies) values('$firstname','$lastname','$email','$DateofBirth','$Mobile','$Designation','$gender','$Hobbies')";
 

$query=mysqli_query($con,$q);
 header('location:form.html');
 
}
?>
