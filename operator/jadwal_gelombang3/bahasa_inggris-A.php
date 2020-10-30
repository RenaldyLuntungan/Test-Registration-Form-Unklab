<?php
session_start();
if( !isset($_SESSION["login"])){
    header("Location: login.php");  
    exit;
}

include_once("../../config.php");

//$result = mysqli_query($mysqli, "SELECT collages.full_name, jadwal.gelombang FROM collages,jadwal WHERE collages.id_collages=jadwal.id_collages AND jadwal.gelombang=1;");
$result = mysqli_query($mysqli, "SELECT * FROM collages,jadwal WHERE collages.id_collages=jadwal.id_collages AND jadwal.gelombang=3 AND jadwal.paralel_bahasa_ing='A';");
$no=1;
?>

<!DOCTYPE html>
<html>

<head>

  <title>Gelombang 3 - Bahasa Inggris-A</title>
 
</head>

<body>

<h2>Berita Acara</h2>
Gelombang : &ensp;3<br>
Test &emsp;&emsp;&emsp;: &ensp;Bahasa Inggris<br>
Paralel&emsp;&emsp;: &ensp;A<br>
Waktu &emsp;&emsp;: &ensp;20/06/2020 09:00<br>
Tempat&ensp;&nbsp;&emsp;: &ensp;GA-201<br><br>
                <table border="1">
                  
                  <tr> 
                  <th width ="40px">No</th>
                      <th width ="100px">Registration Number</th>
                      <th width ="400px">Name</th>
                      <th width ="100px">TTD</th>
                      
                  </tr>
                  <?php
                        while($user_data = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td width ='40px'>"."<center>".$no."</center>"."</td>";
                            $no++;
                            echo "<td width ='100px'>"."<center>".$user_data['reg_num']."</center>"."</td>";
                            echo "<td width ='400px'>".$user_data['full_name']."</td>";
                            echo "<td width ='100px'></td>";
                            
                            echo "</tr>";
                        }
                        ?>

                  </tbody>
                </table>
  
</body>

</html>
