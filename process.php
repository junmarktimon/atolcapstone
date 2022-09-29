<?php

session_start();

include('admin/include/db_config.php');

if($dbconfig){

}else{

    header("Location: admin/include/db_config.php");

}

if(!$_SESSION['username']){

	header("Location: index.php");
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


//code for login
if(isset($_POST['btn_login'])){

    $username_login = mysqli_real_escape_string($connection, check_input($_POST['username']));
    $password_login = md5(mysqli_real_escape_string($connection, check_input($_POST['password'])));


        if(!empty($username_login) && !empty($password_login)){
                
                    $query = "SELECT * FROM tbl_user WHERE username = '$username_login' AND password ='$password_login'";
                    

                    $query_run = mysqli_query($connection, $query);

                    if(mysqli_num_rows($query_run) > 0){
                        // $query_run1 = mysqli_query($connection,$query1);
                        $row = mysqli_fetch_assoc($query_run);
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['role'] = $row['role'];
                        $_SESSION['gate'] = $row['gate'];
                       

                        if($_SESSION["role"] == 1){
                            // $his_data = "Admin Login Successfully!";
                            // $query1 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('1','$idrole','$his_data')";
                            // $query_run1 = mysqli_query($connection,$query1);

                            $_SESSION['username'] = $username_login;
                            $_SESSION['id'];
                            $_SESSION['role'];
                            header("Location:admin");
                            exit;
                        }elseif ($_SESSION["role"] == 2){
                            // $his_data = "Staff Login Successfully!";
                            // $query1 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('2','$idrole','$his_data')";
                            // $query_run1 = mysqli_query($connection,$query1);

                            $_SESSION['username'] = $username_login;
                            $_SESSION['id'];
                            $_SESSION['role'];
                            header("Location:staff");
                            exit;
                        }elseif ($_SESSION["role"] == 3){
                            // $his_data = "User Login Successfully!";
                            // $query1 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('3','$idrole','$his_data')";
                            // $query_run1 = mysqli_query($connection,$query1);

                            $_SESSION['username'] = $username_login;
                            $_SESSION['id'];
                            $_SESSION['role'];
                            $_SESSION['gate'];
                            header("Location:user");
                            exit;
                        }

                    }else{
                        // $his_data = "Login failed!";
                        // $query1 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('0','0','$his_data')";
                        // $query_run1 = mysqli_query($connection,$query1);
                        
                        $_SESSION['status'] = "Username/Password is Invalid!";
                        header('Location: index.php');
                    }
        }else{

            $_SESSION['status'] = "Username/Password not be Empty!";
            header('Location: index.php');
        }


}




//code for adding student
if (isset($_POST['addStudent'])){

    $school_id = mysqli_real_escape_string($connection, check_input($_POST['school_id']));
    $fname = mysqli_real_escape_string($connection, check_input(ucwords($_POST['fname'])));
    $mname = mysqli_real_escape_string($connection, check_input(ucwords($_POST['mname'])));
    $lname = mysqli_real_escape_string($connection, check_input(ucwords($_POST['lname'])));
    $year_level = mysqli_real_escape_string($connection, check_input($_POST['year_level']));

        if (!empty($school_id) || !empty($fname) || !empty($lname) || !empty($year_level)){

            $dupsql = "SELECT * FROM tbl_student WHERE (school_id = '$school_id' || fname = '$fname' && mname = '$mname' && yr_level = '$year_level')";
            $duprow = mysqli_query($connection, $dupsql);

            if (mysqli_num_rows($duprow) > 0){
                $_SESSION['failed'] = "Student Already Exist!";
                header('Location: students.php');

            }else{


                $query = "INSERT INTO tbl_student (school_id,fname,mname,lname,yr_level) 
                            VALUES 
                        ('$school_id','$fname','$mname','$lname','$year_level')";

                $query_run = mysqli_query($connection, $query);


                if ($query_run){

                    // $his_data = "Admin Added New Student(School ID: " . $school_id . ") Successfully!";
                    // $query5 = "INSERT INTO tbl_history (user_role, id, description) VALUES ('1','$idrole','$his_data')";
                    // $query_run5 = mysqli_query($connection,$query5);

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