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

                //}

                    ?>

                        <div id="qrcode"> </div>

                        <br><br>

                        <div class="row">
                            <div class="col">

                                <h2 style="text-align:center"> Campus Attendance</h2>
                                <br><br>

                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Time In</th>
                                                <th>Time Out</th>
                                                <th>Log Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php
                                                $query = "SELECT * FROM tbl_main_attendance WHERE student_id = '$view_student_school_id'";
                                                $query_run = mysqli_query($connection,$query);

                                            ?>


                                            <?php

                                                if (mysqli_num_rows($query_run) > 0){

                                                    while($row = mysqli_fetch_assoc($query_run)){

                                            ?>


                                                        <tr style="text-transform: capitalize;">
                                                            <td>
                                                                <?php echo htmlspecialchars($row['id']); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo htmlspecialchars($row['student_id']); ?>
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




                            <div class="col">

                                <h2 style="text-align:center"> Subject Attendance</h2>
                                <br><br>

                                <?php 
                                
                                        $query1 = "SELECT * FROM tbl_attendance GROUP BY school_year DESC";
                                        $query_run1 = mysqli_query($connection,$query1);

                                        if (mysqli_num_rows($query_run1) > 0){

                                            while($row1 = mysqli_fetch_assoc($query_run1)){

                                                $school_year_name = $row1['school_year'];


                                ?>
                                                        <div class="panel-body">
                                                            <p><button type="button" class="btn btn-lg btn-default" id="parser" name="parser" onclick="hideShowTable(<?php echo $school_year_name; ?>);"><?php echo $school_year_name; ?></button></p>
                                                        </div>
                                                        <div class="table-responsive">

                                                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Student Name</th>
                                                                        <th>Teacher Name</th>
                                                                        <th>Subject</th>
                                                                        <th>Time In</th>
                                                                        <th>Time Out</th>
                                                                        <th>Log Date</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>

                                                                    <?php
                                                                        $query = "SELECT * FROM tbl_attendance";
                                                                        $query_run = mysqli_query($connection,$query);

                                                                    ?>


                                                                    <?php

                                                                        if (mysqli_num_rows($query_run) > 0){

                                                                            while($row = mysqli_fetch_assoc($query_run)){

                                                                    ?>


                                                                                <tr style="text-transform: capitalize;">
                                                                                    <td>
                                                                                        <?php echo htmlspecialchars($row['id']); ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <?php echo htmlspecialchars($row['student_id']); ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <?php echo htmlspecialchars($row['teacher_id']); ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <?php echo htmlspecialchars($row['subject']); ?>
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
                                                                                

                                                                                </tr>
                                                                <?php

                                                                            }

                                                                        }

                                                                ?>
                                                                
                                                                </tbody>
                                                            </table>

                                                        </div>

                                                        <?php

                                            }

                                        }

                                                        ?>

                            </div>
                        </div>

                    <?php
                }

                    ?>
            
        </div>




         

    </div>





<?php

    include 'include/footer.php';

?>