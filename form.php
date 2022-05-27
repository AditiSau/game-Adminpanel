<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
   
<?php include('sidenav.php')?>
<div class="main-content">  <div class="page-content">
    <div class="container-fluid">
 <?php include 'files/dbcon.php';
                // $image=$res['Product_Pic_Main'];
$id=$_GET['ip'];
$epp=$_GET['epp'];
$d=$_GET['d'];
            //   $selectquery="select * from game_list ORDER BY id DESC";
            //   $query=mysqli_query($con,$selectquery);
            //   $nums=mysqli_num_rows($query);
              
             
            //   while($res=mysqli_fetch_array($query))
            //   {
?>
        
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card" >
                  <div class="card-body">
                    
                   
                          <h6 class="font-weight-light">Market details</h6>
                         
                            <div class="form-group">
                                <h7>Active Time</h7>
                              <input type="time" class="form-control form-control-lg" value="<?php echo $id?>"readonly="readonly"  required=""><br>
                              <h7>Close Time</h7>
                              <input type="time" class="form-control form-control-lg" value="<?php echo $epp?>" readonly="readonly" name="" required="" ><br>
                              <h7>Day</h7>
                              <input type="text" class="form-control form-control-lg" value="<?php echo $d?>" placeholder="Enter User ID" required="" readonly="readonly"><br>
                              
                            </div>
                           
                         
                         <?php ?>
                        </div>
                      </div>
                    </div>
               </div>
              </div>
            </div>
           
                   
                   
                            

 
</body>
</html>
