    <html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
	@yield('menu')
	<div class="page-wrapper">
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="assets/images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="assets/images/icon/avatar-big-01.jpg" alt="John Doe" />
                    </div>
                    <h4 class="name">john doe</h4>
                    <a href="{{ url('logout') }}">Sign out</a>
                </div>
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
									<a href="#">
										<i class="fas fa-tachometer-alt"></i>Dashboard Admin</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-tachometer-alt"></i>Dashboard Client</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-tachometer-alt"></i>Dashboard Developer</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-tachometer-alt"></i>Dashboard QA</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-tachometer-alt"></i>Dashboard Pimpinan</a>
								</li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
								<i class="fas fa-trophy"></i>Master
								<span class="arrow">
									<i class="fas fa-angle-down"></i>
								</span>
							</a>
							<ul class="list-unstyled navbar__sub-list js-sub-list">
								<li>
									<a href="{{ route('client.index') }}">
										<i class="fas fa-table"></i>Client</a>
								</li>
								<li>
									<a href="{{ route('project.index') }}">
										<i class="far fa-check-square"></i>Project</a>
								</li>
								<li>
									<a href="{{ route('mmodul.index') }}">
										<i class="fas fa-calendar-alt"></i>Modul</a>
								</li>
								<li>
									<a href="{{ route('jnsticket.index') }}">
										<i class="fas fa-map-marker-alt"></i>Ticket Type</a>
								</li>
							</ul>
                        </li>
                        <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Ticket
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('ticket.index') }}">
                                            <i class="fas fa-sign-in-alt"></i>Create Ticket</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ticket.index') }}">
                                            <i class="fas fa-user"></i>Approval Ticket</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ticket.index') }}">
                                            <i class="fas fa-unlock-alt"></i>Get Ticket</a>
                                    </li>
									<li>
                                        <a href="{{ route('ticket.index') }}">
                                            <i class="fas fa-unlock-alt"></i>Approval QA</a>
                                    </li>
									<li>
                                        <a href="{{ route('update_ticket.index') }}">
                                            <i class="fas fa-unlock-alt"></i>Update Ticket Status</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-inbox"></i>Log Auditrial
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('log.index') }}">
                                            <i class="fas fa-sign-in-alt"></i>Input Log Auditrial</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-desktop"></i>Report
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-flickr"></i>Unhandle Ticket</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-comment-alt"></i>Close Ticket</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-flickr"></i>Unclose Ticket</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-id-card"></i>Modul Error</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-bell"></i>Developer Assesment</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-tasks"></i>Error Project</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-window-restore"></i>Error Client</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-toggle-on"></i>Customer Journal Map</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="assets/images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="assets/images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="assets/images/icon/avatar-big-01.jpg" alt="John Doe" />
                        </div>
                        <h4 class="name">john doe</h4>
                        <a href="{{ url('logout') }}">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard Admin</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard Client</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard Developer</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard QA</a>
                                    </li>
									<li>
                                        <a href="#">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard Pimpinan</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-trophy"></i>Master
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('client.index') }}">
                                            <i class="fas fa-table"></i>Client</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('project.index') }}">
                                            <i class="far fa-check-square"></i>Project</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('mmodul.index') }}">
                                            <i class="fas fa-calendar-alt"></i>Modul</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('jnsticket.index') }}">
                                            <i class="fas fa-map-marker-alt"></i>Ticket Type</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Ticket
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('ticket.index') }}">
                                            <i class="fas fa-sign-in-alt"></i>Create Ticket</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ticket.index') }}">
                                            <i class="fas fa-user"></i>Approval Ticket</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ticket.index') }}">
                                            <i class="fas fa-unlock-alt"></i>Get Ticket</a>
                                    </li>
									<li>
                                        <a href="{{ route('ticket.index') }}">
                                            <i class="fas fa-unlock-alt"></i>Approval QA</a>
                                    </li>
									<li>
                                        <a href="{{ route('ticket.index') }}">
                                            <i class="fas fa-unlock-alt"></i>Update Ticket Status</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-desktop"></i>Report
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-flickr"></i>Unhandle Ticket</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-comment-alt"></i>Close Ticket</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-flickr"></i>Unclose Ticket</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-id-card"></i>Modul Error</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-bell"></i>Developer Assesment</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-tasks"></i>Error Project</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-window-restore"></i>Error Client</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-toggle-on"></i>Customer Journal Map</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->
			
    @yield('content')
	
	<section>
                <div class="container-fluid">
                    <div class="row">
                        
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js">
    </script>
	<script src="assets/vendor/vector-map/jquery.vmap.js"></script>
    <script src="assets/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>

</body>

</html>