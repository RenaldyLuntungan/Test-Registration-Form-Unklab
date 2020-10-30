<?php
session_start();
if( !isset($_SESSION["login"])){
    header("Location: login.php");  
    exit;
}

include_once("../config.php");

//$result = mysqli_query($mysqli, "SELECT collages.full_name, jadwal.gelombang FROM collages,jadwal WHERE collages.id_collages=jadwal.id_collages AND jadwal.gelombang=1;");
$result = mysqli_query($mysqli, "SELECT * FROM collages,jadwal WHERE collages.id_collages=jadwal.id_collages AND jadwal.gelombang=1;");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Operator - Table</title>

  <!-- Custom fonts for this template -->
  <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="operator.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Operator</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Heading -->
      <div class="sidebar-heading">
        Dashboard
      </div>

      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Table Components:</h6>
            <a class="collapse-item" href="operator.php">All</a>
            <a class="collapse-item" href="gelombang1.php">Gelombang 1</a>
            <a class="collapse-item" href="gelombang2.php">Gelombang 2</a>
            <a class="collapse-item" href="gelombang3.php">Gelombang 3</a>
          </div>
        </div>
          
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
      
   
      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION["username"];?></span>
          
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
           
          </a>
        </div>
      </li>

    </ul>

  </nav>
  
  <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Berita Acara</h1>
          <a href="jadwal_gelombang1/bahasa_inggris-A.php">[Bahasa Inggris - A]</a>&emsp;
          <a href="jadwal_gelombang1/bahasa_inggris-B.php">[Bahasa Inggris - B]</a>&emsp;
          <a href="jadwal_gelombang1/bahasa_inggris-C.php">[Bahasa Inggris - C]</a>&emsp;
          <a href="jadwal_gelombang1/bahasa_inggris-D.php">[Bahasa Inggris - D]</a><br>
          <a href="jadwal_gelombang1/kesehatan-A.php">[Kesehatan - A]</a>&emsp;
          <a href="jadwal_gelombang1/kesehatan-B.php">[Kesehatan - B]</a><br>
          <a href="jadwal_gelombang1/matematika-A.php">[Matematika - A]</a>&emsp;
          <a href="jadwal_gelombang1/matematika-B.php">[Matematika - B]</a>
          <br><br>
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">Table Pendaftar Gelombang 1</p>

          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Gelombang 1</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                  <tr> 
                  <th width ="20px">No</th>
                      <th width ="100px">Registration Number</th>
                      <th width ="40px">Full Name</th>
                      <th width ="60px">Birthplace</th>
                      <th width ="60px">Date of Birth</th>
                      <th width ="60px">Gender</th>
                      <th width ="400px">Blood</th>
                      <th width ="60px">Tribe</th>
                      <th width ="60px">Email</th>
                      <th width ="60px">Telephone Number</th>
                      <th width ="60px">Mobile Number</th>
                      <th width ="60px">Status</th>
                      <th width ="60px">Religion</th>
                      <th width ="60px">Home Address</th>
                      <th width ="60px">Postal Code</th>
                      <th width ="60px">School Name</th>
                      <th width ="60px">School Program</th>
                      <th width ="60px">School Telephone</th>
                      <th width ="60px">School Address</th>
                      <th width ="60px">School Postal</th>
                      <th width ="60px">Father Name</th>
                      <th width ="60px">Father Mobile</th>
                      <th width ="60px">Father Email</th>
                      <th width ="60px">Father Education</th>
                      <th width ="60px">Father Religion</th>
                      <th width ="60px">Mother Name</th>
                      <th width ="60px">Mother Mobile</th>
                      <th width ="60px">Mother Email</th>
                      <th width ="60px">Mother Education</th>
                      <th width ="60px">Mother Religion</th>
                      <th width ="60px">Date Submit</th>
                      
                  </tr>
                  <?php
                        while($user_data = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td width ='20px'>".$user_data['id_collages']."</td>";
                            echo "<td width ='100px'>".$user_data['reg_num']."</td>";
                            echo "<td width ='40px'>".$user_data['full_name']."</td>";
                            echo "<td width ='60px'>".$user_data['birthplace']."</td>";
                            echo "<td width ='60px'>".$user_data['dob']."</td>";
                            echo "<td width ='60px'>".$user_data['gender']."</td>";
                            echo "<td width ='60px'>".$user_data['blood']."</td>";
                            echo "<td width ='60px'>".$user_data['tribe']."</td>";
                            echo "<td width ='60px'>".$user_data['email']."</td>";
                            echo "<td width ='60px'>".$user_data['telephone_num']."</td>";
                            echo "<td width ='60px'>".$user_data['mobile_num']."</td>";
                            echo "<td width ='60px'>".$user_data['status']."</td>";
                            echo "<td width ='60px'>".$user_data['religion']."</td>";
                            echo "<td width ='60px'>".$user_data['home_address']."</td>";
                            echo "<td width ='60px'>".$user_data['postal_code']."</td>";
                            echo "<td width ='60px'>".$user_data['school_name']."</td>";
                            echo "<td width ='60px'>".$user_data['school_program']."</td>";
                            echo "<td width ='60px'>".$user_data['school_telephone']."</td>";
                            echo "<td width ='60px'>".$user_data['school_address']."</td>";
                            echo "<td width ='60px'>".$user_data['school_postal']."</td>";
                            echo "<td width ='60px'>".$user_data['father_name']."</td>";
                            echo "<td width ='60px'>".$user_data['father_mobile']."</td>";
                            echo "<td width ='60px'>".$user_data['father_email']."</td>";
                            echo "<td width ='60px'>".$user_data['father_education']."</td>";
                            echo "<td width ='60px'>".$user_data['father_religion']."</td>";
                            echo "<td width ='60px'>".$user_data['mother_name']."</td>";
                            echo "<td width ='60px'>".$user_data['mother_mobile']."</td>";
                            echo "<td width ='60px'>".$user_data['mother_email']."</td>";
                            echo "<td width ='60px'>".$user_data['mother_education']."</td>";
                            echo "<td width ='60px'>".$user_data['mother_religion']."</td>";
                            echo "<td width ='60px'>".$user_data['date_submit']."</td>";
                            echo "</tr>";
                        }
                        ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

  <!-- Page level plugins -->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="startbootstrap-sb-admin-2-gh-pages/js/demo/datatables-demo.js"></script>

</body>

</html>
