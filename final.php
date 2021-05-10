<?php
//session_start()
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname="nipuna";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



extract($_POST); 

    $name=test_input($name);
    $email=test_input($email);
    $clg=test_input($clg);
    $city=test_input($city);
		$phone=test_input($phn);
    $year=test_input($year);
    $ref=test_input($ref);
    $tid=test_input($tid);
    $mode=test_input($mode);
	//	$gender=$_POST['gender'];
		$acm=$_POST['acm'];
		$eve=$_POST['eve'];
         $chkNew="";
		 if($eve==0)
			  echo "please select the event";
         else
 
              foreach($eve as $chkNew1) 
               { 
                   $chkNew .= $chkNew1 . ","; 
                } 
$qry="insert into nipuna(name,email,clg,city,phn, year,ref,acm,event,tid,mode)
VALUES ('$name','$email','$clg','$city','$phone','$year','$ref','$acm','$chkNew','$tid','$mode')";

$res=mysqli_query($conn,$qry);


if(!$res){
	die ("failed");
  echo "<script>
  alert('TRY AGAIN');
</script>";
}
else {
  echo "<script>
  alert('Successfully Registered');
</script>";
      header("Location:index.html");
}

?>


