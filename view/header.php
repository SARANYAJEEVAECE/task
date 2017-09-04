<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/favicon.png">
    <title>Task Management</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/chartist.min.css" rel="stylesheet">
    <link href="../css/chartist-init.css" rel="stylesheet">
    <link href="../css/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../css/c3.min.css" rel="stylesheet">
    <link href="../css/steps.css" rel="stylesheet">
    <link href="../css/sweetalert.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="../css/jsgrid-theme.min.css" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/colors/blue.css" id="theme" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!-- Logo text --><span>
                         <img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(https://wrappixel.com/demos/admin-templates/material-pro/assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/users/profile.png" alt="user" /> </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="waves-effect waves-dark" href="details.php" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">Employee Details</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="task.php" aria-expanded="false">
                                <i class="mdi mdi-table"></i>
                                <span class="hide-menu">Task</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="history.php" aria-expanded="false">
                                <i class="mdi mdi-book-open-variant"></i><span class="hide-menu">History</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="../controller/logout.php" aria-expanded="false">
                                <i class="fa fa-power-off"></i><span class="hide-menu">Logout</span>
                            </a>
                        </li>
                            <!-- <ul aria-expanded="false" class="collapse">
                                <li><a href="details.php">Employee</a></li>
                                <li><a href="task_details.php">Task</a></li>
                                <li><a href="history.php">History</a></li>
                            </ul>
                        </li>   -->            
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
        <div class="container-fluid">
        <!-- <h1>hai</h1> -->
        </div>