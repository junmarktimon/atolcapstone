<?php

session_start();

include('../admin/include/db_config.php');

if($dbconfig){

}else{

    header("Location: ../admininclude/db_config.php");

}

if(!$_SESSION['username']){

	header("Location: ../index.php");
}



//validate data
function check_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


function insert_history($user_role, $id_role, $message){

    $query_history = "";

}




//code for adding data from qr code operate by user
if(isset($_POST['yourInputFieldId'])){

    $name = mysqli_real_escape_string($connection,$_POST['yourInputFieldId']);
    date_default_timezone_set("Asia/Manila");
    $time = date("h:i:sa");
    $date = date('Y-m-d');

    if (!empty($name)) {

        $dupsql = "SELECT * FROM tbl_student WHERE school_id = '$name' LIMIT 1";
        $duprow = mysqli_query($connection, $dupsql);

        if (mysqli_num_rows($duprow) > 0) {

            $dupsql1 = "SELECT * FROM tbl_main_attendance WHERE student_id = '$name' AND log_date = '$date' AND status = '0' LIMIT 1";
            $duprow1 = mysqli_query($connection, $dupsql1);

            if (mysqli_num_rows($duprow1) > 0) {

                $query = "UPDATE tbl_main_attendance SET time_out = '$time', status = '1', gate = '2' WHERE student_id = '$name' AND log_date = '$date' AND status = '0'";
                $query_run = mysqli_query($connection, $query);

                if ($query_run) {

                    $_SESSION['success'] = "Student Time Out Successfully";
                    header('Location: index.php');
         
                }


            }else{

                $query = "INSERT INTO tbl_main_attendance (student_id, time_in, log_date, status, gate) VALUES ('$name', '$time', '$date', '0', '1')";
                $query_run = mysqli_query($connection, $query);

                if ($query_run) {

                    $_SESSION['success'] = "Student Time In Successfully";
                    header('Location: index.php');
         
                }

            }


        }else{

            $_SESSION['failed'] = "This QR Code is not recognize. Please Provide a valid QR Code.";
            header('Location: index.php');

        }

    }
    

}















         

            


             
         
     
 
