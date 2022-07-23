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
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/superAdmin">SNESystem</a>
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
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li><hr class="dropdown-divider" />
                        <a class="dropdown-item" href="../php/student_logout.php" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">course list</div>
                            <a class="nav-link" href="/superAdmin">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Course
                            </a>
                        </div>
                    </div>
                        <div class="sb-sidenav-footer">
                        <div class="small">Logged in as : <?php echo $_SESSION["name"]; ?> </div>
                    </div>
                </nav>
                       
                    
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Course</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Course List</li>
                        </ol>
                       
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card"><br>
                                <img class="card-img-top" src="../img/web_design.png" alt="Card image cap" width="100px" height="226px">
                                <div class="card-body">
                                    <h5 class="card-title">CSC574 - Dynamic Web Application Development</h5>
                                    <a href="csc574_note.php" class="btn btn-primary" style="float:right;"><span class="fa fa-arrow-right"></span> View</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card"><br>
                                <img class="card-img-top" src="../img/security.png" alt="Card image cap" width="100px" height="250px">
                                <div class="card-body">
                                    <h5 class="card-title">CSC662 - Computer Security</h5>
                                    <a href="csc662_note.php" class="btn btn-primary" style="float:right;"><span class="fa fa-arrow-right"></span> View</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                <img class="card-img-top" src="../img/encryption.png" alt="Card image cap" width="100px" height="250px">
                                <div class="card-body">
                                    <br>
                                    <h5 class="card-title">CSC669 - Cryptography Alghoritm</h5>
                                    <a href="#" class="btn btn-primary" style="float:right;"><span class="fa fa-arrow-right"></span> View</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card"> <img class="card-img-top" src="../img/mobile.png" alt="Card image cap" width="100px" height="250px">
                                <div class="card-body"><br>
                                    <h5 class="card-title">CSC570 - Mobile Programming</h5>
                                    <a href="#" class="btn btn-primary" style="float:right;"><span class="fa fa-arrow-right"></span> View</a>
                                </div>
                                </div>
                            </div>
                        </div>

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

         <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../php/student_logout.php"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="../php/student_logout.php" method="POST" class="d-none">
                                                
                                            </form>
                        </div>
                    </div>
                </div>
            </div>       

        
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
        
    </body>
</html>
