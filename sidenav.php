<!DOCTYPE html>
<!-- saved from url=(0046)http://.com/-admin/dashboard -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Lotus</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap Css -->
	<link href="files/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
	<link href="files/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<link href="files/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<link href="files/select2.min.css" rel="stylesheet" type="text/css">
	<!-- App Css-->
	<link href="files/app.min.css" id="app-style" rel="stylesheet" type="text/css">
	
	<link href="files/custom.css" rel="stylesheet" type="text/css"> <link rel="shortcut icon" href="files/logo1.jpg" />
	 <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body data-sidebar="dark">
    
	<div id="layout-wrapper">
	<header id="page-topbar">
	<div class="navbar-header">
		<div class="d-flex">
			<!-- LOGO -->
			<div class="navbar-brand-box">
				<a href="#" class="logo logo-dark">
					<span class="logo-sm">
						<img src="files/logo1.jpg" alt="" height="40" width="">
					</span>
					<span  style="font-size: 2rem;" class="logo-lg">
						LOTUS
					</span>
				</a>

				<a href="#" class="logo logo-light">
					<span class="logo-sm">
						<img src="files/logo1.jpg" alt="" height="42" >
					</span>
					<span style="font-size: 2rem;"class="logo-lg">
						LOTUS
					</span>
				</a>
			</div>

			<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
				<i class="fa fa-fw fa-bars"></i>
			</button>
			
			<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
				<b><a href="dashboard.php">Home</a></b>
			</button>

	
		</div>

		<div class="d-flex">
			
			
			<div class="dropdown d-none d-lg-inline-block ml-1">
				<button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
					<i class="bx bx-fullscreen"></i>
				</button>
			</div>

			
			<div class="dropdown d-inline-block">
				<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img class="rounded-circle header-profile-user" src="files/avatar.jpg" alt="Header Avatar">
					<span class="d-none d-xl-inline-block ml-1" style="color: white;font-size: 16px;">Admin</span>
					
				</button>
						</div> 

			

		</div>
	</div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu mm-active">

	<div data-simplebar="init" class="h-100 mm-show"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">

		<!--- Sidemenu -->
		<div id="sidebar-menu" class="mm-active">
			<!-- Left Menu Start -->
			<ul class="metismenu list-unstyled mm-show" id="side-menu">
				<li class="mm-active">
					<a href="dashboard.php" class="waves-effect mm-active active">
						<i class="fa fa-th-large"></i>
						<span>Dashboards</span>
					</a>
				</li>	
			
				<li>
					<a href="usermanagement.php" class="waves-effect">
						<i class="fa fa-user"></i>
						<span>User Management</span>
					</a>
				</li>
				
				<li>
					<!--<a href="result.php" class="waves-effect">-->
					<a href="addresult.php" class="waves-effect">
						<i class="fas fa-file-alt"></i>
						<span>Declare Result</span>
					</a>
				</li>
				<li>
					<a href="resulthistory.php" class="waves-effect">
						<i class="fas fa-file-alt"></i>
						<span>Result History</span>
					</a>
				</li>
			
				
							<li>
					<a href="javascript: void(0);" class="waves-effect">
						<i class="fas fa-pencil-alt"></i>
						<span>Report Management</span><i class="fa fa-angle-double-down" style="font-size:14px"></i>
					</a>
					<ul class="sub-menu mm-collapse" aria-expanded="false">
						<li><a href="betting_status.php">Users Bet History</a></li>
						<!--<li><a href="alltransction.php">Customer Sell Report</a></li>-->
						<!--<li><a href="winreport.php">Winning Report</a></li>-->
					
						<!--<li><a href="withdrawal.php">Withdraw Report</a></li>-->
											</ul>
				</li>
						
				<li>
					<a href="javascript: void(0);" class="waves-effect">
						<i class="fa fa-inr"></i>
						<span>Wallet Management</span><i class="fa fa-angle-double-down" style="font-size:14px"></i>
					</a>
					<ul class="sub-menu mm-collapse" aria-expanded="false">
						<li><a href="wa_mng.php">Fund Request</a> </li>
						<li><a href="u_wallet.php">Withdraw Request</a> </li> 
						<li><a href="addfund.php">Add Fund (User Wallet)</a> </li>
									<li><a href="userwallet.php">User Wallet</a> </li>
					
					</ul>
				</li>
							<li>
					<a href="javascript: void(0);" class="waves-effect">
						<i class="fas fa-chess-knight"></i>
						<span>Games Management</span><i class="fa fa-angle-double-down" style="font-size:14px"></i>
					</a>
					<ul class="sub-menu mm-collapse" aria-expanded="false">
						<li><a href="gamename.php">Game Name</a> </li>
						<li><a href="gamerate.php">Game Rates</a></li>
						<li><a href="gamerateinsert.php">Insert Game Rate</a></li>
					</ul>
				</li>
				
				
				
				<li>
					<a href="javascript: void(0);" class="waves-effect">
						<i class="fas fa-dice"></i>
						<span>Game &amp; Numbers</span><i class="fa fa-angle-double-down" style="font-size:14px"></i>
					</a>
					<ul class="sub-menu mm-collapse" aria-expanded="false">
						<li><a href="single-digit.php">Single Digit</a></li>
				  
						<li><a href="jodi-digit.php">Jodi Digit</a> </li> 
						
						<li><a href="single-pana.php">Single Pana</a> </li> 
					   
						<li><a href="double-pana.php">Double Pana</a> </li> 
					   
						<li><a href="tripple-pana.php">Tripple Pana</a> </li> 
						
						<li><a href="half-sangam.php">Half Sangam</a> </li> 
					   
						<li><a href="full-sangam.php">Full Sangam</a> </li>  
					</ul>
				</li>
				
				<li>
					<a href="javascript: void(0);" class="waves-effect">
						<i class="fas fa-pencil-alt"></i>
						<span>Settings</span><i class="fa fa-angle-double-down" style="font-size:14px"></i>
					</a>
					<ul class="sub-menu mm-collapse" aria-expanded="false">
						<li><a href="change_upi_id.php">Change Upi ID</a></li>
					
						<!--<li><a href="cleardata.php">Clear Data</a></li>-->
					
						<li><a href="how-play.php">How To Play</a> </li>
					</ul>
				</li>
				
								
				<li>
					<a href="javascript: void(0);" class="waves-effect">
						<i class="fas fa-pencil-alt"></i>
						<span>Notice Management</span><i class="fa fa-angle-double-down" style="font-size:14px"></i>
					</a>
					<ul class="sub-menu mm-collapse" aria-expanded="false">
						
						<li><a href="sendnoti.php">Send Notification</a> </li> 
					</ul>
				</li>
				
				
				
				<!-- <li>-->
				<!--	<a href="javascript: void(0);" class="waves-effect">-->
				<!--		<i class="fas fa-pencil-alt"></i>-->
				<!--		<span>Starline Management</span><i class="fa fa-angle-double-down" style="font-size:14px"></i>-->
				<!--	</a>-->
				<!--	<ul class="sub-menu mm-collapse" aria-expanded="false">-->
					
					
				<!--		<li><a href="starlinesell.php">Starline Sell report</a></li>-->
				<!--		<li><a href="winreport.php">Starline Winning report</a></li>-->
					
				<!--	</ul>-->
				<!--</li>-->
				
								
				
				<li>
					<a href="usersquery.php" class="waves-effect">
						<i class="far fa-question-circle"></i>
						<span>Users Query</span>
					</a>
				</li>
					<li>
					<a href="contactdetails.php" class="waves-effect">
						<i class="far fa-question-circle"></i>
						<span>Contact Details</span>
					</a>
				</li>
				
								 
				<li>
					<a href="update_admin.php" class="waves-effect">
						<i class="fa fa-address-book"></i>
						<span>Admin Management</span>
					</a>
				</li>
				<!--		<li>-->
				<!--	<a href="javascript: void(0);" class="waves-effect">-->
				<!--		<i class="fa fa-arrows"></i>-->
				<!--		<span>Roulette Management</span>-->
				<!--	</a>-->
				<!--	<ul class="sub-menu mm-collapse" aria-expanded="false">-->
						
				<!--		<li><a href="rbid.php">Bid History</a></li>-->
				<!--		<li><a href="roulette-result-history">Result History</a></li>-->
				<!--		<li><a href="roulette-winning-report">Roulette Winning Report</a></li>-->
				<!--	</ul>-->
				<!--</li>-->
				
			</ul>
		</div>
		<!-- Sidebar -->
	</div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 660px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 391px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
