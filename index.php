
<?php 

    session_start();

    include 'admin/include/header.php';

?>


    <div class="container-fluid">

        <div class="mx-auto mt-5" style="width: 300px;">

            <form action="process.php" method="POST">
                
                <?php

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') {
                        echo '<br><div class="alert alert-danger" role="alert" id="message"> <i class="fas fa-times "></i> '.$_SESSION['status'].' </i></div>';
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_login" >Submit</button>
            </form>

        </div>

    </div>


<?php

    include 'admin/include/footer.php';

?>

<script>
    // error meesage fadeOut
    $('document').ready(function(){ 
    $("#message").fadeIn(1000).fadeOut(5000); 
    })
</script>
