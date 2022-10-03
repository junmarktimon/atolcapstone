<?php 

    include '../process.php';

    if(!$_SESSION['username']){

        header("Location: ../index.php");
    }

    if($_SESSION['role'] != 3){

        header("Location: ../index.php");

    }

    include 'include/header.php';

    include 'include/sidebar.php';

    include 'include/topbar.php';

    $student_school_id = $_SESSION['username']; 


?>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>   
        </nav>

        <div class="card-body">
            
                <?php

                    $query = "SELECT * FROM tbl_student WHERE school_id = '$student_school_id' LIMIT 1";
                    $query_run = mysqli_query($connection,$query);

                        foreach($query_run as $row){   
                ?>

                            
                                <input type="hidden" id="student_school_id" value="<?php echo $student_school_id; ?>">

                                


            <?php  
                        }
            ?>

                <div id="qrcodeStudent">  </div>

        </div>

    </div>

<?php


    include 'include/footer.php';

?>