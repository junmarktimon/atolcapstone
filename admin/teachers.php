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
                <li class="breadcrumb-item active" aria-current="page">Teacher</li>
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

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3 float-left" data-toggle="modal" data-target="#exampleModal_0">
                    Add Teacher
                </button>

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>School ID</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                
                        <?php
                            $query = "SELECT * FROM tbl_teacher";
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

                                        <td width="2%">
                                            <button type="button" class="btn btn-success btn-circle" id="edit_teacher" data-toggle="modal" data-target="#exampleModal_1" data-id1="<?php echo htmlspecialchars($row['id']); ?>" data-id2="<?php echo htmlspecialchars($row['school_id']); ?>" data-id3="<?php echo htmlspecialchars($row['fname']); ?>" data-id4="<?php echo htmlspecialchars($row['mname']); ?>" data-id5="<?php echo htmlspecialchars($row['lname']); ?>" >
                                                <i class="fas fa-user-edit"></i>
                                            </button>
                                        </td>

                                        <td width="2%">
                                            <button type="button" class="btn btn-danger btn-circle" id="delete_teacher" data-toggle="modal" data-target="#exampleModal_2" data-id1="<?php echo htmlspecialchars($row['id']); ?>" data-id2="<?php echo htmlspecialchars($row['school_id']); ?>" >
                                                <i class="fa fa-user-times"></i>
                                            </button>  
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