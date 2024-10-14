<?php 
include_once 'connect.php';
if(isset($_POST['profileID'])){
 
  // collect value of input field
  $profileID = $_POST['profileID']; 
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lrn = $_POST['lrn'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $dob = $_POST['dob'];
  $pob = $_POST['pob'];
  $address = $_POST['address'];
  $mcmg = $_POST['mcmg'];
  $citizenship = $_POST['citizenship'];
  $religion = $_POST['religion'];
  $number = $_POST['number'];
  $status = $_POST['status'];
  $sname = $_POST['sname'];
  $yearcom = $_POST['yearcom'];
  $adname = $_POST['adname'];
  $campus = $_POST['campus'];
  $choice1 = $_POST['choice1'];
  $choice2 = $_POST['choice2'];

  if($profileID!=0){
	  $sql = "UPDATE tbl_profile
			SET lastname = '$lastname', 
      firstname = '$firstname',
      middlename='$middlename',
      lrn ='$lrn',
      email = '$email',
      age='$age',
      sex='$sex',
      dob='$dob',
      pob='$pob',
      address='$address',
      mcmg='$mcmg',
      citizenship='$citizenship',
      religion='$religion',
      number='$number',
      status='$status',
      sname='$sname',
      yearcom='$yearcom',
      adname='$adname',
      campus='$campus',
      choice1='$choice1',
      choice2='$choice2'
			WHERE profileID=$profileID";
  }else{
  	$sql = "INSERT INTO tbl_profile (lastname,firstname,middlename,lrn, email, age, sex, dob, pob,address, mcmg, citizenship, religion, number,status, sname, yearcom, adname, campus, choice1, choice2)
           VALUES('$lastname','$firstname','$middlename','$lrn','$email','$age','$sex','$dob','$pob','$address','$mcmg','$citizenship','$religion','$number','$status','$sname','$yearcom','$adname','$campus','$choice1','$choice2')";  	
  }


	if ($con->query($sql) === TRUE) {
	  echo "Saved successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
}
?>