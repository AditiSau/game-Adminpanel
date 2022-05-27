<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <style type="text/css">
    
/*.row
{

  padding: 1%;
}*/
 <link rel="shortcut icon" href="files/logo1.jpg" /> <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
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
</style>
</head>
<body>
<?php include('sidenav.php');?>

<?php include"files/dbcon.php";?>
<div class="main-content">  <div class="page-content">
    <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
          <h2>DASHBOARD</h2>

        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-4">
        <div class="card overflow-hidden">
          <div class="bg-soft-primary">
            <div class="row"style="background-color:black; ">
              <div class="col-7" >
                <div class="text-primary p-3">
                  <h5 style="color:gold; ">Welcome Back !</h5>
                 
                </div>
              </div>
              <div class="col-5 align-self-end">
                <img src="files/logo2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          
            <div class="row">
              <div class="col-sm-4">
                <div class="avatar-md profile-user-wid mb-4">
                  <img src="files/avatar.jpg" alt="" class="img-thumbnail rounded-circle">
                </div>
              <center>  <h3> Lotus</h3>
                <h6>Admin</h6></center>
              </div>
              <div class="col-sm-8">
                <div class="pt-3">

                  <div class="row">
                    <div class="col-6">
                       
                      <center><h5 class="font-size-18"><?php
                              $sql="SELECT status FROM `register` WHERE status='PENDING'";
$rs=mysqli_query($con,$sql);
$row=mysqli_num_rows($rs);
echo $row;
                              ?></h5>
                      <p class="text-muted mb-0 font-size-12">Unapproved Users</p></center>
                    
                    </div>
                    <div class="col-6">
                       
                      <center><h5 class="font-size-18"><?php
                              $sql="SELECT status FROM `register` WHERE status='APPROVED'";
$rs=mysqli_query($con,$sql);
$row=mysqli_num_rows($rs);
echo $row;
                              ?></h5>
                      <p class="text-muted mb-0 font-size-12">Approved Users</p></center>
                   
                    </div>
                  </div>
                                  </div>
              </div>
            </div>
          </div>
        </div>   
<!-- admin -->



                  <div class="col-xl-8">
              <div class="row ">
                <div class="col-md-4">
                  <div class="card mini-stats-wid">
                    
                      <div class="card-body">
                        <div class="media">
                          <div class="media-body">
                            <p class="text-muted font-weight-medium">Users</p>
                            <h4 class="mb-0"><?php
                              $sql="SELECT * FROM `register`";
$rs=mysqli_query($con,$sql);
$row=mysqli_num_rows($rs);
echo $row;
                              ?></h4>
                          </div>
                          
                              <i class="fa fa-user font-size-24"></i>
                            
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mini-stats-wid"> <div class="card-body">
                    <div class="media">
                      <div class="media-body">
                        <p class="text-muted font-weight-medium">Games</p>
                        <h4 class="mb-0"><?php
                              $sql="SELECT * FROM `game_list`";
$rs=mysqli_query($con,$sql);
$row=mysqli_num_rows($rs);
echo $row;
                              ?></h4>
                      </div>
                     
                          <i class="fa fa-gamepad font-size-24"></i>
                       
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mini-stats-wid">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <p class="text-muted font-weight-medium">Bid Amount</p>
                      <h4 class="mb-0"><?php

