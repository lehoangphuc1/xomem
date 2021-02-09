<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zegva - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{url('public/back-end/assets/images/favicon.ico')}}">

    <link href="{{url('public/back-end/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{url('public/back-end/plugins/morris/morris.css')}}">
    <!-- DataTables -->
    <link href="{{url('public/back-end/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/back-end/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{url('public/back-end/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{url('public/back-end/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/back-end/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/back-end/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/back-end/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <style>  
    .align-right.button-add-top {
        float: right;
        margin: 10px 15px;
    }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <img src="{{url('public/back-end/assets/images/logo-light.png')}}" class="logo-lg" alt="" height="22">
                    <img src="{{url('public/back-end/assets/images/logo-sm.png')}}" class="logo-sm" alt="" height="24">
                </a>
            </div>

            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input" type="search" placeholder="Search" />
                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notification-list d-none d-md-inline-block">
                        <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                            <i class="fas fa-search noti-icon"></i>
                        </a>
                    </li>

                    <!-- language-->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt="" /> English <span class="mdi mdi-chevron-down"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                            <a class="dropdown-item" href="#"><img src="{{url('public/back-end/assets/images/flags/french_flag.jpg')}}" alt="" height="16" /><span> French </span></a>
                            <a class="dropdown-item" href="#"><img src="{{url('public/back-end/assets/images/flags/spain_flag.jpg')}}" alt="" height="16" /><span> Spanish </span></a>
                            <a class="dropdown-item" href="#"><img src="{{url('public/back-end/assets/images/flags/russia_flag.jpg')}}" alt="" height="16" /><span> Russian </span></a>
                            <a class="dropdown-item" href="#"><img src="{{url('public/back-end/assets/images/flags/germany_flag.jpg')}}" alt="" height="16" /><span> German </span></a>
                            <a class="dropdown-item" href="#"><img src="{{url('public/back-end/assets/images/flags/italy_flag.jpg')}}" alt="" height="16" /><span> Italian </span></a>
                        </div>
                    </li>

                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="fas fa-expand noti-icon"></i>
                        </a>
                    </li>

                    <!-- notification -->
                    <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-bell noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                        Notifications
                                    </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{url('public/back-end/assets/images/users/user-1.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Hello  <?php 
                $name = Session::get('admin_name');
                if($name){
                    echo $name;
                }
                 ?> </a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{URL::to('/logout')}}"><i class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right">9+</span> <span> Dashboard </span>
                            </a>
                        </li>
                           <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-mail"></i><span> Mã giảm giá <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                 <li><a href="{{URL::to('/add-coupon')}}">Thêm mã giảm giá</a></li>
                                <li><a href="{{URL::to('/list-coupon')}}">Danh sách mã giảm giá</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-mail"></i><span> Đơn Hàng <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{URL::to('/order-manage')}}">Quản lý đơn hàng</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-calendar"></i><span> Danh Mục <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{URL::to('/add-category')}}">Thêm danh mục</a></li>
                                <li><a href="{{URL::to('/all-category')}}">Danh sách danh mục</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i><span> Thương Hiệu <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{URL::to('/add-brand')}}">Thêm thương hiệu</a></li>
                                <li><a href="{{URL::to('/all-brand')}}">Danh sách thương hiệu</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-broadcast"></i><span> Sản Phẩm <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
                                <li><a href="{{URL::to('/all-product')}}">Liệt kê sản phẩm</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Forms <span class="badge badge-pill badge-danger float-right">8</span> </span></a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-list"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">
                    <div class="page-title-box">

                        <div class="row align-items-center ">
                            <div class="col-md-12">
                                <div class="page-title-box">
                                       @yield('content')
                                </div>
                            </div>

                            <!-- <div class="col-md-4">
                                <div class="float-right d-none d-md-block app-datepicker">
                                    <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                    <i class="mdi mdi-chevron-down mdi-drop"></i>
                                </div>
                            </div> -->
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <footer class="footer">
                © 2019 Zegva <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</span>.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{url('public/back-end/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('public/back-end/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('public/back-end/assets/js/metismenu.min.js')}}"></script>
    <script src="{{url('public/back-end/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{url('public/back-end/assets/js/waves.min.js')}}"></script>

    <script src="{{url('public/back-end/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{url('public/back-end/plugins/morris/morris.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/raphael/raphael.min.js')}}"></script>

    <script src="{{url('public/back-end/pages/dashboard.init.js')}}"></script>

    <script src="{{url('public/back-end/plugins/tinymce/tinymce.min.js')}}"></script>

     <script>
        $(document).ready(function() {
            if ($("#elm1").length > 0 ) {
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                });
            }
        });
    </script>
    <script>tinymce.init({forced_root_block : "",selector:'textarea'});</script>


      <!-- Required datatable js -->
    <script src="{{url('public/back-end/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{url('public/back-end/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{url('public/back-end/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/datatables/buttons.colVis.min.js')}}"></script>

       <!-- Responsive examples -->
    <script src="{{url('public/back-end/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('public/back-end/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{url('public/back-end/assets/pages/datatables.init.js')}}"></script>

    <!-- App js -->
    <script src="{{url('public/back-end/assets/js/app.js')}}"></script>
</body>

</html>