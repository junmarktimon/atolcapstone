</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade " id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    
                    <form action="../logout.php" method="post">

                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                                <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                                <input type="hidden" name="role" value="<?php echo $_SESSION['role']; ?>">
                        <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">School ID</label>
                        <input type="text" class="form-control" id="input_schoolID" name="school_id" placeholder="School ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" id="input_fname" name="fname" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Middle Name</label>
                        <input type="text" class="form-control" id="input_mname" name="mname" placeholder="Middle name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input type="text" class="form-control" id="input_lname" name="lname" placeholder="Last name">
                    </div>
               
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Year Level</label>
                        <select class="form-control" id="input_select" name="year_level">
                            <option>-- select -- </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="clearText()">Clear</button>
                        <button type="submit" class="btn btn-primary" name="addStudent">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">School ID</label>
                        <input type="text" class="form-control" id="editInput_schoolID" name="school_id" placeholder="School ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" id="editInput_fname" name="fname" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Middle Name</label>
                        <input type="text" class="form-control" id="editInput_mname" name="mname" placeholder="Middle name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input type="text" class="form-control" id="editInput_lname" name="lname" placeholder="Last name">
                    </div>
               
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Year Level</label>
                        <select class="form-control" id="editInput_select" name="year_level">
                            <option>-- select -- </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="student_id" id="editInput_id">
                        <button type="submit" class="btn btn-primary" name="EditStudent">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Please confirm to Delete?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action ="process.php" method="post"> 
                        <input  type="hidden" name="delete_id" id="deleteInput_id">
                        <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

     <!-- Page level plugins -->
     <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#dataTable1').DataTable();
        });


        function clearText(){
            document.getElementById("input_schoolID").value = '';
            document.getElementById("input_fname").value = '';
            document.getElementById("input_mname").value = '';
            document.getElementById("input_lname").value = '';
            document.getElementById("input_select").value = '';
        }


        //get user id for specific update using jquery and by calling input or button id
        //delete student
        $(document).on('click', '#edit_student', function(){
                            
            var id = $(this).data('id1');
            var school_id = $(this).data('id2');
            var fname = $(this).data('id3');
            var mname = $(this).data('id4');
            var lname = $(this).data('id5');
            var year_level = $(this).data('id6');


            document.getElementById("editInput_id").value = id;
            document.getElementById("editInput_schoolID").value = school_id;
            document.getElementById("editInput_fname").value = fname;
            document.getElementById("editInput_mname").value = mname;
            document.getElementById("editInput_lname").value = lname;
            document.getElementById("editInput_select").value = year_level;

            //$('#exampleModal1').modal('toggle');
        });


        //get user id for specific update using jquery and by calling input or button id
        //delete student
        $(document).on('click', '#delete_student', function(){
                            
            var id = $(this).data('id1');


            document.getElementById("deleteInput_id").value = id;

            //$('#exampleModal1').modal('toggle');
        });

    </script>


        


</body>

</html>