$sql="SELECT SUM(bidprice) FROM `userbid`";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs);
echo $row['SUM(bidprice)'];
                                ?></h4>
                    </div>
                   
                        <i class="fa fa-money font-size-24"></i>
                     
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div></div></div>
            
             <div class="card">
            <div class="card-body"><h4 class="card-title mb-6">Market Bid Details</h4>
            <div class="row">
              <div class="col-sm-12">
                <p class="text-muted">Game Name</p>
                 <form id="" name="" method="post">
                  <div class="form-group">
                      <div class="row">
                    <div  class="form-group col-md-5">
                      <select class="form-control" name="game_name">
                          <option value="">Select Game Name</option>                                      
    <?php
        include "files/dbcon.php";  // Using database connection file here
       
        $records = mysqli_query($con, "SELECT game_name From `game_list`");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['game_name'] ."'>" .$data['game_name'] ."</option>";  // displaying data in option menu
        } 
    ?>  
                          
                          </select>
                          </div>
 <div class="form-group col-md-2">
                  
                    <input type="submit" class="btn btn-primary btn-block" id="" name="submit" style="background-color:  gold;  border:0px solid black; color: black; " value="Search">
                  </div>
                    </form>
                    <br>
                    <div class="form-group col-md-2"> 
                    <p class="text-muted">Market Amount</p>
                    <h5>
                    <!--//search button code//-->
                    <?php
                    include 'files/dbcon.php';
								if(isset($_POST['submit']))
								{
								    $id=$_POST['game_name'];
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='$id'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                                }
                    ?>
                    </h5>
                    </div>
                </div>    
                  </div>


                   <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">Total Bids On Single Ank</h4>
              <form method="post">  
              <!--id="searchBidFrm" name="searchBidFrm"-->
                <div class="row">
                  <div class="form-group col-md-5">
                    <label>Game Name</label>
                    <select id="" name="game_name11" class="form-control">
                      <option value="">Select Game Name</option>                                      
    <?php
        include "files/dbcon.php";  // Using database connection file here
       
        $records = mysqli_query($con, "SELECT game_name From `game_list`");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['game_name'] ."'>" .$data['game_name'] ."</option>";  // displaying data in option menu
        } 
    ?>  
                     <!--  <option value="1">MORNING</option>
                      <option value="2">DAY</option>
                      <option value="3">AFTERNOON</option>
                      <option value="4">EVENING</option>
                      <option value="5">NIGHT</option>
                      <option value="6">MIDNIGHT</option>
                       -->
                    </select>
                  </div>
                  <div class="form-group col-md-5">
                    <label>Market Time</label>
                    <select id="market_status" name="market_status" class="form-control">
                      <option value="">Select Market Time</option>  <?php
        include "files/dbcon.php";  // Using database connection file here
        // include('files/dbcon.php');
        $records = mysqli_query($con, "SELECT beton From `userbid`");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['beton'] ."'>" .$data['beton'] ."</option>";  // displaying data in option menu
        } 
    ?> 
                     <!--  <option value="1">Open Market</option>
                      <option value="2">Close Market</option> -->
                      
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label>&nbsp;</label>
                    <!--<input type="submit" class="btn btn-primary btn-block" id="" name="searchBtn" value="Get" style="background-color:  gold;  border:0px solid black; color: black; ">-->
                    <input type="submit" class="btn btn-primary btn-block" id="" name="submit1" style="background-color:  gold;  border:0px solid black; color: black; " value="Search">
                  </div>
                  
                </div>
              </form>
              
              <div class="card">
            <div class="card-body"><div class="dt-ext table-responsive demo-gallery">
					    
					        <!--<td valign="top" colspan="6" class="dataTables_empty">No data available in table</td>-->
					        <?php
					        include 'files/dbcon.php';
					        if(isset($_POST['submit1']))
					        {
					            $a=$_POST['game_name11'];
					            $b=$_POST['market_status'];
					            $selectquery="select * from userbid where gamename='$a' AND beton='$b'";
                                $query=mysqli_query($con,$selectquery);
                                $nums=mysqli_num_rows($query);
                             
                             ?>
                             <table class="table table-striped table-bordered dataTable no-footer" id="userQueryList" role="grid" aria-describedby="userQueryList_info" style="width: 1200px;">
					         <thead >
                				<tr role="row">
                				<th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 70.6px;">ID</th>
                				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 88.6px;">Game Name</th>
                				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 104.6px;">Market Time</th>
                				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 104.6px;">Bid Amount</th>
                			
                				</tr>
					</thead>
					<tbody>
                             <?php
                                while($res=mysqli_fetch_array($query))
                                {
					             ?>
					             <tr class="odd">
        					           <td><?php echo $res['id']; ?></td>
                                       <td><?php echo $res['gamename']; ?></td>
                                       <td><?php echo $res['beton']; ?></td>
                                       <td><?php echo $res['bidprice']; ?></td>
                                 </tr>
					             <?php
                                }

					        }
					        ?>
					  
					    </tbody>
			   </table>
            </div>
          </div>
