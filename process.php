<?php

session_start();

include('include/db_config.php');

if($dbconfig){

}else{

    header("Location: include/db_config.php");

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