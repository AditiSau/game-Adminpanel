<?php
// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y');
$time= date('h:i');

?>
<?php
    $p ="<script>document.writeln(sg);</script>";
    $q='sg';
    
    echo "$p";
    
include 'files/dbcon.php';
if(isset($_POST['submit']))
{
    
    $name=$_POST['game_name'];
    $sql="select * from demo where game_name='$name'";
    include 'files/dbcon.php';
    $rs=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($rs);
    $gmn=$row['game_name'];
    $gdate=$row['game_date'];
    
      
      $time=$_POST['game_time'];
      $date=$_POST['game_date'];
   
      $z =$_POST['f3'];
      $p =$_POST['f4'];
    
      $s="$z-$p";
      $t="$p-$z";
    
      $u=$s;
      $win_no="$x$y$z$u";
   
      $run_time=$_POST['run_time'];
   
    if($gdate==$date && $gmn==$name && $run_time=='Close Time')
    {
        $insert_query="UPDATE `demo` SET `choice`='$t' WHERE `game_name`='$gmn'";
        
    include 'files/dbcon.php';
   
      $iquery=mysqli_query($con,$insert_query);
      if($iquery)
      {
         ?>
         <script>
             alert("Winner Result Declare Successful");
         </script>
         <?php
      }
      else
      {
          ?>
         <script>
             alert("Winner Result Declare Failed");
         </script>
         <?php
      }
    }
    else
    {
    $insert_query="INSERT INTO `demo`(`id`, `game_name`, `game_time`, `game_date`, `bet_number`, `beton`, `choice`)  VALUES ('','$name','$time','$date','$s','$run_time','***')";
    include 'files/dbcon.php';
    
      $iquery=mysqli_query($con,$insert_query);
      if($iquery)
      {
         ?>
         <script>
             alert("Winner Result Declare Successful");
         </script>
         <?php
      }
      else
      {
          ?>
         <script>
             alert("Winner Result Declare Failed");
         </script>
         <?php
      } 
    }
      
      $URL="addresult.php";
      echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
      exit;
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head></head>
 <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
    <script type="text/javascript">

var array = ["0","1","2","3","4","5","6","7","8","9","0","1","3","4","5","6","7","8","9","0","1","2","4","5","6","7","8","9","0","1","2","3","5","6","7","8","9","0","1","2","3","4","6","7","8","9","0","1","2","3","4","5","7","8","9","0","1","2","3","4","5","6","8","9","0","1","2","3","4","5","6","7","9","0","1","2","3","4","5","6","7","8","0","1","2","3","4","5","6","7","8","9","0","3","4","5","6","7","8","9","0","1","3","4","5","6","7","8","9","0","1","2","4","5","6","7","8","9","0","1","2","3","5","6","7","8","9","0","1","2","3","4","6","7","8","9","0","1","2","3","4","5","7","8","9","0","1","2","3","4","5","6","8","9","0","1","2","3","4","5","6","7","9","0","1","2","3","4","5","6","7","8","0","1","2","3","4","5","6","7","8","9","1","2","3","4","5","6","7","8","9","0","0","4","5","6","7","8","9","0","1","2","4","5","6","7","8","9","0","1","2","3","5","6","7","8","9","0","1","2","3","4","6","7","8","9","0","1","2","3","4","5","7","8","9","0","1","2","3","4","5","6","8","9","0","1","2","3","4","5","6","7","9","0","1","2","3","4","5","6","7","8","0","1","2","3","4","5","6","7","8","9","1","2","3","4","5","6","7","8","9","0","2","3","4","5","6","7","8","9","0","1","0","5","6","7","8","9","0","1","2","3","5","6","7","8","9","0","1","2","3","4","6","7","8","9","0","1","2","3","4","5","7","8","9","0","1","2","3","4","5","6","8","9","0","1","2","3","4","5","6","7","9","0","1","2","3","4","5","6","7","8","0","1","2","3","4","5","6","7","8","9","1","2","3","4","5","6","7","8","9","0","2","3","4","5","6","7","8","9","0","1","3","4","5","6","7","8","9","0","1","2","0","6","7","8","9","0","1","2","3","4","6","7","8","9","0","1","2","3","4","5","7","8","9","0","1","2","3","4","5","6","8","9","0","1","2","3","4","5","6","7","9","0","1","2","3","4","5","6","7","8","0","1","2","3","4","5","6","7","8","9","1","2","3","4","5","6","7","8","9","0","2","3","4","5","6","7","8","9","0","1","3","4","5","6","7","8","9","0","1","2","4","5","6","7","8","9","0","1","2","3","0","7","8","9","0","1","2","3","4","5","7","8","9","0","1","2","3","4","5","6","8","9","0","1","2","3","4","5","6","7","9","0","1","2","3","4","5","6","7","8","0","1","2","3","4","5","6","7","8","9","1","2","3","4","5","6","7","8","9","0","2","3","4","5","6","7","8","9","0","1","3","4","5","6","7","8","9","0","1","2","4","5","6","7","8","9","0","1","2","3","5","6","7","8","9","0","1","2","3","4","0","8","9","0","1","2","3","4","5","6","8","9","0","1","2","3","4","5","6","7","9","0","1","2","3","4","5","6","7","8","0","1","2","3","4","5","6","7","8","9","1","2","3","4","5","6","7","8","9","0","2","3","4","5","6","7","8","9","0","1","3","4","5","6","7","8","9","0","1","2","4","5","6","7","8","9","0","1","2","3","5","6","7","8","9","0","1","2","3","4","6","7","8","9","0","1","2","3","4","5","0","9","0","1","2","3","4","5","6","7","9","0","1","2","3","4","5","6","7","8","0","1","2","3","4","5","6","7","8","9","1","2","3","4","5","6","7","8","9","0","2","3","4","5","6","7","8","9","0","1","3","4","5","6","7","8","9","0","1","2","4","5","6","7","8","9","0","1","2","3","5","6","7","8","9","0","1","2","3","4","6","7","8","9","0","1","2","3","4","5","7","8","9","0","1","2","3","4","5","6","0","0","1","2","3","4","5","6","7","8","0","1","2","3","4","5","6","7","8","9","1","2","3","4","5","6","7","8","9","0","2","3","4","5","6","7","8","9","0","1","3","4","5","6","7","8","9","0","1","2","4","5","6","7","8","9","0","1","2","3","5","6","7","8","9","0","1","2","3","4","6","7","8","9","0","1","2","3","4","5","7","8","9","0","1","2","3","4","5","6","8","9","0","1","2","3","4","5","6","7"];

var arrays = ["000","100","110","111","112","113","114","115","116","117","118","119","120","121","122","123","124","125","126","127","128","129","130","131","132","133","134","135","136","137","138","139","140","141","142","143","144","145","146","147","148","149","150","151","152","153","154","155","156","157","158","159","160","161","162","163","164","165","166","167","168","169","170","171","172","173","174","175","176","177","178","179","180","181","182","183","184","185","186","187","188","189","190","191","192","193","194","195","196","197","198","199","200","201","202","203","204","205","206","207","208","209","210","211","212","213","214","215","216","217","218","219","220","221","222","223","224","225","226","227","228","229","230","231","232","233","234","235","236","237","238","239","240","241","242","243","244","245","246","247","248","249","250","251","252","253","254","255","256","257","258","259","260","261","262","263","264","265","266","267","268","269","270","271","272","273","274","275","276","277","278","279","280","281","282","283","284","285","286","287","288","289","290","291","292","293","294","295","296","297","298","299","300","301","302","303","304","305","306","307","308","309","310","311","312","313","314","315","316","317","318","319","320","321","322","323","324","325","326","327","328","329","330","331","332","333","334","335","336","337","338","339","340","341","342","343","344","345","346","347","348","349","350","351","352","353","354","355","356","357","358","359","360","361","362","363","364","365","366","367","368","369","370","371","372","373","374","375","376","377","378","379","380","381","382","383","384","385","386","387","388","389","390","391","392","393","394","395","396","397","398","399","400","401","402","403","404","405","406","407","408","409","410","411","412","413","414","415","416","417","418","419","420","421","422","423","424","425","426","427","428","429","430","431","432","433","434","435","436","437","438","439","440","441","442","443","444","445","446","447","448","449","450","451","452","453","454","455","456","457","458","459","460","461","462","463","464","465","466","467","468","469","470","471","472","473","474","475","476","477","478","479","480","481","482","483","484","485","486","487","488","489","490","491","492","493","494","495","496","497","498","499","500","501","502","503","504","505","506","507","508","509","510","511","512","513","514","515","516","517","518","519","520","521","522","523","524","525","526","527","528","529","530","531","532","533","534","535","536","537","538","539","540","541","542","543","544","545","546","547","548","549","550","551","552","553","554","555","556","557","558","559","560","561","562","563","564","565","566","567","568","569","570","571","572","573","574","575","576","577","578","579","580","581","582","583","584","585","586","587","588","589","590","591","592","593","594","595","596","597","598","599","600","601","602","603","604","605","606","607","608","609","610","611","612","613","614","615","616","617","618","619","620","621","622","623","624","625","626","627","628","629","630","631","632","633","634","635","636","637","638","639","640","641","642","643","644","645","646","647","648","649","650","651","652","653","654","655","656","657","658","659","660","661","662","663","664","665","666","667","668","669","670","671","672","673","674","675","676","677","678","679","680","681","682","683","684","685","686","687","688","689","690","691","692","693","694","695","696","697","698","699","700","701","702","703","704","705","706","707","708","709","710","711","712","713","714","715","716","717","718","719","720","721","722","723","724","725","726","727","728","729","730","731","732","733","734","735","736","737","738","739","740","741","742","743","744","745","746","747","748","749","750","751","752","753","754","755","756","757","758","759","760","761","762","763","764","765","766","767","768","769","770","771","772","773","774","775","776","777","778","779","780","781","782","783","784","785","786","787","788","789","790","791","792","793","794","795","796","797","798","799","800","801","802","803","804","805","806","807","808","809","810","811","812","813","814","815","816","817","818","819","820","821","822","823","824","825","826","827","828","829","830","831","832","833","834","835","836","837","838","839","840","841","842","843","844","845","846","847","848","849","850","851","852","853","854","855","856","857","858","859","860","861","862","863","864","865","866","867","868","869","870","871","872","873","874","875","876","877","878","879","880","881","882","883","884","885","886","887","888","889","890","891","892","893","894","895","896","897","898","899","900","901","902","903","904","905","906","907","908","909","910","911","912","913","914","915","916","917","918","919","920","921","922","923","924","925","926","927","928","929","930","931","932","933","934","935","936","937","938","939","940","941","942","943","944","945","946","947","948","949","950","951","952","953","954","955","956","957","958","959","960","961","962","963","964","965","966","967","968","969","970","971","972","973","974","975","976","977","978","979","980","981","982","983","984","985","986","987","988","989","990","991","992","993","994","995","996","997","998","999",];
function changeValue(fx) {
  document.getElementById('productPrice').value = array[fx];
  document.getElementById('pna').value = arrays[fx];
};
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<body>
  <?php require("sidenav.php");?>
  <div class="main-content">  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body"><div class="row">
              <div class="col-lg-6 mx-auto">
                <div class="auth-form-light text-left p-5">
                  <h6 class="font-weight-light">Add Game Result</h6>
                  <form class="pt-3" METHOD="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg" readonly value="<?php echo "$time" ?>" placeholder="Enter Game Time" name="game_time" required=""><br>
                      <input type="text" class="form-control form-control-lg" readonly value="<?php echo "$date" ?>" placeholder="Enter Game Time" name="game_date" required=""><br>
                      <select name="run_time" class="form-control form-control-lg" required>
                        <option value="Choice Game Session Time">Choice Game Session Time</option>
                        <option value="Open Time">Open Time</option>
                        <option value="Close Time">Close Time</option>
                      </select><br>
                      <button type="button" name="sub11" class="btn btn-success" data-toggle="modal" data-target="#myModal">Declare Result</button>
                      <!--<input type="submit" class="btn btn-primary" name="submit" value="Add">-->
                      <!--<modal>-->
                      <!-- The Modal -->
                                          <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                              
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Add Bet Result</h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <form method="POST">
                                                      <select class="form-control form-control-lg" name="game_name" id ="game_name" onchange="getvalue()"; required>
                                            <option >-- Select Game Name --</option>
                                            <?php
                                                include "files/dbcon.php";  // Using database connection file here
                                                // include('../config/db_con.php');
                                                $records = mysqli_query($con, "SELECT game_name From `game_list`");  // Use select query here 
                                        
                                                while($data = mysqli_fetch_array($records))
                                                {
                                                    echo "<option value='". $data['game_name'] ."'>" .$data['game_name'] ."</option>";  // displaying data in option menu
                                                }
                                               // $abc = $data['game_name'];
                                                
                                            ?>  
                                          </select><br>
                                                          <select name="fx" onchange="changeValue(this.value)" class="form-control form-control-lg" required>
                                                      <option value="">Select Panna</option>
                                                      <option value="0">000</option>
                                                      <option value="1">100</option>
                                                       <?php
                                                      for($j=110; $j<=999;$j++){
                                                        ?>
                                                      <option value="<?php 
                                                     echo $j-108;
                                                          
                                                          ?>"><?php echo $j  ?></option>
                                        
                                                      <?php
                                                     // $i++;
                                                      }
                                                      ?>
                                                     
                                                      
                                                  </select><br>
                                                  <input type="text" id="pna" name="f3" readonly required hidden>
                                                  <p>Digit</p> 
                                                  
                                                  <input type="text" class="form-control form-control-lg" name="f4" placeholder="Add Sum of Digit" id="productPrice" readonly><br>
                                                   <!--<input type="text" class="form-control form-control-lg" name="f4" placeholder="Add Sum of Digit" id="edit-id3" readonly>-->
                                                       
                                                          <input type="submit" class="btn btn-primary" name="submit" value="Add">
                                                  </form>
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                                <lable></lable>
                                              </div>
                                            </div>
                                          </div>
                          
                      <!--</modal>-->
                    </div>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
          
          <center>
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <table  class="table table-striped table-bordered dataTable no-footer">
                    <thead>
                      
                      
                      <tr>
                        <th class="sorting_desc" tabindex="0" aria-controls="fundRequestList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 182.6px;">Game Name</th>
                        <th class="sorting_desc" tabindex="0" aria-controls="fundRequestList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 152.6px;">Game Time</th>
                        <th class="sorting_desc" tabindex="0" aria-controls="fundRequestList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 152.6px;">Game Date</th>
                        <th class="sorting_desc" tabindex="0" aria-controls="fundRequestList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 152.6px;">Open Panna</th>
                        <th class="sorting_desc" tabindex="0" aria-controls="fundRequestList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 92.6px;">Close Panna</th>
                        
                      </tr></thead>
                      
                      
                      
                      <tbody>
                        
                        <?php
                        
                        
                        include 'files/dbcon.php';
                        // $image=$res['Product_Pic_Main'];
                        $selectquery="select * from demo ORDER BY id DESC ";
                        $query=mysqli_query($con,$selectquery);
                        $nums=mysqli_num_rows($query);
                        
                        
                        while($res=mysqli_fetch_array($query))
                        {
                        //   $cid=$res['Company_ID'];
                        ?>
                        <tr>
                          <!--<td><?php echo $res['id']; ?></td>-->
                          <td><?php echo $res['game_name']; ?></td>
                          <td><?php echo $res['game_time']; ?></td>
                          <td><?php echo $res['game_date']; ?></td>
                          
                          
                          <td><?php echo $res['bet_number'];?></td>
                          <td><?php echo $res['choice'];?></td>
                          
                          
                          <!--<td> <a href="winner_delete.php?id=<?php echo $res['id'];?>"-->
                          <!--      button class="btns" onClick="return confirm('Do you really want to Remove');">Remove</button></a>-->
                          <!--</td>-->
                          
                          
                          
                          
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
</body>
</html>