</div>
<!-- Left Sidebar End -->

<script src="files/jquery.min.js.download"></script>
	<script src="files/bootstrap.bundle.min.js.download"></script>
	<script src="files/metisMenu.min.js.download"></script>
	<script src="files/simplebar.min.js.download"></script>
	<script src="files/waves.min.js.download"></script>
	<script src="files/select2.min.js.download"></script>
	<script src="files/form-advanced.init.js.download"></script>
	<!-- Required datatable js -->
        <script src="files/jquery.dataTables.min.js.download"></script>
        <script src="files/dataTables.bootstrap4.min.js.download"></script>
        <!-- Buttons examples -->
        <script src="files/dataTables.buttons.min.js.download"></script>
        <script src="files/buttons.bootstrap4.min.js.download"></script>
        <script src="files/jszip.min.js.download"></script>
        <script src="files/pdfmake.min.js.download"></script>
        <script src="files/vfs_fonts.js.download"></script>
        <script src="files/buttons.html5.min.js.download"></script>
        <script src="files/buttons.print.min.js.download"></script>
        <script src="files/buttons.colVis.min.js.download"></script>
        
        <!-- Responsive examples -->
        <script src="files/dataTables.responsive.min.js.download"></script>
        <script src="files/responsive.bootstrap4.min.js.download"></script>

        <!-- Datatable init js -->
        <script src="files/datatables.init.js.download"></script> 
	<!-- App js -->
	<script src="files/app.js.download"></script>
	<script src="files/customjs.js.download"></script>
	

</html>