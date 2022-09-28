<?php 

include '../process.php';

if(!$_SESSION['username']){

    header("Location: ../index.php");
}

if($_SESSION['role'] != 1){

    header("Location: ../index.php");

}

include 'include/header.php';

include 'include/sidebar.php';

include 'include/topbar.php';

include 'include/pagecontent.php';


include 'include/footer.php';