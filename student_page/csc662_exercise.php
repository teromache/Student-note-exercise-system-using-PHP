<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SNESystem</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link  rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons">


        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>

            .modal-confirm {
                color: #636363;
                width: 400px;
            }

            .modal-confirm .modal-content {
                padding: 20px;
                border-radius: 5px;
                border: none;
                text-align: center;
                font-size: 14px;
            }

            .modal-confirm .modal-header {
                border-bottom: none;
                position: relative;
            }

            .modal-confirm h4 {
                text-align: center;
                font-size: 26px;
                margin: 30px 0 -10px;
            }

            .modal-confirm .close {
                position: absolute;
                top: -5px;
                right: -2px;
            }

            .modal-confirm .modal-body {
                color: #999;
            }

            .modal-confirm .modal-footer {
                border: none;
                text-align: center;
                border-radius: 5px;
                font-size: 13px;
                padding: 10px 15px 25px;
            }

            .modal-confirm .modal-footer a {
                color: #999;
            }

            .modal-confirm .icon-box {
                width: 80px;
                height: 80px;
                margin: 0 auto;
                border-radius: 50%;
                z-index: 9;
                text-align: center;
                border: 3px solid #f15e5e;
            }

            .modal-confirm .icon-box i {
                color: #f15e5e;
                font-size: 46px;
                display: inline-block;
                margin-top: 13px;
            }

            .modal-confirm .btn,
            .modal-confirm .btn:active {
                color: #fff;
                border-radius: 4px;
                background: #60c7c1;
                text-decoration: none;
                transition: all 0.4s;
                line-height: normal;
                min-width: 120px;
                border: none;
                min-height: 40px;
                border-radius: 3px;
                margin: 0 5px;
            }

            .modal-confirm .btn-secondary {
                background: #c1c1c1;
            }

            .modal-confirm .btn-secondary:hover,
            .modal-confirm .btn-secondary:focus {
                background: #a8a8a8;
            }

            .modal-confirm .btn-danger {
                background: #f15e5e;
            }

            .modal-confirm .btn-danger:hover,
            .modal-confirm .btn-danger:focus {
                background: #ee3535;
            }

            .trigger-btn {
                display: inline-block;
                margin: 100px auto;
            }

        </style>

            <style>
            /* Custom style to set icon size */
            .alert i[class^="bi-"]{
            font-size: 1.5em;
            line-height: 1;
            }
            </style>
    
    </head>
    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SNESystem</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Lecturer note</div>
                            <a class="nav-link" href="csc662_note.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                               Note
                            </a>
                            <div class="sb-sidenav-menu-heading">Exercise List</div>
                            <a class="nav-link collapsed" href="csc662_exercise.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Exercise
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as : <?php echo $_SESSION["name"]; ?></div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </symbol>
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </symbol>
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </symbol>
                    </svg>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">CSC662 Exercise</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Exercise</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-book"></i>
                                Exercise List       
                            </div>
                          
                            <div class="card-body">
                            
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Exercise Name</th>
                                            <th>Lecturer Attach File</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Size</th>
                                            <th style="text-align:center">Action</th>
                                            
                                        </tr>
                                    </thead> 
                                    <tbody style="background-color:#fff;">
                                        <?php
                                        $student_name = $_SESSION["name"];
                                        require 'dbconn.php';
                                        $query = mysqli_query($db, "SELECT * FROM exercise WHERE subject_name='CSC662'") or die(mysqli_error());
                                        while($fetch = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                        <td><?php echo $fetch['exercise_name']?></td>
                                        <td><?php echo $fetch['attachment_file']?></td>
                                        <td><?php echo $fetch['start_date']?></td>
                                        <td><?php echo $fetch['end_date']?></td>
                                        <td><?php echo floor($fetch['size'] / 1000) . ' KB'; ?></td>
                                        <?php 
                                        date_default_timezone_set("Asia/Kuala_Lumpur");
                                          
                                        if ($fetch['end_date'] > date("Y-m-d"))
                                        {
                                             echo '<td style="text-align:center">';
                                             echo '<a href="../php/downloads_exercise.php?file_id='.$fetch['id'].'"class="btn btn-success">'.'<span class="fa fa-download">'.'</span>'.'</a>';   
                                             echo '&nbsp';
                                             echo '<button class="btn btn-warning" data-toggle="modal" type="button" data-target="#submit_modal'.$fetch['id'].'">'.'<span class="fa fa-upload">'.'</span>'.'</button>';
                                             echo '&nbsp';
                                             echo '<a href="../student_page/progressCSC662.php?exercise_name='.$fetch['exercise_name'].'"class="btn btn-info">'.' Progress'.'</a>';    
                                             echo '</td>';   
                                        }
                                        else
                                            echo '<td style="text-align:center">'.'<h6 style="color:red">'.'Exercise Expired'.'</h6>'.'</td>';
                                        ?>
                                        
                                        </tr>
                                        <?php
                                        include 'modal.php';
                                        include 'modal2.php';
                                        }
                                        ?>
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>

                 
                 <!-- Confirm Delete Modal-->

                 <div id="deleteModal" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                
                                   
                                        <div class="modal-header flex-column">
                                            <div class="icon-box">
                                                <i class="material-icons">&#xE5CD;</i>
                                            </div>
                                            <h4 class="modal-title w-100">Are you sure?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                        </div>
                                       
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-di smiss="modal">Cancel</button>
                                            <a href="../php/upload_controller/uploadCSC574_submission.php?_id=<?php echo $docs['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                        </div>
  
                 
                            </div>
                    </div>
                </div>                        

                 <!-- End of Confirm Delete Modal-->


                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SNESystem 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
