<!--<!DOCTYPE html>-->
<html>
<head>
	<title>Admin Panel</title>
	<head>
<body>
 <?php include('sidenav.php');?>


<div class="main-content">	<div class="page-content">
	<div class="container-fluid">
		<div class="row">
	
			<div class="col-sm-12">
				<div class="card">
				
				  <div class="card-body">
				 
				  <h4 class="card-title d-flex align-items-center justify-content-between">Game 
				  	Name List				  


<a class="btn btn-primary " style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;"href="addgame.php" role="button" >Add Game </a>


			</h4>		
					<div class="dt-ext table-responsive demo-gallery">
<!--	  <div id="gameList_wrapper" class="dataTables_wra2pper dt-bootstrap4 no-footer">-->
<!--				<div class="row">-->
<!--					  	<div class="col-sm-12 col-md-6">-->
<!--					  		<div class="dataTables_length" id="gameList_length"><label>Show <select name="gameList_length" aria-controls="gameList" class="custom-select custom-select-sm form-control form-control-sm">-->
<!--					  			<option value="10">10</option>-->
<!--					  		<option value="25">25</option>-->
<!--					  		<option value="50">50</option>-->
<!--					  		<option value="100">100</option></select>-->

<!--					  		 entries</label></div></div>-->
<!--					  		 <div class="col-sm-12 col-md-6">-->

<!--	<div id="gameList_filter" class="dataTables_filter">-->

<!--	<label>Search:-->

<!--	<input type="search" class="form-control form-control-md" placeholder="" aria-controls="gameList"></label></div></div></div><div class="row">-->
<!--<div class="col-sm-12">-->

  <table class="table table-striped table-bordered dataTable no-footer" id="gameList" role="grid" aria-describedby="gameList_info" style="width: 1000px;">
  <thead class="table-secondary p-5">
                     
    
                        <tr role="row">
                              <th scope="col" class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 30.6px;">Sl</th>
                              <th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 60.6px;">Game ID</th>
                              <th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 90.6px;">Game Name</th>
                              <th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 50.6px;">Active Time</th>
                              <th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 50.6px;">Close Time</th>
                              <th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 60.6px;">Day</th>
                              <th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 60.6px;">Game Status</th>
                              <!--<th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 60.6px;">Active Game</th>-->
                              <!--<th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 60.6px;">Deactive Game</th>-->
                               <th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 160.6px;">Action</th>
                             <!--<th scope="col"class="sorting" tabindex="0" aria-controls="gameList" rowspan="1" colspan="1" aria-label="Today Open: activate to sort column ascending" style="width: 60.6px;">Delete Game</th>-->
                        </tr>
                       
                      </thead>
                      <tbody>
                        
                        <?php
            
           
               include 'files/dbcon.php';
                // $image=$res['Product_Pic_Main'];

               $selectquery="select * from game_list ORDER BY id DESC";
               $query=mysqli_query($con,$selectquery);
               $nums=mysqli_num_rows($query);
               $cnt=1;
             
               while($res=mysqli_fetch_array($query))
               {
                //   $cid=$res['Company_ID'];
            ?>
                <tr> 
                               <td><?php echo $cnt; ?></td>
                               <td id="zzy"><?php echo $res['game_id']; ?></td>
                               <td><?php echo $res['game_name']; ?></td>
                               <td><?php echo $res['a_time']; ?></td>
                               <td><?php echo $res['c_time']; ?></td>
                               <td><?php echo $res['day']; ?></td>
                               <td><?php echo $res['game_status']; ?></td>
                               
                             <!--<td id="mbtn">-->
                             <!--   <a  href="active.php?id=<?php echo $res['game_id'];?>"-->
                             <!--        button class="btns deact edit-btn btn btn-success" onClick="return confirm('Do you really want to Active');">Active</button></a>-->
                             <!--        </td>-->
                               

                             <!--  <td id="mbtn">-->
                             <!--   <a href="deactive.php?id=<?php echo $res['game_id'];?>"-->
                             <!--        button class="btns deact edit-btn btn btn-secondary" onClick="return confirm('Do you really want to Deactive');">Deactive</button></a>-->
                             <!--        </td>-->
                                     <!--<a  id="mbtn" -->
                                     <!--button class="btns deact edit-btn btn btn-secondary" data-id="<?php echo $res['game_id']; ?>" data-at="<?php echo $res['a_time']; ?>"  data-ct="<?php echo $res['c_time']; ?>" data-td="<?php echo $res['day']; ?>" onclick="deactive.php">Deactive</button></a>-->

                               
                               <td> <a href="edit_game1.php?ip=<?php echo $res['game_id'];?>&epp=<?php echo $res['game_name']; ?>&d=<?php echo $res['a_time']; ?>&e=<?php echo $res['c_time']; ?>&r=<?php echo $res['day']; ?>"
                                      id="edit" button class="btns btn btn-info" onClick="return confirm('Do you really want to Edit Game');">Edit</button></a>
                                      &nbsp <a href="form.php?ip=<?php echo $res['a_time'];?>&epp=<?php echo $res['c_time']; ?>&d=<?php echo $res['day'];?>"<button class="btn btn-primary"  >Market Details</button> </a>



                               </td>
                               <!--<td> <a href="del_game.php?isp=<?php echo $res['game_id'];?>&epppp=<?php echo $res['game_name']; ?>"-->
                               <!--        button class="btns btn btn-danger" onClick="return confirm('Do you really want to Delete Game');">Delete</button></a>-->
                               <!--</td>-->
                               
                               
                          
                   
                </tr>
             <?php
           $cnt=$cnt+1; } 

            ?>
   

                      </tbody>
                    </table>
                    </div>
               </div>
              </div>
            </div>
           
                   


	
</div></div></div></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php require("footer.php")?>

</body>
</html>