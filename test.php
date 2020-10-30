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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unklab Registration Form</title>
</head>
<body>
    <h1 align="center">UNKLAB Registration Form for New Student</h1>

    

    <div align="center">
        <form action="test.php" method="post" name="form1">
        <p align="center">
        NIK :  
        <input type="text" name="nik" id="nik" value=""> 
        

       
    </p>
            <fieldset>
                <legend>Personal Information</legend>
                <table>
                    <tr>
                        <td>Full Name</td>
                        <td colspan="3"> : <input type="text" name="full_name" id="full_name" size="62"> </td>
                    </tr>
                    <tr>
                        <td>Birthplace</td>
                        <td> : <input type="text" name="birthplace" id="birthplace"> </td>
                        <td>Date of Birth</td>
                        <td> : <input type="date" name="dob" id="dob"> </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td> 
                            : <input type="radio" name="gender"  value="M"> Male 
                            <input type="radio" name="gender"  value="F"> Female
                            
                        </td>
                        <td>Blood Type</td>
                        <td>
                            : <input type="radio" name="blood"  value="A"> A 
                            <input type="radio" name="blood" value="B"> B
                            <input type="radio" name="blood"  value="AB"> AB
                            <input type="radio" name="blood"  value="O"> O
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Tribe</td>
                        <td> : <input type="text" name="tribe" id="tribe"> </td>
                        <td>Email</td>
                        <td> : <input type="email" name="email" id="email"> </td>
                    </tr>
                    <tr>
                        <td>Telephone Number</td>
                        <td> : <input type="tel" name="telephone_num" id="telephone_num"> </td>
                        <td>Mobile Number</td>
                        <td> : <input type="tel" name="mobile_num" id="mobile_num"> </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td> : 
                            <select name="status" id="status">
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorce">Divorce</option>
                                <option value="Widow">Widow</option>
                                <option value="Widower">Widower</option>
                            </select>
                        </td>
                        <td>Religion</td>
                        <td> : 
                            <select name="religion" id="religion">
                                <option value="SDA">Seventh Day Adventist</option>
                                <option value="Christian Protestant">Christian Protestant</option>
                                <option value="Catholic">Catholic</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Confucian">Confucian</option>
                                <option value="Moslem">Moslem</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Home Address</td>
                        <td colspan="3"> <textarea name="home_address" id="home_address" cols="30" rows="10"></textarea> </td>
                    </tr>
                    <tr>
                        <td>Postal Code</td>
                        <td colspan="3"> : <input type="text" name="postal_code" id="postal_code"> </td>
                    </tr>
                </table>
            </fieldset>

            <p>&nbsp;</p>

            <fieldset>
                <legend>School Information</legend>
                <table>
                    <tr>
                        <td>High school's Name</td>
                        <td colspan="3"> : <input type="text" name="school_name" id="school_name" size="65"> </td>
                    </tr>
                    <tr>
                        <td>Program</td>
                        <td> : <input type="text" name="school_program" id="school_program"> </td>
                        <td>Telephone Number</td>
                        <td> : <input type="tel" name="school_telephone" id="school_telephone"> </td>
                    </tr>
                    <tr>
                        <td>School's Address</td>
                        <td colspan="3"> <textarea name="school_address" id="school_address" cols="30" rows="10"></textarea> </td>
                    </tr>
                    <tr>
                        <td>Postal Code</td>
                        <td colspan="3"> : <input type="text" name="school_postal" id="school_postal"> </td>
                    </tr>
                </table>
            </fieldset>

            <p>&nbsp;</p>

            <fieldset>
                <legend>Parent's Information</legend>
                <table>
                    <tr>
                        <td>Father's Name</td>
                        <td colspan="3"> : <input type="text" name="father_name" id="father_name" size="54"> </td>
                    </tr>
                    <tr>
                        <td>Mobile Number</td>
                        <td> : <input type="tel" name="father_mobile" id="father_mobile"> </td>
                        <td>Email</td>
                        <td> : <input type="email" name="father_email" id="father_email"> </td>
                    </tr>
                    <tr>
                        <td>Education</td>
                        <td> : 
                            <select name="father_education" id="father_education">
                                <option value="Elementary">Elementary</option>
                                <option value="Primary">Primary</option>
                                <option value="Highschool">Highschool</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1 - Bachelor</option>
                                <option value="S2">S2 - Graduate</option>
                                <option value="S3">S3 - Doctor</option>
                            </select>
                        </td>
                        <td>Religion</td>
                        <td> : 
                                <select name="father_religion" id="father_religion">
                                        <option value="SDA">SDA</option>
                                        <option value="Christian Protestant">Christian Protestant</option>
                                        <option value="Catholic">Catholic</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Confucian">Confucian</option>
                                        <option value="Moslem">Moslem</option>
                                        <option value="Other">Other</option>
                                    </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mother's Name</td>
                        <td colspan="3"> : <input type="text" name="mother_name" id="mother_name" size="54"> </td>
                    </tr>
                    <tr>
                        <td>Mobile Number</td>
                        <td> : <input type="tel" name="mother_mobile" id="mother_mobile"> </td>
                        <td>Email</td>
                        <td> : <input type="email" name="mother_email" id="mother_email"> </td>
                    </tr>
                    <tr>
                        <td>Education</td>
                        <td> : 
                            <select name="mother_education" id="mother_education">
                                <option value="Elementary">Elementary</option>
                                <option value="Primary">Primary</option>
                                <option value="Highschool">Highschool</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1 - Bachelor</option>
                                <option value="S2">S2 - Graduate</option>
                                <option value="S3">S3 - Doctor</option>
                            </select>
                        </td>
                        <td>Religion</td>
                        <td> : 
                            <select name="mother_religion" id="mother_religion">
                                <option value="SDA">SDA</option>
                                <option value="Christian Protestant">Christian Protestant</option>
                                <option value="Catholic">Catholic</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Confucian">Confucian</option>
                                <option value="Moslem">Moslem</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>

          

            <p align="center"> <input type="checkbox" name="approve" id="approve" value="1">I hereby state that all information on this New Student Registration Form are complete and true. <br> All contents on this form I submitted to Universitas Klabat and Universitas Klabat are not oblidge to return it.</p>

            <p align="center">Airmadidi, <input type="date" name="date_submit" id="date_submit"> </p>
            
            <p align="center">
                <button type="reset">Reset Form</button>
                <button type="submit" name="Submit">Register</button>
            </p>
        </form>
    </div>

    <p>&nbsp;</p><p>&nbsp;</p>
</body>
</html>
