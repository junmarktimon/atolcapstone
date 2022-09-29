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
                <li class="breadcrumb-item active" aria-current="page">Student</li>
            </ol>   
        </nav>

        <div class="card-body">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3 float-left" data-toggle="modal" data-target="#exampleModal">
                    Add Student
                </button>

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>School ID</th>
                            <th>Year Level</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                
                        <?php
                            $query = "SELECT * FROM tbl_student";
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
                                            <?php echo htmlspecialchars($row['fname']." ".$row['mname']. " " .$row['lname']); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($row['school_id']); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($row['yr_level']); ?>
                                        </td>

                                        <td width="2%">
                                            <form action="pdffile/view_student.php" method="post" target="_blank">
                                                    <button  type="submit" name="viewR_btn" class="btn btn-info btn-circle">
                                                        <i class='fas fa-eye'></i>
                                                    </button>
                                            </form>
                                        </td>

                                        <td width="2%">
                                            <form action="edit_student.php" method="post">
                                                    <button  type="submit" name="edit_btn" class="btn btn-success btn-circle">
                                                        <i class="fas fa-user-edit"></i>
                                                    </button>
                                            </form>
                                        </td>

                                        <td width="2%">
                                            <form action ="code.php" method="post">
                                                <input  type="hidden" name="delete_id" value="<?php //echo htmlspecialchars($row['id_no']); ?>">
                                                <button type="submit" name="delete_btn" class="btn btn-danger btn-circle">
                                                    <i class="fa fa-user-times"></i>
                                                </button>
                                            </form>   
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