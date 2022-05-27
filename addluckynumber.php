<?php
$glob;
// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y');
// echo $date;
$time= date('h:i');

?>



<?php
    
    $p ="<script>document.writeln(sg);</script>";
    $q='sg';
    
    echo "$p";

if(isset($_POST['submit']))
{
    
    $name=$_POST['game_name1'];
    $sql="select * from game_result where game_name='$name'";
    include 'files/dbcon.php';
    $rs=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($rs);
    $gmn=$row['game_name'];
    $gdate=$row['game_date'];
    
      
      $time=$_POST['game_time'];
      $date=$_POST['game_dates'];
   
      $z =$_POST['f3'];
      $p =$_POST['f4'];
    
      $s="$z-$p";
      $t="$p-$z";
    
      $u=$s;
      $win_no="$x$y$z$u";
   
      $run_time=$_POST['run_time'];
   
    if($gdate==$date && $gmn==$name && $run_time=='Close Time')
    {
        // $insert_query="UPDATE `game_result` SET `choice`='$t' WHERE `game_name`='$gmn'";
        $insert_query="INSERT INTO `game_result`(`id`, `game_name`, `game_time`, `game_date`, `bet_number`, `beton`, `choice`,`number`)  VALUES ('','$name','$time','$date','$z','$run_time','***','$p')";
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
    //   $insert_query="INSERT INTO `game_result`(`id`, `game_name`, `game_time`, `game_date`, `bet_number`, `beton`, `choice`)  VALUES ('','$name','$time','$date','***','$run_time','$t')";
    $insert_query="INSERT INTO `game_result`(`id`, `game_name`, `game_time`, `game_date`, `bet_number`, `beton`, `choice`,`number`)  VALUES ('','$name','$time','$date','$z','$run_time','***','$p')";
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
      
      $URL="addluckynumber.php";
      echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
      exit;
    
   
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Declare Result</title>
    <!-- plugins:css -->
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
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/yash-modified.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <style>
           .header-profile-user {
                position: absolute;
                width: 42px;
                left: 1513px;
                top: 14px;
                object-fit: cover;
           }
           #navbardrop {
                  border: none;
           }
           .navbar .navbar-brand-wrapper {
                		    background: #181824;
                            width: 240px;
                            height: 70px;
                            padding: 0 1.75rem;
                		}
                		.navbar .navbar-menu-wrapper {
    transition: width 0.25s ease;
    -webkit-transition: width 0.25s ease;
    -moz-transition: width 0.25s ease;
    -ms-transition: width 0.25s ease;
    color: #111111;
    padding-left: 24px;
    padding-right: 24px;
    width: calc(100% - 240px);
    height: 70px;
}
           
       </style>


  </head>
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
   
      <!-- partial -->
      <?php include("sidenav.php");?>  
      <div class="main-content">	<div class="page-content">
	<div class="container-fluid"><div class="row">
			
			<div class="col-sm-12">
				<div class="card">
				  <div class="card-body">
      <form method="post">
      <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card" >
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-0" >
                      <h1  class="card-title mb-sm-0"> Welcome Admin</h1>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left p-5">
                          <h6 class="font-weight-light">Add Game Result</h6>
                          <form class="pt-3" METHOD="POST">
                            <div class="form-group">
                              <!--<input type="text" class="form-control form-control-lg"  placeholder="Enter Game Name" name="game_name" required=""><br>-->
                              	
  
  
                              <input type="text" class="form-control form-control-lg" readonly value="<?php echo "$time" ?>" placeholder="Enter Game Time" name="game_time" required=""><br>
                              <input type="text" class="form-control form-control-lg" readonly value="<?php echo "$date" ?>" placeholder="Enter Game Time" name="game_dates" required=""><br>
                              <select name="run_time" class="form-control form-control-lg" required>
                                  <option value="Choice Game Session Time">Choice Game Session Time</option>
                                  <option value="Open Time">Open Time</option>
                                  <option value="Close Time">Close Time</option>
                              </select><br>
                               <a href="#"><button type="button" name="sub11" class="btn btn-success" data-toggle="modal" data-target="#myModal">Declare Result</button></a>
                               <!--<input type ="submit" name="sub11">-->
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
              <select class="form-control form-control-lg" name="game_name1" id ="game_name" onchange="getvalue()"; required>
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
              
              <!--<option value="2">110</option>-->
              <!--<option value="3">111</option>-->
              <!--<option value="4">112</option>-->
              <!--<option value="5">113</option>-->
              <!--<option value="6">114</option>-->
              <!--<option value="7">115</option>-->
              <!--<option value="8">116</option>-->
              <!--<option value="9">117</option>-->
              <!--<option value="10">118</option>-->
              <!--<option value="11">119</option>-->
              <!--<option value="12">120</option>-->
              <!--<option value="13">121</option>-->
              <!--<option value="14">122</option>-->
              <!--<option value="15">123</option>-->
              <!--<option value="16">124</option>-->
              <!--<option value="17">125</option>-->
              <!--<option value="18">126</option>-->
              <!--<option value="19">127</option>-->
              <!--<option value="20">128</option>-->
              <!--<option value="21">129</option>-->
              <!--<option value="22">130</option>-->
              <!--<option value="23">131</option>-->
              <!--<option value="24">132</option>-->
              <!--<option value="25">133</option>-->
              <!--<option value="26">134</option>-->
              <!--<option value="27">135</option>-->
              <!--<option value="28">136</option>-->
              <!--<option value="29">137</option>-->
              <!--<option value="30">138</option>-->
              <!--<option value="31">139</option>-->
              <!--<option value="32">140</option>-->
              <!--<option value="33">141</option>-->
              <!--<option value="34">142</option>-->
              <!--<option value="35">143</option>-->
              <!--<option value="36">144</option>-->
              <!--<option value="37">145</option>-->
              <!--<option value="38">146</option>-->
              <!--<option value="39">147</option>-->
              <!--<option value="40">148</option>-->
              <!--<option value="41">149</option>-->
              <!--<option value="42">150</option>-->
              <!--<option value="43">151</option>-->
              
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
  
                              
                            <!--  <div class="mt-3">-->
                              <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
                            <!--  <input type="submit" name="submit1" value="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">-->
                            <!--</div><br>-->
                              
                              
                              
                              <!--    <input type="text" class="form-control form-control-lg"  placeholder="Enter Winner Number" name="game_bet_no" required=""><br>-->
                              <!--    <select name="betno" onchange="changeValue(this.value)" class="form-control form-control-lg" required>-->
                              <!--    <option value="0">Choice Digit</option>-->
                              <!--    <option value="1">Single digit</option>-->
                              <!--    <option value="Jodi digit">Jodi digit</option>-->
                              <!--    <option value="Single pana">Single pana</option>-->
                              <!--    <option value="Double pana">Double pana</option>-->
                              <!--    <option value="Triple pana">Triple pana</option>-->
                              <!--    <option value="Sp motor">Sp motor</option>-->
                              <!--    <option value="Dp motor">Dp motor</option>-->
                              <!--    <option value="Half sangam">Half sangam</option>-->
                              <!--</select><br>-->
                              <!--    <input type="text" class="form-control form-control-lg"  placeholder="Enter Winner Number" name="a2" required=""><br>-->
                              
                              
                              
          <!--                    <select name="fx" onchange="changeValue(this.value)" class="form-control form-control-lg" required="">-->
          <!--    <option value="">Select Panna</option>-->
          <!--    <option value="0">000</option>-->
          <!--    <option value="1">100</option>-->
          <!--    <option value="2">110</option>-->
          <!--    <option value="3">111</option>-->
          <!--    <option value="4">112</option>-->
          <!--    <option value="5">113</option>-->
          <!--    <option value="6">114</option>-->
          <!--    <option value="7">115</option>-->
          <!--    <option value="8">116</option>-->
          <!--    <option value="9">117</option>-->
          <!--    <option value="10">118</option>-->
          <!--    <option value="11">119</option>-->
          <!--    <option value="12">120</option>-->
          <!--    <option value="13">121</option>-->
          <!--    <option value="14">122</option>-->
          <!--    <option value="15">123</option>-->
          <!--    <option value="16">124</option>-->
          <!--    <option value="17">125</option>-->
          <!--    <option value="18">126</option>-->
          <!--    <option value="19">127</option>-->
          <!--    <option value="20">128</option>-->
          <!--    <option value="21">129</option>-->
              
          <!--</select><br>-->
          <!--<input type="text" id="pna" name="f3" readonly required hidden>-->
          <!--<p>Digit</p> -->
          
          <!--<input type="text" class="form-control form-control-lg" name="f4" placeholder="Product MRP" id="productPrice" readonly><br><br><br>-->
          
                                  
                              
                              
                              
                              
                              <!--for various box//-->
                              <!--<input type="text" class="form-control form-control-lg"  placeholder="Enter Winner Number" name="a1" required=""><br>-->
                              
                              <!--<input type="text" class="form-control form-control-lg"  placeholder="Enter Winner Number" name="a3" required=""><br>-->
                              
                              
                              
                              <!--<input type="text" class="form-control form-control-lg"  placeholder="Enter Winner Number" name="a4" required=""><br>-->
                              <!--<input type="text" class="form-control form-control-lg"  placeholder="Enter Winner Number" name="a5" required=""><br>-->
                              <!--<input type="text" class="form-control form-control-lg"  placeholder="Enter Winner Number" name="a6" required=""><br>-->
                              <!--//end of Various Box//-->
                              <!--<input type="text" class="form-control form-control-lg"  placeholder="Enter Game Betting Time Open/Close" name="run_time" required=""><br>-->
                              
                              
                              <!--<select name="choice" class="form-control form-control-lg" required>-->
                              <!--    <option value="Choice Digit">Choice Digit</option>-->
                              <!--    <option value="Single digit">Single digit</option>-->
                              <!--    <option value="Jodi digit">Jodi digit</option>-->
                              <!--    <option value="Single pana">Single pana</option>-->
                              <!--    <option value="Double pana">Double pana</option>-->
                              <!--    <option value="Triple pana">Triple pana</option>-->
                              <!--    <option value="Sp motor">Sp motor</option>-->
                              <!--    <option value="Dp motor">Dp motor</option>-->
                              <!--    <option value="Half sangam">Half sangam</option>-->
                              <!--</select>-->
                              
                            </div>
                            
                          </form>
                        </div>
                      </div>
                      <div class="card h100p gp1">
					<div class="card-body">
						<h4 class="card-title mb-4">Result Details</h4>
						<div class="table-responsive">
							<table class="table table-striped table-bordered dataTable no-footer" id="userQueryList" role="grid" aria-describedby="userQueryList_info" style="width: 1200px;">
                       <thead>
					  <!--<tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 90.6px;"><b>ID</b></th>-->
				 <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 248.6px;"><b>Game Name</b></th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;"><b>Game Time</b></th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;"><b>Game Date</b></th>
				<!--<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 164.6px;"><b>Winner Bet Time</b></th>-->
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 164.6px;"><b>Open Panna</b></th>
					<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" style="width: 164.6px;"><b>Bet-Number</b></th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;"><b>Close Panna</b></th>
					<!--<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Remove Winner</th>-->
						
				
				</tr>
					</thead>
					<!--<tbody><tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody></table>-->
					<!--<div id="userQueryList_processing" class="dataTables_processing card" style="display: none;">Processing...</div>-->
					<!--<div class="row"><div class="dataTables_paginate paging_simple_numbers" id="userQueryList_paginate"><ul class="pagination"> </li></ul></div></div>-->
				 
					<!--<div id="msg"></div>-->
					  <tbody>
                       
                        <?php
            
           
               include 'files/dbcon.php';
                // $image=$res['Product_Pic_Main'];

               $selectquery="select * from game_result ORDER BY id DESC ";
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
                               <!--<td><?php echo $res['beton']; ?></td>-->
                               <!--<td><?php echo chunk_split($res['bet_number'], 3, '-'); ?></td>
                               <td><?php echo preg_replace('/(\d{1,3})(?=(\d{1}))/', '$1-', $res['bet_number']); ?></td>
                               
                               <td><?php echo preg_replace('/(\d{1,3})(?=(\d{3}))/', '$1-', $res['choice']); ?></td>-->
                               
                                <td><?php echo $res['bet_number'];?></td>  <td><?php echo $res['number'];?></td>
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
               </div>
               
               
               
              </div>
              
            </div>
           
                   
                   
                            
                   </div>
              
            </div>
           
                   
 
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © jssuppliers.com 2021</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
    </form>
    <script>
        function getvalue(){
        
       var sg = document.getElementById("game_name").value;
    //   sg = "hello"
        console.log(sg);
        document.getElementById('edit-id3').innerHTML = sg;
    }
    </script>
  </body>
</html>