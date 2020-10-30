<?php
session_start();

$id_collages = $_SESSION["id_collages"];

include("config.php");

//gelombang 1
if($id_collages<=8){

    $reg_num = 101000 + $id_collages;
    $number = mysqli_query($mysqli, "UPDATE collages SET reg_num = '$reg_num' WHERE id_collages = '$id_collages'");

    if($id_collages<=4){

        if($id_collages<=2){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','1','21/05/2020','A','09:00','GA-201','A','13:00','GK1-101','A','11:00','GK1-204')");
             header("Location: transaksi.php");
        }
        else if($id_collages<=4){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','1','21/05/2020','B','09:00','GA-202','A','13:00','GK1-101','A','11:00','GK1-204')");
            header("Location: transaksi.php");
        }
    }

    else if($id_collages<=8){
       
         if($id_collages<=6){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','1','21/05/2020','C','13:00','GA-201','B','09:00','GK1-101','B','15:00','GK1-204')");
            header("Location: transaksi.php");
        }
        else if($id_collages<=8){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','1','21/05/2020','D','13:00','GA-202','B','09:00','GK1-101','B','15:00','GK1-204')");
            header("Location: transaksi.php");
        }
    }
}

//gelombang 2
else if($id_collages<=16){

    $reg_num = 102000 + $id_collages - 8;
    $number = mysqli_query($mysqli, "UPDATE collages SET reg_num = '$reg_num' WHERE id_collages = '$id_collages'");

    if($id_collages<=12){

        if($id_collages<=10){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','2','20/05/2020','A','09:00','GA-201','A','13:00','GK1-101','A','11:00','GK1-204')");
            header("Location: transaksi.php");
        }
        else if($id_collages<=12){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','2','20/05/2020','B','09:00','GA-202','A','13:00','GK1-101','A','11:00','GK1-204')");
            header("Location: transaksi.php");
        }
    }

    else if($id_collages<=16){

        if($id_collages<=14){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','2','20/05/2020','C','13:00','GA-201','B','09:00','GK1-101','B','15:00','GK1-204')");
            header("Location: transaksi.php");
        }
        else if($id_collages<=16){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','2','20/05/2020','D','13:00','GA-202','B','09:00','GK1-101','B','15:00','GK1-204')");
            header("Location: transaksi.php");
        }
    }
}

//gelombang 3
else if($id_collages<=24){

    $reg_num = 103000 + $id_collages - 16;
    $number = mysqli_query($mysqli, "UPDATE collages SET reg_num = '$reg_num' WHERE id_collages = '$id_collages'");
    
    if($id_collages<=20){

        if($id_collages<=18){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','3','20/06/2020','A','09:00','GA-201','A','13:00','GK1-101','A','11:00','GK1-204')");
            header("Location: transaksi.php");
        }
        else if($id_collages<=20){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','3','20/06/2020','B','09:00','GA-202','A','13:00','GK1-101','A','11:00','GK1-204')");
            header("Location: transaksi.php");
        }
    }

    else if($id_collages<=24){

        if($id_collages<=22){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','3','20/06/2020','C','13:00','GA-201','B','09:00','GK1-101','B','15:00','GK1-204')");
            header("Location: transaksi.php");
        }
        else if($id_collages<=24){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','3','20/06/2020','D','13:00','GA-202','B','09:00','GK1-101','B','15:00','GK1-204')");
            header("Location: transaksi.php");
        }
    }

}

/*
//gelombang 4
else if($id_collages<=32){

    $reg_num = 103000 + $id_collages - 24;
    $number = mysqli_query($mysqli, "UPDATE collages SET reg_num = '$reg_num' WHERE id_collages = '$id_collages'");
    
    if($id_collages<=28){

        if($id_collages<=26){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','4','20/06/2020','A','09:00','GA-201','A','13:00','GK1-101','A','11:00','GK1-204')");
            header("Location: transaksi.php");
        }
        else if($id_collages<=28){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','4','20/06/2020','B','09:00','GA-202','A','13:00','GK1-101','A','11:00','GK1-204')");
            header("Location: transaksi.php");
        }
    }

    else if($id_collages<=32){

        if($id_collages<=30){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','4','20/06/2020','C','13:00','GA-201','B','09:00','GK1-101','B','15:00','GK1-204')");
            header("Location: transaksi.php");
        }
        else if($id_collages<=32){
            $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
            waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika,paralel_kesehatan,
            waktu_kesehatan,tempat_kesehatan)
            VALUES ('$id_collages','4','20/06/2020','D','13:00','GA-202','B','09:00','GK1-101','B','15:00','GK1-204')");
            header("Location: transaksi.php");
        }
    }

}
*/


