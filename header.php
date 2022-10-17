<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo TITLE ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/readable/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


<style>
.welcome-message .borderBtn {
  position: absolute;
  top: 300%;
  left: 45%;
  text-align: center;
  text-decoration: none;
  font-weight: 500;
  font-size: 1.05em;
  color: white;
  padding: 1.45em 3.35em;
  border-radius: 0.25em;
  background: rgba(195, 40, 40, 1);
}


.container .btn-lg {
  background: skyblue;
  border: 0.05em rgb(0, 51, 204);
  color: white;
}

.container .btn-lg:hover {
  background: white;
  border: 0.05em solid rgb(0, 51, 204);
  color: darkblue;
}
.modal-dialog{
  margin-top: 19%;
  margin-left: 40%;


}
.modal-content{
   border-radius: 100%;
}
.modal-title{
  padding-left: 5%;
  font: lato;
  background-color: darkblue;
  color: white;
}
.modal-body{

  background-color: lightgray;
}

.btn1{

  color: ghostwhite;
  width: 9em;
  border-radius: 0.35em;

}

   input#submit{
    width: 200px;
    padding: 7px;
    font-size: 16px;
    font-family: sans-serif;
    border-radius: 4px;
    background-color:#7BDF07;
    color: #fff;
    margin: 4px 2px;
  cursor: pointer;
  }
  

    label{
    font-family: lato;
    font-size: 20px;
    color: black;

   
   }
.switch {
  position: relative;
  display: inline-block;
  width: 12%;
  height:3%;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.cen{
    margin-top:25px !important;
}


.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 6px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 6px 6px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.modal-title {
    padding-left: 5%;
    font: lato;
    color: #000;
    background-color: #fff;
}
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                  <h1>
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                  </h1>
                </li>
              
                </div>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                        </div>
                    </form>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <h2 class="text-light">Malik Money Transfer</h2>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- <li class="nav-item menu-open">
                            <a href="index.php"
                                class="nav-link <?php if(PAGE == 'Home'){echo 'active text-white' ;} ?>" style="font-size:1.8rem;">
                                <i class="nav-icon fas fa-tachometer-alt" style="font-size:1.8rem;"></i>
                                <p >
                                    Dashboard
                                </p>
                            </a>

                        </li> -->


                        <li>

                            <a href="currency.php"
                                class="nav-link <?php if(PAGE == 'Currency'){echo 'active text-white' ;} ?>" style="font-size:1.8rem;">
                                <i class="nav-icon fab fa-monero" style="font-size:1.8rem;"></i>
                                <p>
                                    Currency Rates
                                </p>
                            </a>

                        </li>

            </div>
            <!-- /.sidebar -->
        </aside>