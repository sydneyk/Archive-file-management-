<?php

session_start();
include_once "../inc/config.php";

include '../inc/Database.php';
$db = new Database();

if(!isset($_SESSION['id'])){
    header("location: ../index.php");
}
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../icons/logo.png">
    <title>file manager</title>
    <!-- Custom CSS -->
    <link href="../assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="../assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include("includes/header.php"); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include("includes/aside.php"); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Users</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="Home_page.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">lands</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage user</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                             
                                                <th><strong>User Name</strong></th>
                                                <th><strong>Gender</strong></th>
                                                <th><strong>Email</strong></th>
                                                <th colspan="2"><strong>Action</strong></th>
                                                
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                        $count = 0;
                        $where = array("status" => "1");
                        $userData = $db->selectWhere('users', $where);
                        foreach ($userData as $key => $value) {
                            $count += 1;
                        ?>
                            <tr>
                               
                                <td ><?php echo $value['username']; ?></td>
                                <td ><?php echo $value['gender']; ?></td>
                                <td ><?php echo $value['email']; ?></td>
                                
                            
                        
                                                <td ><center><a href="edit.php?edit_id=<?php echo $value['id']; ?>"> <button class="fas fa-edit btn-cyan" style="height:40px; width: 90px; border: none;">edit</button></a></center></td>
                                                <td ><center><a href="php/archive.php?id=<?php echo $value['id']; ?>"><button class="fas fa-download btn-danger" style="height:40px; width: 90px; border: none;"> Archive</button></a></center></td>
                                           </tr>
                                            <?php } ?>
                                       
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th><strong>User Name</strong></th>
                                                <th><strong>Gender</strong></th>
                                                <th><strong>Email</strong></th>
                                                <th colspan="2"><strong>Action</strong></th>
                                               
                                            
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
            <div class="card-body">
                                <h5 class="card-title">Manage user</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                             
                                                <th><strong>User Name</strong></th>
                                                <th><strong>Gender</strong></th>
                                                <th><strong>Email</strong></th>
                                                <th colspan="2"><strong>Action</strong></th>
                                                
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                        $count = 0;
                        $where = array("status" => "0");
                        $userData = $db->selectWhere('users', $where);
                        foreach ($userData as $key => $value) {
                            $count += 1;
                        ?>
                            <tr>
                               
                                <td ><?php echo $value['username']; ?></td>
                                <td ><?php echo $value['gender']; ?></td>
                                <td ><?php echo $value['email']; ?></td>
                                
                            
                        
                                                
                                                <td ><center><a href="php/unarchive.php?id=<?php echo $value['id']; ?>"><button class="fas fa-upload btn-danger" style="height:40px; width: 100px; border: none;"> UnArchive</button></a></center></td>
                                           </tr>
                                            <?php } ?>
                                       
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th><strong>User Name</strong></th>
                                                <th><strong>Gender</strong></th>
                                                <th><strong>Email</strong></th>
                                                <th colspan="2"><strong>Action</strong></th>
                                               
                                            
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
           
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php include("includes/footer.php"); ?>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="../assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
<script src="../assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
        // Basic Example with form
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });



        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    
</script>
</body>

</html>