<?php 

    include '../process.php';

    include 'include/header.php';

    include 'include/sidebar.php';

    include 'include/topbar.php';

?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="students.php">Student</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Student</li>
            </ol>   
        </nav>

        <div class="card-body">

                	<?php

                if(isset($_POST['btn_view_student'])){

                    $view_student_id = mysqli_real_escape_string($connection, check_input($_POST['view_student_id']));
                    $view_student_school_id = mysqli_real_escape_string($connection, check_input($_POST['view_student_school_id']));
                    $view_student_fname = mysqli_real_escape_string($connection, check_input($_POST['view_student_fname']));
                    $view_student_mname = mysqli_real_escape_string($connection, check_input($_POST['view_student_mname']));
                    $view_student_lname = mysqli_real_escape_string($connection, check_input($_POST['view_student_lname']));
                    $view_student_contact_no = mysqli_real_escape_string($connection, check_input($_POST['view_student_contact_no']));

                    //$student_complete_name = $view_student_fname . " " . $view_student_mname . " " . $view_student_lname;

                    //echo $student_complete_name;

                    ?>

                    <input type="hidden" id="student_complete_name" value="<?php echo htmlspecialchars($view_student_school_id); ?>">

                    

                    <?php

                }

                    ?>

<div id="qrcode"> </div>



            </div>




         

    </div>





<?php

    include 'include/footer.php';

?>