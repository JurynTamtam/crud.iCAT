<?php
include_once "connect.php";
?>

<!DOCTYPE html>
<html>
	<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style/style.css">
</head>
	<body>
		<header align="center" class="bg-success p-3 ">
    <nav>
        <img src="style/images.jpg" alt="Logo" width="80" height="80" class="rounded-circle img border-4 p-1">
        <b id="subTitle"> ISPSC College Admission Test (ICAT)</b><br>
    </nav>
		</header>

    <nav>
        <ul>
            <li><a href="overview.html"><b>Overview</b></a></li>
            <li><a href="#manage"><b>Manage Profile</b></a></li>
        </ul>
    </nav>
  
      <div class="container p-2">
      <b> Manage Profile</b>
    </div>
		<div class="container mt-2">
				<a class="add-record btn btn-primary" align="right" href="#" data-bs-toggle='modal' data-bs-target='#profile-modal'>+Add record</a>
        <a class="delete-record btn btn-danger" align="right" href="#">Delete all</a>
    <div id="list-profile"></div>
		</div>  

   
          
      <!-- The Modal-EDIT -->
      <div class="modal bg-light" id="profile-modal">
        <div class="modal-dialog modal-fullscreen-lg-down">
          <div class="modal-content" >
          
          <!-- Modal Header -->
          <div class="modal-header bg-success">
              <h4 class="modal-title" id="m-title"></h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form id="profile-form" class="form-group" enctype="multipart/form-data">
            <div class="modal-body bg-light">
            <label for="lastname" class="form-label"><b>Lastname:</b> </label>
            <input type="text" placeholder="Enter lastname" name="lastname" id="lastname_e" required class="form-control" >
            <label for="firstname" class="form-label"><b>Firstname: </b></label>
            <input type="text" placeholder="Enter firstname" name="firstname" required id="firstname_e" class="form-control" >
            <label for="middlename" class="form-label"><b>Middlename:</b> </label>
            <input type="text" placeholder="Enter middlename" name="middlename" required id="middlename_e" class="form-control" >
            <label for="lrn" class="form-label"><b>LRN No.: </b></label>
            <input type="varchar" placeholder="Enter LRN No." name="lrn" required id="lrn_e" class="form-control" > 
            <label for="email" class="form-label"><b>Email:</b> </label>
            <input type="email" placeholder="Enter Email Address" name="email" required id="email_e" class="form-control" >   
            <label for="age" class="form-label"><b>Age: </b></label>
            <input type="number" placeholder="Enter age" name="age" required id="age_e" class="form-control" >       
            
            <label for="sex" class="form-label"><b>Sex:</b></label><br>
            <input type="radio" name="sex" id="sex_m" value="Male" required>
            <label for="sex_m">Male</label><br>
            <input type="radio" name="sex" id="sex_f" value="Female" required>
            <label for="sex_f">Female</label><br>
            
            <label for="dob" class="form-label"><b>Date of Birth</b> </label>
            <input type="date" placeholder="" name="dob" required id="dob_e" class="form-control" >
            <label for="pob" class="form-label"><b>Place of Birth:</b> </label>
            <input type="text" placeholder="Place of Birth" name="pob" required id="pob_e" class="form-control" >
            <label for="address" class="form-label"><b>Permanent Address:</b> </label>
            <input type="text" placeholder="Enter permanent address" name="address" required id="address_e" class="form-control" > 

            <label for="mcmg_no"><b>Member of Cultural Minority Group:</b></label><br>
            <input type="checkbox" name="mcmg" id="mcmg_no" value="No">
            <label for="mcmg_no">No</label>
            <input type="checkbox" name="mcmg" id="mcmg_yes" value="Yes">
            <label for="mcmg_yes">Yes</label><br>
            <label for="mcmg">If yes, specify:</label>
            <input type="text" name="mcmg" id="mcmg_e"> <br><br>

            <label for="citizenship" class="form-label"><b>Citizenship:</b> </label>
            <input type="text" placeholder="Enter Citizenship"  name="citizenship" required id="citizenship_e"class="form-control" >
            <label for="religion" class="form-label"><b>Religion:</b> </label>
            <input type="text" placeholder="Enter Religion" name="religion" required id="religion_e" class="form-control">
            <label for="number" class="form-label"><b>Number:</b> </label>
            <input type="number" placeholder="Enter Contanct Number" name="number" required id="number_e" class="form-control">  
              <br>
            <label for="status" class="form-label"><b>Status of Study</b></label><br>
            <input type="checkbox" name="status" id="status_senior" value="Currently Senior High School">
            <label for="status_senior">Currently Senior High School</label><br>
            <input type="checkbox" name="status" id="status_graduate" value="High School Graduate/Transferee">
            <label for="status_graduate">High School Graduate/Transferee</label><br><br>


            <b>For currently enrolled Senior High School students:</b>
            <label for="sname" class="form-label">Full name of high school where you are currently enrolled (Do not abbreviate)</label>
            <input type="text" placeholder="School name" name="sname" id="sname_e" class="form-control">  
            <label for="yearcom" class="form-label">Month/Year Of Completion</label>
            <input type="number" placeholder="Month/Year of Completion" name="yearcom"  id="yearcom_e" class="form-control">  
            <label for="adname" class="form-label">Address Of School</label>
            <input type="text" placeholder="Address of School" name="adname" id="adname_e" class="form-control"> 
            <br>  

            <b>For High School Graduate/Transferee:</b><br>
            <label for="sname" class="form-label">Last School Attended</label>
            <input type="text" placeholder="School name" name="sname" id="sname_e" class="form-control">  
            <label for="yearcom" class="form-label">Month/Year Attended</label>
            <input type="number" placeholder="Month/Year Attended" name="yearcom"  id="yearcom_e" class="form-control">  
            <label for="adname" class="form-label">Address Of School</label>
            <input type="text" placeholder="Address of School" name="adname" id="adname_e" class="form-control">     
            <br>  

            <label for="campus"><b>Campus Applied For:</b></label><br>
            <input type="checkbox" name="campus" id="campus_stamaria" value="Sta. Maria">
            <label for="campus_stamaria">Sta. Maria</label>
            <input type="checkbox" name="campus" id="campus_narvacan" value="Narvacan">
            <label for="campus_narvacan">Narvacan</label>
            <input type="checkbox" name="campus" id="campus_santiago" value="Santiago">
            <label for="campus_santiago">Santiago</label><br>
            <input type="checkbox" name="campus" id="campus_candon" value="Candon">
            <label for="campus_candon">Candon</label>
            <input type="checkbox" name="campus" id="campus_tagudin" value="Tagudin">
            <label for="campus_tagudin">Tagudin</label>
            <input type="checkbox" name="campus" id="campus_cervantes" value="Cervantes">
            <label for="campus_cervantes">Cervantes</label>


            <br><br>

            <h6><b>Intended Course(Up to 2 choices only):</b></h6>
            <label for="choice1" class="form-label">1st Choice: </label>
            <input type="text" placeholder="" name="choice1" required id="choice1_e"><br>
            <label for="choice2" class="form-label">2nd Choice: </label>
            <input type="text" placeholder="" name="choice2" id="choice2_e">
            <br>
            <input type="hidden" name="profileID" id="profileID_c" value="0" class="form-control">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
            <input type="submit" name="btn-saving" class="btn btn-primary" id="b-save" value="Save">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
          </main>
          </div>
        </div>
      </div>

      <!-- The Modal-DELETE -->
      <div class="modal" id="profile-modal-delete">
        <div class="modal-dialog modal-fullscreen-lg-down">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Delete Record</h4>
              <button type="button" class="btn-cancel btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div>
                <p>Are you sure to delete this?</p>
                <p class="alert alert-warning" id="to-delete"></p>
                <div align="right">
                <button type="submit" name="btn-update" class="btn-delete btn btn-danger"  data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn-cancel btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer >
          <p><b>&copy; ispsc ICAT Management | 2024</b></p>
      </footer>

