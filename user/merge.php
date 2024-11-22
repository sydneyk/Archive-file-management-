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
    <?php include("includes/insideHead.php"); ?>
<!--[endif]-->
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
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
         
 <span class="logo-text" style="padding-top: 10px;">
                             <!-- dark Logo text -->
                             <h4>Welcome <?php echo $username; ?></h4>
                           <!--  <img alt="welcome Admin" class="light-logo" /> -->
                           </span> 
                


                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->

                                            <!-- Message -->

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <a class="dropdown-item" href="../logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
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
<div class="row">
    <!-- Dashboard -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                <h6 class="text-white">Dashboard</h6>
            </div>
        </div>
    </div>


    <!-- Fee Balances -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-file-document"></i></h1>
                <h6 class="text-white">Merge files</h6>
            </div>
        </div>
    </div>
</div>
    <!-- Fee Payments -->
    <!-- editor -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">FILE MERGING</h4>
                <!-- Create the editor container -->
                <div id="editor" style="height: 50px;">
                    <br>
                </div>
                <!-- Create a container for file inputs -->
                <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                    <div style="border: 2px dotted #000; padding: 10px; margin: 0 10px; width: 40%;">
                        <input type="file" id="file1" style="width: 100%; height: 40px;"  multiple>
                    </div>
                    <!-- Addition Icon -->
                    <i class="fas fa-plus" style="font-size: 24px; margin: 0 10px;"></i>
                    <div style="border: 2px dotted #000; padding: 10px; margin: 0 10px; width: 40%;">
                        <input type="file" id="file2" style="width: 100%; height: 40px;" multiple>
                    </div>
                </div>
               
    <!-- <right><button onclick="mergeFiles()">Merge Files</button></right> -->
      <input class="btn btn-primary" name="Merge Files" type="submit" onclick="mergeFiles()" placeholder="Merge & submit">
                 <button id="downloadBtn" style="display:none;">Download Merged File</button>
            </div>
        </div>
    </div>
</div>



                <!-- END MODAL -->

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
    <script src="../dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../dist/js/jquery-ui.min.js"></script>
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
    <script src="../assets/libs/moment/min/moment.min.js"></script>
    <script src="../assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../dist/js/pages/calendar/cal-init.js"></script>

    <script>
        function mergeFiles() {
            const file1Input = document.getElementById('file1');
            const file2Input = document.getElementById('file2');
            const downloadBtn = document.getElementById('downloadBtn');

            // Check if files are selected
            if (file1Input.files.length === 0 || file2Input.files.length === 0) {
                alert("Please select at least one file from each input.");
                return;
            }

            // Get the file objects
            const file1 = file1Input.files[0];
            const file2 = file2Input.files[0];

            // Arrays to hold the binary data of the files
            const fileDataPromises = [];

            // Create FileReader to read file1 as an ArrayBuffer
            const reader1 = new FileReader();
            const reader2 = new FileReader();

            // Promise to read the first file
            const readFile1 = new Promise((resolve, reject) => {
                reader1.onload = function(event1) {
                    resolve({
                        data: event1.target.result,
                        name: file1.name,
                        type: file1.type
                    });
                };
                reader1.onerror = reject;
                reader1.readAsArrayBuffer(file1);  // Read file1 as binary data
            });

            // Promise to read the second file
            const readFile2 = new Promise((resolve, reject) => {
                reader2.onload = function(event2) {
                    resolve({
                        data: event2.target.result,
                        name: file2.name,
                        type: file2.type
                    });
                };
                reader2.onerror = reject;
                reader2.readAsArrayBuffer(file2);  // Read file2 as binary data
            });

            // Wait for both files to be read
            Promise.all([readFile1, readFile2]).then(([file1Data, file2Data]) => {
                // Ensure that both files are of the same type (extension and MIME type)
                if (file1Data.type !== file2Data.type) {
                    alert("The selected files are of different types and cannot be merged.");
                    return;
                }

                // Merge the binary data of both files
                const mergedData = new Uint8Array(file1Data.data.byteLength + file2Data.data.byteLength);
                mergedData.set(new Uint8Array(file1Data.data), 0);  // Copy file1 data
                mergedData.set(new Uint8Array(file2Data.data), file1Data.data.byteLength);  // Copy file2 data after file1

                // Create a Blob from the merged data
                const mergedBlob = new Blob([mergedData], { type: file1Data.type });

                // Enable download button and set up download
                downloadBtn.style.display = "inline-block";
                downloadBtn.onclick = function() {
                    const url = URL.createObjectURL(mergedBlob);
                    const a = document.createElement('a');
                    a.href = url;

                    // Set the file name and extension based on the first file
                    const mergedFileName = `merged_file${getFileExtension(file1Data.name)}`;
                    a.download = mergedFileName;  // Use the extension of the first file
                    a.click();
                };
            }).catch((error) => {
                alert("Error reading files: " + error);
            });
        }

        // Helper function to extract file extension
        function getFileExtension(filename) {
            const parts = filename.split('.');
            return parts.length > 1 ? '.' + parts.pop() : '';
        }
    </script>
</body>

</html>