/*

    //gelombang 1
    if($id_collages<=150){

        $reg_num = 101000 + $id_collages;
        $number = mysqli_query($mysqli, "UPDATE collages SET reg_num = '$reg_num' WHERE id_collages = '$id_collages'");

        if($id_collages<=75){

            if($id_collages<=25){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','1','21/05/2020','A','09:00','GA-201','A','13:00','GK1-101')");
            }
            else if($id_collages<=50){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','1','21/05/2020','B','09:00','GA-202','A','13:00','GK1-101')");
            }
            else if($id_collages<=75){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','1','21/05/2020','C','09:00','GA-203','A','13:00','GK1-101')");
            }

        }

        else if($id_collages<=150){
           
             if($id_collages<=100){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','1','21/05/2020','D','13:00','GA-201','B','09:00','GK1-101')");
            }
            else if($id_collages<=125){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','1','21/05/2020','E','13:00','GA-202','B','09:00','GK1-101')");
            }
            else if($id_collages<=150){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','1','21/05/2020','F','13:00','GA-203','B','09:00','GK1-101')");
            }
              
        }
    }

    //gelombang 2
    else if($id_collages<=300){

        $reg_num = 102000 + $id_collages - 150;
        $number = mysqli_query($mysqli, "UPDATE collages SET reg_num = '$reg_num' WHERE id_collages = '$id_collages'");

        if($id_collages<=225){

            if($id_collages<=175){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','2','20/06/2020','A','09:00','GA-201','A','13:00','GK1-101')");
            }
            else if($id_collages<=200){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','2','20/06/2020','B','09:00','GA-202','A','13:00','GK1-101')");
            }
            else if($id_collages<=225){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','2','20/05/2020','C','09:00','GA-203','A','13:00','GK1-101')");
            }

        }

        else if($id_collages<=300){

            if($id_collages<=250){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','2','20/05/2020','D','13:00','GA-201','B','09:00','GK1-101')");
            }
            else if($id_collages<=275){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','2','20/05/2020','E','13:00','GA-202','B','09:00','GK1-101')");
            }
            else if($id_collages<=300){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','2','20/05/2020','F','13:00','GA-203','B','09:00','GK1-101')");
            }

        }

    }

    //gelombang 3
    else if($id_collages<=450){

        $reg_num = 103000 + $id_collages - 300;
        $number = mysqli_query($mysqli, "UPDATE collages SET reg_num = '$reg_num' WHERE id_collages = '$id_collages'");
        
        if($id_collages<=375){

            if($id_collages<=325){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','3','20/06/2020','A','09:00','GA-201','A','13:00','GK1-101')");
            }
            else if($id_collages<=350){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','3','20/06/2020','B','09:00','GA-202','A','13:00','GK1-101')");
            }
            else if($id_collages<=375){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','3','20/05/2020','C','09:00','GA-203','A','13:00','GK1-101')");
            }

        }

        else if($id_collages<=450){

            if($id_collages<=400){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','3','20/06/2020','D','13:00','GA-201','B','09:00','GK1-101')");
            }
            else if($id_collages<=425){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','3','20/06/2020','E','13:00','GA-202','B','09:00','GK1-101')");
            }
            else if($id_collages<=450){
                $result = mysqli_query($mysqli, "INSERT INTO jadwal(id_collages,gelombang,tanggal,paralel_bahasa_ing,
                waktu_bahasa_ing,tempat_bahasa_ing,paralel_matematika,waktu_matematika,tempat_matematika)
                VALUES ('$id_collages','3','20/05/2020','F','13:00','GA-203','B','09:00','GK1-101')");
            }

        }

    }
*/
?>