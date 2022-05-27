<?php 
session_start();
include('files/dbcon.php');
$id=$_SESSION['id'];
$sql="select * from admin_login where id='$id'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Admin Panel</title>
    <!-- <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">                                                                   <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">  <link rel="stylesheet" href="./css/style.css"> -->
	

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

         <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
 
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
 
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js">                                                                   </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">                                                                   </script>
    
     </head>   
<body>
 <?php include('sidenav.php');?>
<div class="main-content">	<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<!-- Zero Configuration  Starts-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title d-flex align-items-center justify-content-between">Users Query List</h4>
						<div id="userQueryList_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
						
								
								<div class="row">                                                                   <div class="col-sm-12">                                                                   <table class="table table-striped table-bordered dataTable no-footer" id="userQueryList" role="grid" aria-describedby="userQueryList_info" style="width: 1031px;">
								<thead>
									<tr role="row">                                                                   <th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 72.6px;">SL</th>                                                                   <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 208.6px;">User Name</th>                                                                   <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 144.6px;">Mobile</th>                                                                   <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 128.6px;">Email</th>                                                                   <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 135.6px;">Query</th>                                                                   <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 116.6px;">Date</th>                                                                <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 86.6px;">Action</th>    </tr>
								</thead>
								<tbody>                                                                   <tr <tbody>
					     <?php $ret=mysqli_query($con,"select * from contact_admin ORDER BY id DESC");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
					    <tr class="odd">
					        <!--<td valign="top" colspan="6" class="dataTables_empty">No data available in table</td>-->
					        <td align="center">                                                                   <?php echo $cnt;?>                                                                   </td>
                                  <td align="center">                                                                   <?php echo $row['name'];?>                                                                   </td>
                                  <td align="center">                                                                   <?php echo $row['email'];?>                                                                   </td>
                                  <td align="center">                                                                   <?php echo $row['phone'];?>                                                                   </td>
                                  <td align="center">                                                                   <?php echo $row['message'];?>                                                                   </td>
                                  <td align="center">                                                                   <?php echo $row['date'];?>                                                                   </td>
                                  <td align="center"> <a href="deletequery.php?id=<?php echo $row['phone'];?>"
                                     button id="btn" class="btn btn-danger btn-block" onClick="return confirm('Do you really want to delete');">Delete</button>                                                                   </a>
                            </td>
					        
					    </tr>
					    <?php $cnt=$cnt+1; }?>
					    </tbody>                                                                   </table>
					<!--<div id="userQueryList_processing" class="dataTables_processing card" style="display: none;">Processing...</div>-->
					<!--<div class="row">                                                                   <div class="dataTables_paginate paging_simple_numbers" id="userQueryList_paginate">                                                                   <ul class="pagination"> </li>                                                                   </ul>                                                                   </div>                                                                   </div>-->
				 
				    <!--<button type="submit" class="btn btn-primary btn-block" id="searchBtn" name="searchBtn">Delete</button>-->
				 
					
			</div>
		</div>
	</div>
       </tr></tbody></table></div></div></div></div></div></div></div></div></div></div>
	<?php include('footer.php');?>
</body>
</html>    