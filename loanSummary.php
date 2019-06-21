<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>HR Management System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="assets/global/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->

<body class="page-header-fixed">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html">
                    <img src="" alt="logo" class="logo-default" />
                </a>
                <div class="menu-toggler sidebar-toggler hide">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="assets/admin/layout/img/avatar3_small.jpg" />
                            <span class="username username-hide-on-mobile">
					Nick </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="extra_profile.html">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <li class="heading">
                        <h3 class="uppercase">HUMAN RESOURCE</h3>
                    </li>
                    <li class="start active open">
                        <a href="javascript:;">
                            <i class="icon-home"></i>
                            <span class="title">My Profile </span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="active">
                                <a href="index.html">
                                    <i class="icon-bar-chart"></i> Personal Details</a>
                            </li>
                            <li>
                                <a href="index_2.html">
                                    <i class="icon-bulb"></i> Contact Details</a>
                            </li>
                            <li>
                                <a href="index_3.html">
                                    <i class="icon-graph"></i> Emergency Contact</a>
                            </li>
                            <li>
                                <a href="index.html">
                                    <i class="icon-bar-chart"></i> Dependents
                                </a>
                            </li>
                            <li>
                                <a href="index_2.html">
                                    <i class="icon-bulb"></i> Job Details</a>
                            </li>
                            <li>
                                <a href="index_3.html">
                                    <i class="icon-graph"></i> Bank Account Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-basket"></i>
                            <span class="title">Timesheet</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">
							Timesheet Summary</a>
                            </li>
                            <li>
                                <a href="index_horizontal_menu.html">
							Upload New Timesheet</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-rocket"></i>
                            <span class="title">Leave </span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">
							Leave Summary</a>
                            </li>
                            <li>
                                <a href="index_horizontal_menu.html">
							Apply New Leave</a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">FINANCE</h3>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-diamond"></i>
                            <span class="title">Salary</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ui_general.html">
							View Salary Slip</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-diamond"></i>
                            <span class="title">Loan</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ui_general.html">
							Loan Summary</a>
                            </li>
                            <li>
                                <a href="ui_buttons.html">
							Apply New Loan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">SETTING</h3>
                    </li>
                    <li>
                        <a href=""><i class="icon-paper-plane"></i>
					<span class="title">
					Change Password </span>
					</a>
                    </li>
                    <li>
                        <a href=""><i class="icon-paper-plane"></i>
					<span class="title">
					Logout</span>
					</a>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">My Profile</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Loan Summary</a>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE HEADER-->
                <div class="clearfix">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box red">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-pie-chart"></i>Loan Summary
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse">
                                    </a>
                                    <a href="javascript:;" class="remove">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <!--                                        <h4 class="form-section">Leave Info</h4>-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="form-section">List of Loans</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    #
                                                                </th>
                                                                <th>
                                                                    Date Apply
                                                                </th>
                                                                <th>
                                                                    Loan Sum
                                                                </th>
                                                                <th>
                                                                    Payment Term
                                                                </th>
                                                                <th>
                                                                    Repayment Start Date
                                                                </th>
                                                                <th>
                                                                    Status
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td>
                                                                    Table cell
                                                                </td>
                                                                <td>
                                                                    Table cell
                                                                </td>
                                                                <td>
                                                                    Table cell
                                                                </td>
                                                                <td>
                                                                    Table cell
                                                                </td>
                                                                <td>
                                                                    Table cell
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div>

                                        <!-- responsive -->
                                        <div id="responsive" class="modal fade" data-width="520">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title">Loan Application Form</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Date Apply<span class="required"> * </span></label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="dateTo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Loan Sum<span class="required"> * </span></label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="dateTo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Reason<span class="required"> * </span></label>
                                                            <div class="col-md-8">
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->

                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Payment Term<span class="required"> * </span></label>
                                                            <div class="col-md-4">
                                                                <select name="relationship" id="select2_sample4" class="select2 form-control" required>                                
                                                                    <option value="">Select Term</option>
                                                                    <option value="">1 Month</option>
                                                                    <option value="">2 Month</option>
                                                                    <option value="">3 Month</option>
                                                                    <option value="">4 Month</option>
                                                                    <option value="">5 Month</option>
                                                                    <option value="">6 Month</option>
                                                                    <option value="">7 Month</option>
                                                                    <option value="">8 Month</option>
                                                                    <option value="">9 Month</option>
                                                                    <option value="">10 Month</option>
                                                                    <option value="">11 Month</option>
                                                                    <option value="">12 Month</option>
                                                                </select>
                                                                
                                                            </div>
                                                            <div class="col-md-2 hide">
                                                                <input type="text" class="form-control" value="<?php echo date(" Y "); ?>" readonly>

                                                                </input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->

                                                    <div class="col-md-12">
                                                        <br>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Repayment Start<span class="required"> * </span></label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="dateTo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                                                <button type="button" class="btn blue">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="right col-md-12">
                                                        <a class="btn green" data-toggle="modal" href="#responsive">Upload New Timesheet </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>

    <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
    <script src="assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
    <script src="assets/admin/pages/scripts/index.js" type="text/javascript"></script>
    <script src="assets/admin/pages/scripts/ui-extended-modals.js"></script>

    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function () {
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout
            Demo.init(); // init demo features 
            Index.init();
            Index.initJQVMAP(); // init index page's custom scripts
            Index.initCalendar(); // init index page's custom scripts
            UIExtendedModals.init();
        });

        //        function showLeaveForm() {
        //   document.getElementById('leaveForm').style.display = "block";
        //}
    </script>
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>