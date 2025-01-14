
<?php
//Author:Sumaiya Sultana
  // ID:20222029010
  // Semester:3.1
  // Description:This is a php file that build connect with server and send data to server.
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="project";
    

   $con = mysqli_connect($servername,$username,$password,$dbname);
 
   if (isset($_POST['Submit'])) {
    $name = $_POST['fullname'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dept = $_POST['dept'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $gender = $_POST['gender'];
    $term = $_POST['term'];
    $phn = $_POST['phn'];
    $emphn = $_POST['emphn'];
	$chk_religion= implode(",",$religion);
	
	

if($name!="" &&$id!="" && $email!="" &&$password!="" && $dept!="" && $dob!="" && $religion!="" && $gender!="" && $term!="" && $phn!="" && $emphn!=""){    
   $query="INSERT INTO REGISTATION VALUES('$name','$id','$email','$password','$dept','$dob','$chk_religion','$gender','$term','$phn','$emphn')";
   $data=mysqli_query($con,$query);
}
   else{
	echo "not insert";
   }
}

?>