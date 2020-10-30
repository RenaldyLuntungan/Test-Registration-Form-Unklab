<?php
session_start();

$id_collages = $_SESSION["id_collages"];
include_once("config.php");

//$result = mysqli_query($mysqli, "SELECT collages.full_name, jadwal.gelombang FROM collages,jadwal WHERE collages.id_collages=jadwal.id_collages AND jadwal.gelombang=1;");
$result = mysqli_query($mysqli, "SELECT * FROM collages,transaksi WHERE collages.id_collages=$id_collages AND transaksi.id_collages=$id_collages;");
$user_data = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>
$(function(){
    $('#button').on('click',function(){
        window.print();
    });
});
</script>

  <title>UNKLAB - Registration Form</title>
</head>

<body>  
         <form>
           
         <h1>Transaksi</h1>  

                  Full Name &emsp;&emsp;&emsp;&emsp;&ensp;: <?php echo $user_data['full_name'];?> <br>              
                  Registration Number &nbsp;: <?php echo $user_data['reg_num'];?> <br>
                  Waktu Pendaftaran &ensp;&ensp;: <?php echo $user_data['date_submit'];?> <br><br>
                
                <table border="1">
                  
                  <tr> 
                 
                      <th width ="200px">Biaya</th>
                      <th width ="100px">Harga</th>
                      <th width ="150px">Status Pembayaran</th>
                      <th width ="150px">Waktu Pembayaran</th>
                      
                  </tr>
                  <?php
                       
                            echo "<tr>";
                            
                            echo "<td width ='200px'>"."Pendaftaran & Tes Kesehatan"."</td>";
                            echo "<td width ='100px'>"."Rp.790.000"."</td>";
                            echo "<td width ='150px'>".$user_data['status_transaksi']."</td>";
                            echo "<td width ='150px'>".""."</td>";
                            echo "</tr>";

                        
                        ?>
                    </tbody>
                </table>
                <br>
               <button type="button" name="button" id="button">print tagihan</button>

</body>

</html>
