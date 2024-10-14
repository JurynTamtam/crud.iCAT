<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style/style.css">
</head>
<div class="table-container">
		<table border="1" width="100%"  class="table table-hover table-bordered">
			<tr class= " tr bg-warning">
				<th>ID</th>
				<th>Complete name</th> 
        <th>Sex</th>				
        <th>Age</th> 
        <th>Email</th>
        <th>Number</th>
        <th>Address</th>
        <th>Religion</th>
        <th>Birthday</th> 
        <th>Birth Place</th> 
        <th>Citizenship</th> 
        <th>Cultural Group</th> 
        <th class= bg-primary>LRN</th>
        <th class= bg-primary>Status</th>
        <th class= bg-primary>Campus Applied</th>
        <th class= bg-primary>Course Choice</th>
        <th class= bg-danger>Action</th>
			</tr>
      </html>
<?php
	include_once "connect.php";
    $sql_profile = "SELECT * FROM tbl_profile";
    $result_profile = mysqli_query($con, $sql_profile);

    if (mysqli_num_rows($result_profile) > 0) {
        while($row = mysqli_fetch_array($result_profile)) {
        	echo "<tr>";
	        	echo "<td>".$row['profileID']."</td>";
            echo "<td>".$row['lastname'].", ".$row['firstname']." ".$row['middlename']."</td>";
            echo "<td>".$row['sex']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['number']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['religion']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['pob']."</td>";
            echo "<td>".$row['citizenship']."</td>";
            echo "<td>".$row['mcmg']."</td>";
            echo "<td>".$row['lrn']."</td>"; 
            echo "<td>".$row['status']."</td>";
            echo "<td>".$row['campus']."</td>";
            echo "<td>".$row['choice1'].", ".$row['choice2']."</td>";
	        	echo "<td>";
	        		echo "<a href='#' id='".$row['profileID']."' class='edit-profile btn btn-outline-warning' data-bs-toggle='modal' data-bs-target='#profile-modal'>Edit</a>";
	        		echo "<a href='#' id='".$row['profileID']."' class='delete-profile btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#profile-modal-delete'> Delete </a>";
	        	echo "</td>";
        	echo "</tr>";
       }
    }
?>
		</table>
</div>

<script type="text/javascript">
	//when Edit link is clicked
      $(".edit-profile").click(function(){
        $("#m-title").text("Edit profile");
        $("#b-save").val("Save Changes");
              
        var profileID =  $(this).attr("id");
        //alert (profileID);
        $.ajax({
            type:"POST", 
            url: "fetch-edit-profile.php",   
            data:{profileID:profileID},
            cache:false,
            dataType:"JSON",
            success:function(data) {

              $('#profileID_c').val(data.profileID);
              $('#lastname_e').val(data.lastname);
              $('#firstname_e').val(data.firstname);
              $('#middlename_e').val(data.middlename); 
              $('#lrn_e').val(data.lrn); 
              $('#email_e').val(data.email);
              $('#age_e').val(data.age);
              $('#sex_e').val(data.sex);
              $('#dob_e').val(data.dob);
              $('#pob_e').val(data.pob);
              $('#address_e').val(data.address);
              $('#mcmg_e').val(data.mcmg);
              $('#citizenship_e').val(data.citizenship);
              $('#religion_e').val(data.religion);
              $('#number_e').val(data.number);
              $('#status_e').val(data.status);
              $('#sname_e').val(data.sname);
              $('#yearcom_e').val(data.yearcom);
              $('#adname_e').val(data.adname);
              $('#campus_e').val(data.campus);
              $('#choice1_e').val(data.choice1);
              $('#choice2_e').val(data.choice2);
            }
          });
      });
	//when Add record is clicked
      $(".add-record").click(function(){
        $("#m-title").text("Register profile");
        $("#b-save").val("Save");
        $("#profile-form")[0].reset();      
       
      });
        //when delete icon is clicked
      $(".delete-profile").click(function(){
        var profileID =  $(this).attr("id");
        //alert(profile_ID);
        $("#to-delete").text("Profile ID: "+profileID);

        $(".btn-delete").click(function(){
          $.ajax({
            url:'delete-profile.php',   // backend file: where your codes for saving were written.
            method:'POST',
            data: {profileID:profileID},
            success: function(response){ 
              $.ajax({
                  type:"POST", 
                  url: "fetch-profile.php",   
                  data:{},
                  cache:false,
                  success:function(data) {
                    $("#list-profile").html(data);
                  }
                });
            }
          });
        });
      });

</script>