<script type="text/javascript">
  
  $(document).ready(function(){
              $.ajax({
                  type:"POST", 
                  url: "fetch-profile.php",   
                  data:{},
                  cache:false,
                  success:function(data) {
                    $("#list-profile").html(data);
                  }
                });



  });
        // when the SAVE CHANGES button is clicked
        $('#profile-form').on("submit", function(event){
          event.preventDefault();

          var profile_form = $("#profile-form").serialize(); 
          //alert(profile_form);
        $.ajax({
          url:'saving-profile.php',
          method:'POST',
          data: profile_form,
          success: function(response){ 
            //alert(response);
              $.ajax({
                  type:"POST", 
                  url: "fetch-profile.php",   
                  data:{},
                  cache:false,
                  success:function(data) {
                    $("#list-profile").html(data);
                  }
                });
              var cur_btn = $("#b-save").val();
              if (cur_btn == "Save") {
                $("#profile-form")[0].reset();
              }
          }
        });
        
      });

    // Event listener for the "Delete all" button
    $('.delete-record').on('click', function(e) {
        e.preventDefault();
        
        // Confirm with the user before deleting all records
        if (confirm("Are you sure you want to delete all records?")) {
            // Send an AJAX request to delete all records
            $.ajax({
                url: 'delete-all.php', // Replace with the URL of your server-side script to delete all records
                method: 'POST',
                data: { deleteAll: true }, // You can pass any additional data here if needed
                success: function(response) {
                    // Handle success response
                    if (response === 'success') { 
                        // Clear the list of profiles in the UI
                        $('#list-profile').empty();
                        alert('All records deleted successfully!');
                    } else {
                        alert('Failed to delete records. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                    alert('An error occurred while deleting records. Please try again later.');
                }
            });
        }
    });
</script>
	</body>
</html>




