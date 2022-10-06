<?php 

    include '../process.php';

    if(!$_SESSION['username']){

        header("Location: ../index.php");
    }

    if($_SESSION['role'] != 2){

        header("Location: ../index.php");

    }

    include 'include/header.php';

    include 'include/sidebar.php';

    include 'include/topbar.php';

    $student_school_id = $_SESSION['username']; 


?>


    <!-- DataTales Example -->
    <!-- <div class="card shadow mb-4">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>   
        </nav>

        <div class="card-body"> -->

            <?php
                // if (isset($_SESSION['success']) && $_SESSION['success'] !='')
                // {
                // echo '<div class="p-3 mb-2 bg-success text-white" id="message"> '.$_SESSION['success'].'</div>';
                // //echo '<audio autoplay> <source src="success.mp3" type="audio/mpeg"> </audio>';
                // unset($_SESSION['success']);
                // }

                // if (isset($_SESSION['failed']) && $_SESSION['failed'] !='')
                // {
                // echo '<div class="p-3 mb-2 bg-danger text-white" id="message"> '.$_SESSION['failed'].'</div>';
                // //echo '<audio autoplay> <source src="fail.mp3" type="audio/mpeg"> </audio>';
                // unset($_SESSION['failed']);
                // }
            ?>

            <!-- <video id="preview" style="width: 100%;height: 300px;"> </video>

            <form role="form" action="process.php" method="POST"> -->

                    <!-- Input Fields -->
                    <!-- <div class="form-group"> -->
                        <!-- <input type="hidden" name="namegate" value="<?php //echo $_SESSION['gate'];?>"> -->
                        <!-- <input type="text" id="yourInputFieldId" class="form-control" name="yourInputFieldId" required style="text-align: center; " readonly>
                    </div>

            </form>
            
        </div>

    </div> -->

<?php


    include 'include/footer.php';

?>