<?php

if(isset($_POST['Submit'])) {

    $nik = $_POST['nik'];
    $full_name = $_POST['full_name'];
    $birthplace = $_POST['birthplace'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood'];
    $tribe = $_POST['tribe'];
    $email = $_POST['email'];
    $telephone_num = $_POST['telephone_num'];
    $mobile_num = $_POST['mobile_num'];
    $status = $_POST['status'];
    $religion = $_POST['religion'];
    $home_address = $_POST['home_address'];
    $postal_code = $_POST['postal_code'];
    $school_name = $_POST['school_name'];
    $school_program = $_POST['school_program'];
    $school_telephone = $_POST['school_telephone'];
    $school_address = $_POST['school_address'];
    $school_postal = $_POST['school_postal'];
    $father_name = $_POST['father_name'];
    $father_mobile = $_POST['father_mobile'];
    $father_email = $_POST['father_email'];
    $father_education = $_POST['father_education'];
    $father_religion = $_POST['father_religion'];
    $mother_name = $_POST['mother_name'];
    $mother_mobile = $_POST['mother_mobile'];
    $mother_email = $_POST['mother_email'];
    $mother_education = $_POST['mother_education'];
    $mother_religion  = $_POST['mother_religion'];
    $date_submit = $_POST['date_submit'];
    
    include_once("config.php");
    $result = mysqli_query($mysqli, "INSERT INTO collages(nik,full_name,birthplace,dob,gender,blood,tribe,email,telephone_num,
    mobile_num,status,religion,home_address,postal_code,school_name,school_program,school_telephone,school_address,school_postal,
    father_name,father_mobile,father_email,father_education,father_religion,mother_name,mother_mobile,mother_email,mother_education,
    mother_religion,date_submit) VALUES ('$nik','$full_name','$birthplace','$dob','$gender','$blood','$tribe','$email',
    '$telephone_num','$mobile_num','$status','$religion','$home_address','$postal_code','$school_name','$school_program',
    '$school_telephone','$school_address','$school_postal','$father_name','$father_mobile','$father_email','$father_education',
    '$father_religion','$mother_name','$mother_mobile','$mother_email','$mother_education','$mother_religion','$date_submit')");

    $row = mysqli_query($mysqli, "SELECT * FROM collages WHERE nik = '$nik'");
    $value = mysqli_fetch_assoc($row);
    session_start();
    $_SESSION["id_collages"] = $value["id_collages"];
    
    header("Location: jadwal.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UNKLAB - Registration Form</title>

  <!-- Custom fonts for this template-->
  <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="row justify-content-center">

    <div class="col-xl-8 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>UNKLAB Registration Form for New Student</b></h1>
              </div>
              
              <form class="user" action="index.php" method="post" name="form1">
           
                <legend><p align="center" class="h5 text-gray-900 mb-4">Personal Information</p></legend>
                <hr>
              <div class="form-group">
                  <h6>Full Name : </h6> <input type="text" name="full_name" id="full_name" class="form-control form-control-user" placeholder="Full Name">
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>NIK :</h6> <input type="text" name="nik" id="nik" class="form-control form-control-user" placeholder="NIK">
                  </div>
                  <div class="col-sm-6">
                   <h6>Birthplace :  </h6><input type="text" name="birthplace" id="birthplace" class="form-control form-control-user"  placeholder="Birthplace">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Date of Birth :</h6> <input type="date" name="dob" id="dob" class="form-control form-control-user"  >
                  </div>
                  <div class="col-sm-6">
                   <h6>Gender :  </h6><input type="radio" name="gender"  value="M"> Male &emsp;
                            <input type="radio" name="gender"  value="F"> Female
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Blood Type :</h6> <input type="radio" name="blood"  value="A"> A &emsp;
                            <input type="radio" name="blood" value="B"> B &emsp;
                            <input type="radio" name="blood"  value="AB"> AB &emsp;
                            <input type="radio" name="blood"  value="O"> O &emsp;
                  </div>
                  <div class="col-sm-6">
                   <h6>Tribe :  </h6> <input type="text" name="tribe" id="tribe" class="form-control form-control-user"  placeholder="Tribe">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Email :</h6> <input type="text" name="email" id="email" class="form-control form-control-user" placeholder="Email">
                  </div>
                  <div class="col-sm-6">
                   <h6>Telephone Number :  </h6><input type="text" name="telephone_num" id="telephone_num" class="form-control form-control-user" placeholder="Telephone Number">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Mobile Number :</h6> <input type="text" name="mobile_num" id="mobile_num" class="form-control form-control-user" placeholder="Mobile Number">
                  </div>
                  <div class="col-sm-6">
                   <h6>Status :  </h6><select name="status" id="status">
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorce">Divorce</option>
                                <option value="Widow">Widow</option>
                                <option value="Widower">Widower</option>
                            </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Religion :</h6> <select name="religion" id="religion">
                                <option value="SDA">Seventh Day Adventist</option>
                                <option value="Christian Protestant">Christian Protestant</option>
                                <option value="Catholic">Catholic</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Confucian">Confucian</option>
                                <option value="Moslem">Moslem</option>
                                <option value="Other">Other</option>
                            </select>
                  </div>
                  <div class="col-sm-6">
                   <h6>Postal Code :  </h6><input type="text" name="postal_code" id="postal_code" class="form-control form-control-user" placeholder="Postal Code">
                  </div>
                </div>

                <div class="form-group">
                  <h6>Home Address : </h6> <textarea name="home_address" id="home_address" cols="84" rows="5"></textarea>
                </div>
                <hr>
       

                <legend><p align="center" class="h5 text-gray-900 mb-4">School Information</p></legend>
                <hr>
              <div class="form-group">
                  <h6>High School's Name : </h6> <input type="text" name="school_name" id="school_name" class="form-control form-control-user" placeholder="High School's Name">
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Program :</h6> <input type="text"name="school_program" id="school_program" class="form-control form-control-user" placeholder="Program">
                  </div>
                  <div class="col-sm-6">
                   <h6>Telephone Number :  </h6><input type="text" name="school_telephone" id="school_telephone" class="form-control form-control-user"  placeholder="Telephone Number">
                  </div>
                </div>

                <div class="form-group">
                  <h6>School Address : </h6> <textarea name="school_address" id="school_address" cols="84" rows="5"></textarea>
                </div>

                <div class="form-group">
                  <h6>Postal Code : </h6> <input type="text" name="school_postal" id="school_postal" class="form-control form-control-user" placeholder="Postal Code">
                </div>
                <hr>

                <legend><p align="center" class="h5 text-gray-900 mb-4">Parent's Information</p></legend>
                <hr>
              <div class="form-group">
                  <h6>Father's Name : </h6> <input type="text" name="father_name" id="father_name" class="form-control form-control-user" placeholder="Father's Name">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Mobile Number :</h6> <input type="text" name="father_mobile" id="father_mobile" class="form-control form-control-user" placeholder="Mobile Number">
                  </div>
                  <div class="col-sm-6">
                   <h6>Email :  </h6><input type="text" name="father_email" id="father_email" class="form-control form-control-user" placeholder="Email">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Education :</h6> <select name="father_education" id="father_education">
                                <option value="Elementary">Elementary</option>
                                <option value="Primary">Primary</option>
                                <option value="Highschool">Highschool</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1 - Bachelor</option>
                                <option value="S2">S2 - Graduate</option>
                                <option value="S3">S3 - Doctor</option>
                            </select>
                  </div>
                  <div class="col-sm-6">
                   <h6>Religion :  </h6> <select name="father_religion" id="father_religion">
                                        <option value="SDA">SDA</option>
                                        <option value="Christian Protestant">Christian Protestant</option>
                                        <option value="Catholic">Catholic</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Confucian">Confucian</option>
                                        <option value="Moslem">Moslem</option>
                                        <option value="Other">Other</option>
                                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <h6>Mother's Name : </h6> <input type="text" name="mother_name" id="mother_name" class="form-control form-control-user"  placeholder="Mother's Name">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Mobile Number :</h6> <input type="text" name="mother_mobile" id="mother_mobile" class="form-control form-control-user" placeholder="Mobile Number">
                  </div>
                  <div class="col-sm-6">
                   <h6>Email :  </h6><input type="text" name="mother_email" id="mother_email" class="form-control form-control-user" placeholder="Email">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <h6>Education :</h6> <select name="mother_education" id="mother_education">
                                <option value="Elementary">Elementary</option>
                                <option value="Primary">Primary</option>
                                <option value="Highschool">Highschool</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1 - Bachelor</option>
                                <option value="S2">S2 - Graduate</option>
                                <option value="S3">S3 - Doctor</option>
                            </select>
                  </div>
                  <div class="col-sm-6">
                   <h6>Religion :  </h6> <select name="mother_religion" id="mother_religion">
                                        <option value="SDA">SDA</option>
                                        <option value="Christian Protestant">Christian Protestant</option>
                                        <option value="Catholic">Catholic</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Confucian">Confucian</option>
                                        <option value="Moslem">Moslem</option>
                                        <option value="Other">Other</option>
                                    </select>
                  </div>
                </div>
                <hr>

                <p align="center"> <input type="checkbox" name="approve" id="approve" value="1">I hereby state that all information on this New Student Registration Form are complete and true. All contents on this form I submitted to Universitas Klabat and Universitas Klabat are not oblidge to return it.</p>

            <p align="center">Airmadidi, <input type="date" name="date_submit" id="date_submit"> </p>
            
            <p align="center">
            <br>
                <button type="reset" class="btn btn-google btn-user btn-block">Reset Form</button>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="Submit">Register</button>
            </p>
             
              </form>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js"></script>
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>

</body>

</html>
