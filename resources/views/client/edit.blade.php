@extends('copiman.index')
@section('content')


<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="assets/images/icon/logo.png" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                            </li>
                            <li>
                                <a href="table.html">
                                    <i class="fas fa-table"></i>Tables</a>
                                </li>
                                <li>
                                    <a href="form.html">
                                        <i class="far fa-check-square"></i>Forms</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                                        </li>
                                        <li>
                                            <a href="map.html">
                                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                                            </li>
                                            <li class="has-sub">
                                                <a class="js-arrow" href="#">
                                                    <i class="fas fa-copy"></i>Pages</a>
                                                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                                        <li>
                                                            <a href="login.html">Login</a>
                                                        </li>
                                                        <li>
                                                            <a href="register.html">Register</a>
                                                        </li>
                                                        <li>
                                                            <a href="forget-pass.html">Forget Password</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-sub">
                                                    <a class="js-arrow" href="#">
                                                        <i class="fas fa-desktop"></i>UI Elements</a>
                                                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                                            <li>
                                                                <a href="button.html">Button</a>
                                                            </li>
                                                            <li>
                                                                <a href="badge.html">Badges</a>
                                                            </li>
                                                            <li>
                                                                <a href="tab.html">Tabs</a>
                                                            </li>
                                                            <li>
                                                                <a href="card.html">Cards</a>
                                                            </li>
                                                            <li>
                                                                <a href="alert.html">Alerts</a>
                                                            </li>
                                                            <li>
                                                                <a href="progress-bar.html">Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="modal.html">Modals</a>
                                                            </li>
                                                            <li>
                                                                <a href="switch.html">Switchs</a>
                                                            </li>
                                                            <li>
                                                                <a href="grid.html">Grids</a>
                                                            </li>
                                                            <li>
                                                                <a href="fontawesome.html">Fontawesome Icon</a>
                                                            </li>
                                                            <li>
                                                                <a href="typo.html">Typography</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </header>
                                    <!-- END HEADER MOBILE-->

                                    <!-- MENU SIDEBAR-->
                                    <aside class="menu-sidebar d-none d-lg-block">
                                        <div class="logo">
                                            <a href="#">
                                                <img src="assets/images/icon/logo.png" alt="Cool Admin" />
                                            </a>
                                        </div>
                                        <div class="menu-sidebar__content js-scrollbar1">
                                            <nav class="navbar-sidebar">
                                                <ul class="list-unstyled navbar__list">
                                                    <li class="active has-sub">
                                                        <a class="js-arrow" href="#">
                                                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                                <li>
                                                                    <a href="index.html">Dashboard 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="index2.html">Dashboard 2</a>
                                                                </li>
                                                                <li>
                                                                    <a href="index3.html">Dashboard 3</a>
                                                                </li>
                                                                <li>
                                                                    <a href="index4.html">Dashboard 4</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="chart.html">
                                                                <i class="fas fa-chart-bar"></i>Charts</a>
                                                            </li>
                                                            <li>
                                                                <a href="table.html">
                                                                    <i class="fas fa-table"></i>Tables</a>
                                                                </li>
                                                                <li>
                                                                    <a href="form.html">
                                                                        <i class="far fa-check-square"></i>Forms</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="map.html">
                                                                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                                                                            </li>
                                                                            <li class="has-sub">
                                                                                <a class="js-arrow" href="#">
                                                                                    <i class="fas fa-copy"></i>Pages</a>
                                                                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                                                        <li>
                                                                                            <a href="login.html">Login</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="register.html">Register</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="forget-pass.html">Forget Password</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="has-sub">
                                                                                    <a class="js-arrow" href="#">
                                                                                        <i class="fas fa-desktop"></i>UI Elements</a>
                                                                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                                                            <li>
                                                                                                <a href="button.html">Button</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="badge.html">Badges</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="tab.html">Tabs</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="card.html">Cards</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="alert.html">Alerts</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="progress-bar.html">Progress Bars</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="modal.html">Modals</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="switch.html">Switchs</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="grid.html">Grids</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="fontawesome.html">Fontawesome Icon</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="typo.html">Typography</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </nav>
                                                                        </div>
                                                                    </aside>
                                                                    <!-- END MENU SIDEBAR-->

                                                                    <!-- PAGE CONTAINER-->
                                                                    <div class="page-container">
                                                                        <!-- HEADER DESKTOP-->
                                                                        <header class="header-desktop">
                                                                            <div class="section__content section__content--p30">
                                                                                <div class="container-fluid">
                                                                                    <div class="header-wrap">
                                                                                        <form class="form-header" action="" method="POST">
                                                                                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                                                                            <button class="au-btn--submit" type="submit">
                                                                                                <i class="zmdi zmdi-search"></i>
                                                                                            </button>
                                                                                        </form>
                                                                                        <div class="header-button">
                                                                                            <div class="noti-wrap">
                                                                                                <div class="noti__item js-item-menu">
                                                                                                    <i class="zmdi zmdi-comment-more"></i>
                                                                                                    <span class="quantity">1</span>
                                                                                                    <div class="mess-dropdown js-dropdown">
                                                                                                        <div class="mess__title">
                                                                                                            <p>You have 2 news message</p>
                                                                                                        </div>
                                                                                                        <div class="mess__item">
                                                                                                            <div class="image img-cir img-40">
                                                                                                                <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                                                                            </div>
                                                                                                            <div class="content">
                                                                                                                <h6>Michelle Moreno</h6>
                                                                                                                <p>Have sent a photo</p>
                                                                                                                <span class="time">3 min ago</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="mess__item">
                                                                                                            <div class="image img-cir img-40">
                                                                                                                <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                                                                            </div>
                                                                                                            <div class="content">
                                                                                                                <h6>Diane Myers</h6>
                                                                                                                <p>You are now connected on message</p>
                                                                                                                <span class="time">Yesterday</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="mess__footer">
                                                                                                            <a href="#">View all messages</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="noti__item js-item-menu">
                                                                                                    <i class="zmdi zmdi-email"></i>
                                                                                                    <span class="quantity">1</span>
                                                                                                    <div class="email-dropdown js-dropdown">
                                                                                                        <div class="email__title">
                                                                                                            <p>You have 3 New Emails</p>
                                                                                                        </div>
                                                                                                        <div class="email__item">
                                                                                                            <div class="image img-cir img-40">
                                                                                                                <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                                                                            </div>
                                                                                                            <div class="content">
                                                                                                                <p>Meeting about new dashboard...</p>
                                                                                                                <span>Cynthia Harvey, 3 min ago</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="email__item">
                                                                                                            <div class="image img-cir img-40">
                                                                                                                <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                                                                            </div>
                                                                                                            <div class="content">
                                                                                                                <p>Meeting about new dashboard...</p>
                                                                                                                <span>Cynthia Harvey, Yesterday</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="email__item">
                                                                                                            <div class="image img-cir img-40">
                                                                                                                <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                                                                            </div>
                                                                                                            <div class="content">
                                                                                                                <p>Meeting about new dashboard...</p>
                                                                                                                <span>Cynthia Harvey, April 12,,2018</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="email__footer">
                                                                                                            <a href="#">See all emails</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="noti__item js-item-menu">
                                                                                                    <i class="zmdi zmdi-notifications"></i>
                                                                                                    <span class="quantity">3</span>
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
                                                                                            </div>
                                                                                            <div class="account-wrap">
                                                                                                <div class="account-item clearfix js-item-menu">
                                                                                                    <div class="image">
                                                                                                        <img src="assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                                                                                    </div>
                                                                                                    <div class="content">
                                                                                                        <a class="js-acc-btn" href="#">john doe</a>
                                                                                                    </div>
                                                                                                    <div class="account-dropdown js-dropdown">
                                                                                                        <div class="info clearfix">
                                                                                                            <div class="image">
                                                                                                                <a href="#">
                                                                                                                    <img src="assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="content">
                                                                                                                <h5 class="name">
                                                                                                                    <a href="#">john doe</a>
                                                                                                                </h5>
                                                                                                                <span class="email">johndoe@example.com</span>
                                                                                                            </div>
                                                                                                        </div>
                                     <!--        <div class="account-dropdown__body">
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
                                            </div> -->
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <!-- ISI CONTENT PASTE -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Ubah Client</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><br></div>
                                <div class="col-md-12"> 
                                <h4>Ubah Client</h4>
                                    <form action="{{ route('client.update', $client->clientid) }}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('PUT') }}
                                        <div class="form-group {{ $errors->has('client_name') ? 'has-error' : '' }}">
                                            <label for="client_name" class="control-label">Client Name</label>
                                            <input type="text" class="form-control" name="client_name" placeholder="Client Name" value="{{ $client->client_name }}">
                                            @if ($errors->has('client_name'))
                                                <span class="help-block">{{ $errors->first('client_name') }}</span>
                                            @endif
                                        </div>
										<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                            <label for="address" class="control-label">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Client Name" value="{{ $client->address }}">
                                            @if ($errors->has('address'))
                                                <span class="help-block">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
										<div class="form-group {{ $errors->has('phn') ? 'has-error' : '' }}">
                                            <label for="phn" class="control-label">Phone</label>
                                            <input type="text" class="form-control" name="phn" placeholder="Phone" value="{{ $client->phn }}">
                                            @if ($errors->has('phn'))
                                                <span class="help-block">{{ $errors->first('phn') }}</span>
                                            @endif
                                        </div>
										<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <label for="email" class="control-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $client->email }}">
                                            @if ($errors->has('email'))
                                                <span class="help-block">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
										<div class="form-group {{ $errors->has('mou_date') ? 'has-error' : '' }}">
                                            <label for="mou_date" class="control-label">Mou Date</label>
                                            <input type="date" class="form-control" name="mou_date" placeholder="Mou Date" value="{{ $client->mou_date }}">
                                            @if ($errors->has('mou_date'))
                                                <span class="help-block">{{ $errors->first('mou_date') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Simpan</button>
                                            <a href="{{ route('client.index') }}" class="btn btn-default">Kembali</a>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <!-- AKHIR ISI CONTENT PASTE -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <!--      -->
    @endsection