</div></div></div>

         <div class="row">
            <div class="col-md-12">
              <div id="search">
                <div class="row-2_5 tot_bit_boxs">
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="total0">
                                     <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Sridevi'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    
                        </h2>
                        <h5 class="card-title mt-0">Total Bid Amount 
                        <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Sridevi'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                    ?></h5>
                      </div>
                      <div class="card-footer-ank"><span> Sridevi</span></div>
                    </div>
                  </div>
                  
                  
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="total1">  <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Tara Morning'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    </h2>
                        <h5 class="card-title mt-0">Total Bid Amount
                            <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Tara Morning'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                      ?>  </h5>
                        
                      </div>
                      <div class="card-footer-ank"> <span>Tara Morning</span></div>
                    </div>
                  </div>
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="">  <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Kalyan Jackpot'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    </h2>
                        <h5 class="card-title mt-0">Total Bid Amount         <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Kalyan Jackpot'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                      ?></h5>
                        
                      </div>
                      <div class="card-footer-ank"> <span>Kalyan Jackpot</span></div>
                    </div>
                  </div>
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="">  <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Kalyan Starline'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    </h2>
                        <h5 class="card-title mt-0">Total Bid Amount
                                <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Kalyan Starline'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                      ?>
                        </h5>
                        
                      </div>
                      <div class="card-footer-ank"> <span>Kalyan Satrline</span></div>
                    </div>
                  </div>
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="">  <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Time Bazar'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    </h2>
                        <h5 class="card-title mt-0">Total Bid Amount
                        
                                <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Time Bazar'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                      ?>
                        </h5>
                        
                      </div>
                      <div class="card-footer-ank"> <span>Time Bazar</span></div>
                    </div>
                  </div>
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="">  <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Madhur Day'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    </h2>
                        <h5 class="card-title mt-0">Total Bid Amount
                                <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Madhur Day'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                      ?>
                        </h5>
                        
                      </div>
                      <div class="card-footer-ank"> <span>Madhur Day</span></div>
                    </div>
                  </div>
                  
                  
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="">  <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Rajdhani day'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    </h2>
                        <h5 class="card-title mt-0">Total Bid Amount
                                <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Rajdhani day'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                      ?>
                        
                        </h5>
                        
                      </div>
                      <div class="card-footer-ank"><span>Rajdhani Day</span></div>
                    </div>
                  </div>
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="">  <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Milan day'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    </h2>
                        <h5 class="card-title mt-0">Total Bid Amount
                                <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Milan day'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                      ?>
                        </h5>
                        
                      </div>
                      <div class="card-footer-ank"> <span>Milan Day</span></div>
                    </div>
                  </div>
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="">  <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Supreme Day'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    </h2>
                        <h5 class="card-title mt-0">Total Bid Amount
                                <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Supreme Day'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                      ?>
                        </h5>
                        
                      </div>
                      <div class="card-footer-ank"> <span>Supreme Day</span></div>
                    </div>
                  </div>
                  <div class="col-md-2_5">
                    <div class="card border card_3">
                      <div class="card-header bg-transparent card_3">
                        <h5 class="my-0 text-primary">Total Bids <span id=""></span></h5>
                      </div>
                      <div class="card-body">
                        <h2 id="">  <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT * FROM `userbid` where gamename='Kalyan'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_num_rows($rs);
                                    echo $row;
                                   
                    ?>    </h2>
                        <h5 class="card-title mt-0">Total Bid Amount
                        
                                <?php
                    include 'files/dbcon.php';
								

                                    $sql="SELECT SUM(bidprice) FROM `userbid` where gamename='Kalyan'";
                                    $rs=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($rs);
                                    echo $row['SUM(bidprice)'];
                                   
                      ?></h5>
                        
                      </div>
                      <div class="card-footer-ank"><span>Kalyan</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        
        
        
      </div>
      
    </div>
    <div class="row">
      
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Fund Withdrawal Request History</h4>
            <div class="dt-ext table-responsive demo-gallery">
              <div id="autoFundRequestList_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="autoFundRequestList_length">
                    <!--    <label>Show <select name="autoFundRequestList_length" aria-controls="autoFundRequestList" class="custom-select custom-select-sm form-control form-control-sm">-->
                    <!--  <option value="10">10</option>-->
                    <!--  <option value="25">25</option>-->
                    <!--  <option value="50">50</option>-->
                    <!--  <option value="100">100</option></select> -->
                    <!--entries</label></div></div>-->
                    <!--<div class="col-sm-12 col-md-6"><div id="autoFundRequestList_filter" class="dataTables_filter">-->
                    <!--  <label>Search:-->
                    <!--    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="autoFundRequestList">-->
                    <!--  </label>-->
                      
                      </div></div></div>
                      <div class="row">
                        <div class="col-sm-12">
                          <table class="table table-bordered">
                        <thead>
					  <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 90.6px;">Sl.No</th>
				 <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 248.6px;">Date</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;">Amount</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;">User ID</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 164.6px;">Phone</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Status</th>
					<!--<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Payment</th>-->
					<!--	<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Reject</th>-->
				</tr>
					</thead>
                        <tbody>
                        <?php $ret=mysqli_query($con,"select * from `withdraw` WHERE status='pending' ORDER BY id DESC LIMIT 5");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td align="center"><?php echo $cnt;?></td>
                                  <!-- <td><?php echo $row['sl'];?></td> -->
                                  <td align="center"><?php echo $row['date'];?></td>
                                  <td align="center"><?php echo $row['amount'];?></td>
                        
                                  <td align="center"><?php echo $row['userid'];?></td>
                                  
                                  <td align="center"><?php echo $row['mobile'];?></td>
                                  <td align="center"><?php echo $row['status'];?></td>
                                  <!--<td align="center"> <a href="due.php?id=<?php echo $row['mobile'];?>&ep=<?php echo $row['amount']; ?>"-->
                                  <!--   button  class="btn btn-info" onClick="return confirm('Do you really want to Paid ?');">Pay</button></a>-->
                                  <!--</td>-->
                                  <!--<td align="center"> <a href="reject.php?id=<?php echo $row['userid'];?>"-->
                                  <!--   button  class="btn btn-danger" onClick="return confirm('Do you really want to Paid ?');">Reject</button></a>-->
                                  <!--</td>-->
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                          <!-- <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><button class="p-1 btn-danger">Delete</button></td>
                            
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td><button class="p-1 btn-danger">Delete</button></td>
                            
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry </td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td><button class="p-1 btn-danger">Delete</button></td>
                          </tr> -->
                        </tbody>
                      </table>
             <!--<div id="autoFundRequestList_processing" class="dataTables_processing card" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="autoFundRequestList_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"></div></div></div>-->
            </div>
            <div id="msg"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>




<div class="modal fade" id="winnerListModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-frame modal-top modal-lg">
  <div class="modal-content">
  
    <div class="modal-body">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h5>Total Bid Amount : <b><span id="total_bid"></span></b></h5>
            <h5>Total Winning Amount : <b><span id="total_winneing_amt"></span></b></h5>
            
            <div class="dt-ext table-responsive" style="max-height: 400px;overflow-y: scroll;">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Bid Points</th>
                    <th>Winning Amount</th>
                    <th>Type</th>
                    <th>Bid TX ID</th>
                  </tr>
                </thead>
               
                  
              
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
  <?php include('footer.php');?>
  </div>
</body>
</html> 

 