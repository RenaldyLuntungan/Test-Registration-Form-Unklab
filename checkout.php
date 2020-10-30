<?php

namespace Midtrans;
session_start();

$id_collages = $_SESSION["id_collages"];
include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM collages,jadwal,transaksi WHERE collages.id_collages=$id_collages AND jadwal.id_collages=$id_collages AND transaksi.id_collages=$id_collages;");
$user_data = mysqli_fetch_array($result);

require_once dirname(__FILE__) . '/snap/Midtrans.php';

//Set Your server key
Config::$serverKey = "SB-Mid-server-SolfYScQZQM4scnTUxXtIuGi";

// Uncomment for production environment
Config::$isProduction = false;

// Enable sanitization
Config::$isSanitized = true;

// Enable 3D-Secure
Config::$is3ds = true;

// Required
$transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => 790000, // no decimal allowed for creditcard
);

// Optional
$item1_details = array(
    'id' => 'a1',
    'price' => 790000,
    'quantity' => 1,
    'name' => "Pendaftaran"
);


// Optional
$item_details = array ($item1_details);



// Fill transaction details
$transaction = array(
 
    'transaction_details' => $transaction_details,
    
    'item_details' => $item_details,
);

$snapToken = Snap::getSnapToken($transaction);

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

    <div class="col-xl-10 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>UNKLAB Registration Student Information</b></h1>
              </div>
              
              <form>
           
                <legend><p align="center" class="h5 text-gray-900 mb-4">Personal Information</p></legend>
                
                <div class="form-group">
                  <h6>Full Name &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;: <?php echo $user_data['full_name'];?> </h6> 
                </div>
                <div class="form-group">
                  <h6>Registration Number : <?php echo $user_data['reg_num'];?> </h6> 
                </div>
                <hr>

                <legend><p align="center" class="h5 text-gray-900 mb-4">Test Schedule</p></legend>

                <div class="form-group">
                  <h6>Gelombang &emsp;&emsp;&emsp;&emsp;: <?php echo $user_data['gelombang'];?> </h6> 
                </div>

                <div class="form-group">
                  <h6>Waktu Pelaksanaan &ensp;&nbsp;: <?php echo $user_data['tanggal'];?> </h6> 
                </div>
               
                 <p align="right"> <button><a href="print_jadwal.php" target="_blank">Print Jadwal</a></button></p>
                
                <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                  <tr> 
                 
                      <th width ="100px">Test</th>
                      <th width ="40px">Paralel</th>
                      <th width ="60px">Waktu</th>
                      <th width ="60px">Tempat</th>
                      
                  </tr>
                  <?php
                       
                            echo "<tr>";
                            
                            echo "<td width ='100px'>"."Bahasa Inggris"."</td>";
                            echo "<td width ='40px'>".$user_data['paralel_bahasa_ing']."</td>";
                            echo "<td width ='60px'>".$user_data['waktu_bahasa_ing']."</td>";
                            echo "<td width ='60px'>".$user_data['tempat_bahasa_ing']."</td>";
                            echo "</tr>";

                            echo "<tr>";
                            
                            echo "<td width ='100px'>"."Matematika"."</td>";
                            echo "<td width ='40px'>".$user_data['paralel_matematika']."</td>";
                            echo "<td width ='60px'>".$user_data['waktu_matematika']."</td>";
                            echo "<td width ='60px'>".$user_data['tempat_matematika']."</td>";
                            echo "</tr>";

                            echo "<tr>";
                            
                            echo "<td width ='100px'>"."Kesehatan"."</td>";
                            echo "<td width ='40px'>".$user_data['paralel_kesehatan']."</td>";
                            echo "<td width ='60px'>".$user_data['waktu_kesehatan']."</td>";
                            echo "<td width ='60px'>".$user_data['tempat_kesehatan']."</td>";
                            echo "</tr>";
                        
                        ?>

                  </tbody>
                </table>
              </div>
            </div>

                  <h6>Status Pembayaran : <?php echo $user_data['status_transaksi'];?></h6> 
                  
                 
              </form>


        <button id="pay-button">Bayar Sekarang!</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
        <button><a href="print_tagihan.php" target="_blank">Print Tagihan</a></button></p>
        <pre><div id="result-json"><br></div></pre> 

        <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-YZgZ_asy8Y82BBA0"></script>
        <script type="text/javascript">
            document.getElementById('pay-button').onclick = function(){
                // SnapToken acquired from previous step
                snap.pay('<?php echo $snapToken?>', {
                    // Optional
                    onSuccess: function(result){
                      
                    },
                    // Optional
                    onPending: function(result){
                    
              
                    },
                    // Optional
                    onError: function(result){
                        
                    }
                   
                });
            };
        </script>
             
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
