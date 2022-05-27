<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8" /><meta http-equiv="refresh" content="2; url=index.php" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Lotus</title>
  <link class="icor" rel="shortcut icon" type="image/x-icon" href="icons\logop.ico"/>
	<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;800&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="css/logout.css" />
	<!-- End layout styles -->
	
</head>
<body>

	<div class="wrapper">
		<div class="header">
      <img class="iconlogo"  height="50px"  >
      <h2 class="logo"></h2>
    </div>

		<div class="content">
			<img src="files/logo1.jpg" class="image" >
			<article class="info">
				<h2 class="info-description">Your Session is ended and You Logged Out Successfully.<br>Hope See You Soon</h2>
				<a href="index.php"style=" color: black; font-size: 26px;background-color:  gold;  border:0px solid black; text-decoration:none;" class="info-btn">Back to Log In</a>
			</article>
		</div>
	</div>
</body>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script>
</html>