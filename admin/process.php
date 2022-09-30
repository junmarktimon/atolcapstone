<?php

session_start();

include('include/db_config.php');

if($dbconfig){

}else{

    header("Location: include/db_config.php");

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




//code for adding student
if (isset($_POST['addStudent'])){

    $school_id = mysqli_real_escape_string($connection, check_input($_POST['school_id']));
    $fname = mysqli_real_escape_string($connection, check_input(ucwords($_POST['fname'])));
    $mname = mysqli_real_escape_string($connection, check_input(ucwords($_POST['mname'])));
    $lname = mysqli_real_escape_string($connection, check_input(ucwords($_POST['lname'])));
    $year_level = mysqli_real_escape_string($connection, check_input($_POST['year_level']));
    $contact = mysqli_real_escape_string($connection, check_input($_POST['contact']));

        if (!empty($school_id) || !empty($fname) || !empty($lname) || !empty($year_level) || !empty($contact)){

            $dupsql = "SELECT * FROM tbl_student WHERE (school_id = '$school_id' || (fname = '$fname' && mname = '$mname'))";
            $duprow = mysqli_query($connection, $dupsql);

            if (mysqli_num_rows($duprow) > 0){
                $_SESSION['failed'] = "Student Already Exist!";
                header('Location: students.php');

            }else{


                $query = "INSERT INTO tbl_student (school_id,fname,mname,lname,year_level, contact_no) 
                            VALUES 
                        ('$school_id','$fname','$mname','$lname','$year_level', '$contact')";

                $query_run = mysqli_query($connection, $query);


                if ($query_run){

                    // $his_data = "Admin Added New Student(School ID: " . $school_id . ") Successfully!";
                    // $query5 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('1','$idrole','$his_data')";
                    // $query_run5 = mysqli_query($connection,$query5);

                    $lname1 = md5($lname);
                    $query1 = "INSERT INTO tbl_user (username, password, role, gate) VALUES ('$school_id','$lname1','3', '0')";
                    $query_run1 = mysqli_query($connection,$query1);

                    $_SESSION['success'] = "Student Added Successfully!";
                    header('Location: students.php');
                }else{
                    // $his_data = "Admin Encountered Error During Added New Student (School ID: " . $school_id . ")!";
                    // $query5 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('1','$idrole','$his_data')";
                    // $query_run5 = mysqli_query($connection,$query5);

                    $_SESSION['failed'] = "Error Adding Student!";
                    header('Location: students.php');
                }
            }
        
    }

}


//code for updating student data
if (isset($_POST['EditStudent'])){

    $id = mysqli_real_escape_string($connection, check_input($_POST['student_id']));
    $school_id = mysqli_real_escape_string($connection, check_input($_POST['school_id']));
    $fname = mysqli_real_escape_string($connection, check_input(ucwords($_POST['fname'])));
    $mname = mysqli_real_escape_string($connection, check_input(ucwords($_POST['mname'])));
    $lname = mysqli_real_escape_string($connection, check_input(ucwords($_POST['lname'])));
    $year_level = mysqli_real_escape_string($connection, check_input($_POST['year_level']));
    $contact = mysqli_real_escape_string($connection, check_input($_POST['contact']));

        if (!empty($school_id) || !empty($fname) || !empty($lname) || !empty($year_level) || !empty($contact)){

                $query = "UPDATE tbl_student SET school_id='$school_id', fname='$fname',mname='$mname',lname='$lname',year_level='$year_level', contact_no='$contact'  WHERE id='$id' LIMIT 1";

                $query_run = mysqli_query($connection, $query);

                if ($query_run){

                    // $his_data = "Admin Added New Student(School ID: " . $school_id . ") Successfully!";
                    // $query5 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('1','$idrole','$his_data')";
                    // $query_run5 = mysqli_query($connection,$query5);

                    $_SESSION['success'] = "Student Data Update Successfully!";
                    header('Location: students.php');
                }else{
                    // $his_data = "Admin Encountered Error During Added New Student (School ID: " . $school_id . ")!";
                    // $query5 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('1','$idrole','$his_data')";
                    // $query_run5 = mysqli_query($connection,$query5);

                    $_SESSION['failed'] = "Error Updating Data Student!";
                    header('Location: students.php');
                }
        
        }

}




//code for deleting student data
if(isset($_POST['delete_btn'])){

    $delete_id = $_POST['delete_id'];

    $query = "DELETE FROM tbl_student WHERE id ='$delete_id' LIMIT 1";
    $query_run = mysqli_query($connection,$query);

        
    if ($query_run) {

        // $his_data = "Admin Deleted Student Data (School ID: " . $school_id . ") Successfully!";
        // $query5 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('1','$idrole','$his_data')";
        // $query_run5 = mysqli_query($connection,$query5);
        
        $_SESSION['success'] = "Student Deleted Successfully!";
        header("Location: students.php");
    } else {

        $_SESSION['failed'] = "Error Deleting Student data!";
        header("Location: students.php");
    }
    
}