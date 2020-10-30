<?php
session_start();

$id_collages = $_SESSION["id_collages"];
include_once("config.php");

//$result = mysqli_query($mysqli, "SELECT collages.full_name, jadwal.gelombang FROM collages,jadwal WHERE collages.id_collages=jadwal.id_collages AND jadwal.gelombang=1;");
$result = mysqli_query($mysqli, "SELECT * FROM collages,jadwal WHERE collages.id_collages=$id_collages AND jadwal.id_collages=$id_collages;");
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
           
         <h1>Test Schedule</h1>  

                  Full Name &emsp;&emsp;&emsp;&emsp;&ensp;: <?php echo $user_data['full_name'];?> <br>              
                  Registration Number &nbsp;: <?php echo $user_data['reg_num'];?> <br>
                  Gelombang &emsp;&emsp;&emsp;&emsp;: <?php echo $user_data['gelombang'];?>  <br>
                  Waktu Pelaksanaan &ensp;&nbsp;: <?php echo $user_data['tanggal'];?> <br><br>
                
                <table border="1">
                  
                  <tr> 
                 
                      <th width ="120px">Test</th>
                      <th width ="90px">Paralel</th>
                      <th width ="100px">Waktu</th>
                      <th width ="100px">Tempat</th>
                      
                  </tr>
                  <?php
                       
                            echo "<tr>";
                            
                            echo "<td width ='120px'>"."Bahasa Inggris"."</td>";
                            echo "<td width ='90px'>".$user_data['paralel_bahasa_ing']."</td>";
                            echo "<td width ='100px'>".$user_data['waktu_bahasa_ing']."</td>";
                            echo "<td width ='100px'>".$user_data['tempat_bahasa_ing']."</td>";
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
                <br>
               <button type="button" name="button" id="button">print jadwal</button>
</body>

</html>
