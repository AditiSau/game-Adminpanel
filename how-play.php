<?php
include 'files/dbcon.php';
// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y');
$time= date('h:i');

if(isset($_POST['submit']))
{
    $a=$_POST['video_link'];
    $b=$_POST['video_link_roullete'];
    
    
    $insert="INSERT INTO `video_list`(`id`, `vid_link`, `vid_link_roulette`, `date`, `time`) VALUES ('','$a','$b','$date','$time')";
    $res=mysqli_query($con,$insert);
    if($res)
    {
        
         ?>
         <script>
             alert("Video Link Upload Successful");
         </script>
         <?php
      }
      else
      {
          ?>
         <script>
             alert("Upload Failed");
         </script>
         <?php
    }
    $URL="how-play.php";
      echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
      exit;
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
 <?php include('sidenav.php');?>
 <?php include("files/dbcon.php");?> 
<div class="main-content">	<div class="page-content">
	<div class="container-fluid">
				
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
						  
							<div class="card-body">
								<h4 class="card-title">How To Play</h4>
								<form class="theme-form mega-form" method="post">
								    <!--id="howToPlayFrm" name="howToPlayFrm"-->
									<input type="hidden" name="id" value="1">
									<div class="form-group">
										<label>How To Play Content</label>
								
									<div class="form-group">
										<label for="exampleInputEmail1">Video Link</label>
										<input type="text" name="video_link" id="video_link" class="form-control" placeholder="https://www.youtube.com/watch?v=tvNc3jA-6_U"  >
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Video Link Roulette</label>
										<input type="text" name="video_link_roullete" id="video_link_roullete" class="form-control" placeholder="https://www.youtube.com/watch?v=tvNc3jA-6_U">
									</div>
									
									
								
									<div class="form-group">
										<input type="submit" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;" name="submit" value="Submit" class="btn btn-primary waves-light m-t-10" id="submitBtn">
									</div>
									<div class="form-group">
										<div id="error"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<div class="row">
			<!-- Zero Configuration  Starts-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title d-flex align-items-center justify-content-between">Video List</h4><div class="dt-ext table-responsive demo-gallery">
						<div id="userQueryList_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
							<div class="row">                                                                   
							<div class="col-sm-12 ">
							
								
							  <div class="dt-ext table-responsive" style="max-height: 400px;overflow-y: scroll;">
              	
							 <table class="table table-striped table-bordered dataTable no-footer" id="" role="grid" aria-describedby="userQueryList_info" style="width: 1031px;">
								<thead>
									<tr role="row">                                                                 
									<th class="sorting_desc" tabindex="0" aria-controls="" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 72.6px;">SL</th>                                                               
									<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 208.6px;">Video Link 1</th>                                                                 
									<th class="sorting" tabindex="0" aria-controls="" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 144.6px;">Video link 2 </th>  
									<th class="sorting" tabindex="0" aria-controls="" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 128.6px;">date</th>     
									<th class="sorting" tabindex="0" aria-controls="" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 135.6px;">Time</th>            
								                                                   
									<th class="sorting" tabindex="0" aria-controls="" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 86.6px;">Action</th>    
									
									</tr>
								</thead>
								<tbody>                                                                   
								
					     <?php $ret=mysqli_query($con,"select * from video_list ORDER BY id DESC");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
					    <tr class="odd">
					        <!--<td valign="top" colspan="6" class="dataTables_empty">No data available in table</td>-->
					        <td align="center">  
					        <?php echo $cnt;?>  </td>
					        
                                  <td align="center">                                                                   <?php echo $row['vid_link'];?>                                                                  
                                  </td>
                                  <td align="center">                                                                   <?php echo $row['vid_link_roulette'];?>                                                                 
                                  </td>
                                  <td align="center">                                                                   <?php echo $row['date'];?>                                                                   </td>
                                  <td align="center">                                                                   <?php echo $row['time'];?>                                                                   </td>
                               
                                  <td align="center"> <a href="deletequery4.php?id=<?php echo $row['vid_link'];?>"
                                     button id="btn" class="btn btn-danger btn-block" onClick="return confirm('Do you really want to delete');">Delete</button>                                                                   </a>
                            </td>
					        
					    </tr>
					    <?php $cnt=$cnt+1; }?>
					    </tbody>                                                                   </table>
					<!--<div id="userQueryList_processing" class="dataTables_processing card" style="display: none;">Processing...</div>-->
					<!--<div class="row">                                                                   <div class="dataTables_paginate paging_simple_numbers" id="userQueryList_paginate">                                                                   <ul class="pagination"> </li>                                                                   </ul>                                                                   </div>                                                                   </div>-->
				 
				    <!--<button type="submit" class="btn btn-primary btn-block" id="searchBtn" name="searchBtn">Delete</button>-->
				 

	     </tr></tbody></table></div></div></div></div></div></div></div>
		</div></div>
		
		
		
		
		
		
		
		
		
		
		</div>
	</div>
</div>








<?php include('footer.php');?>
</body>
</html>