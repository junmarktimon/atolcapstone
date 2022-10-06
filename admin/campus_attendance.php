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
                <li class="breadcrumb-item active" aria-current="page">Campus Attendance</li>
            </ol>   
        </nav>

        <div class="card-body">

                <?php
                    if (isset($_SESSION['success']) && $_SESSION['success'] !=''){
                        echo '<div class="p-3 mb-2 bg-success text-white" id="message"> '.htmlspecialchars($_SESSION['success']).'</div>';
                        unset($_SESSION['success']);
                    }

                    if (isset($_SESSION['failed']) && $_SESSION['failed'] !=''){
                        echo '<div class="p-3 mb-2 bg-danger text-white" id="message"> '.htmlspecialchars($_SESSION['failed']).'</div>';
                        unset($_SESSION['failed']);
                    }
                ?>

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>School ID</th>
                            <th>Name</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Log Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                
                        <?php
                            $query = "SELECT * FROM tbl_main_attendance";
                            $query_run = mysqli_query($connection,$query);

                        ?>


                        <?php

                            if (mysqli_num_rows($query_run) > 0){

                                while($row = mysqli_fetch_assoc($query_run)){

                                    $student_complete_name;
                                    $student_name = $row['student_id'];

                                    $query1 = "SELECT * FROM tbl_student WHERE school_id = '$student_name'";
                                    $query_run1 = mysqli_query($connection,$query1);

                                    if (mysqli_num_rows($query_run1) > 0){

                                        while($row1 = mysqli_fetch_assoc($query_run1)){

                                            $student_complete_name = $row1['fname'] . " " . $row1['mname'] . " " . $row1['lname'];

                                        }

                                    }


                        ?>


                                    <tr style="text-transform: capitalize;">
                                        <td>
                                            <?php echo htmlspecialchars($row['id']); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($row['student_id']); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($student_complete_name); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($row['time_in']); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($row['time_out']); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($row['log_date']); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($row['status']); ?>
                                        </td>

                                    </tr>
                    <?php

                                }

                            }

                    ?>
                    
                    </tbody>
                </table>

            </div>

        </div>

    </div>





<?php

    include 'include/footer.php';

?>