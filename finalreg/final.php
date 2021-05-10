<?php
//session_start()
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include "db.php";



extract($_POST); 

        $fname=test_input($fname);
		$lname=test_input($lname);
		$email=test_input($email);
		$phone=test_input($phone);
		$clg=test_input($clg);
        $city=test_input($city);
        $ref=test_input($ref)
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
$qry="insert into details(fname,lname, emaili, phone, college, city,ref, acm,event)
VALUES ('$fname','$lname','$email', '$phone', '$clg', '$city','$ref,'$acm','$chkNew')";

$res=mysqli_query($conn,$qry);


if(!$res){
	die ("failed");
	
}
else {
	  echo "registration successful";
      header("Location:index.html");
}
}




