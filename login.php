	
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style type="text/css">

	 *
  	{
    	box-sizing: border-box;
  	}

  body
	{
		/**/background-image:linear-gradient( rgba(0,0,0,0.6), rgba(255, 255, 255, 0.6)), 
				url('files/logo2.jpg');
				background-repeat: no-repeat;
				background-size: cover;
				background-position: 100% 100%;
				background-attachment: fixed;
				width: 100%;
				height: 100%;
		
	}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
	:root
	{

			--bg-color: linear-gradient(to right,gold, black) ;
			--bg-hover: linear-gradient(to right,black,gold);



	}
button
	{

			background-image: var(--bg-color) ;
	}

button:hover
	{

			background-image: var(--bg-hover) ;
				

	}

			form{

				border-radius: 10px;
				margin: 13% 0%;
	}
			

			
label{

				font-weight: 600;
				
			}
	/*label
	{
		text-align: left;
	}*/
	

<style>
  *
  {
    box-sizing: border-box;
  }
  nav {
      background:black;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      height: 70px;
      padding: 0 100px;
    }

    /* Styling the logo */
    nav .logo {
      color: gold;
      font-size: 100%;
      font-weight: 600;
      letter-spacing: -1px;
   /*   font-family:  Brush Script MT;*/
    }

    /* Styling all the nav items as a whole */
    nav .nav-items {
      display: flex;
      flex: 1;
      padding: 0 0 0 200px;
    }

    /* Styling the list items in the nav tag */
    nav .nav-items li {
      list-style: none;
      padding: 0 10px;
    }

    /* Styling each list items */
    nav .nav-items li a {
      color: #9D49FC;
      font-size: 15px;
      font-weight: bold;
      text-decoration: none;
    }

    /* Setting the hover colour on the list items*/
    
    nav .nav-items li a:hover {
      color: #19191b;
    }
    
    nav .searchbar {
      position: relative;
    }

    /* Styling the search box where the
      input would be given */
    nav .searchbar input[type="text"] {
      border: 0;
      padding: 0;
      width: 0px;
      height: 35px;
      border-radius: 3px;
      transition: all 0.3s ease;
    }

    /* Styling the search bar icon */
    nav .searchbar .icon {
      display: flex;
      position: absolute;
      top: 0;
      right: 0;
      width: 35px;
      height: 100%;
      background: none;
      border-radius: 3px;
      color:gold;
      transition: all 0.5s 0.3s ease;
    }
    
    nav .searchbar .icon i {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      cursor: pointer;
    }
    
    nav .searchbar .icon.active {
      background: #062333;
      transition: all 0.3s ease;
    }
    
    nav .searchbar input[type="text"].active {
      width: 250px;
      padding: 0 10px;
      transition: all 0.5s 0.2s ease;
    }
    
    nav .licon li {
      list-style: none;
      display: flex;
    }
    
    nav .licon li a {
      padding: 0 20px;
    }

    /* Changing the colour of the login
      icon when hovered over*/
    
    .fa-user-circle:hover {
      color: #0e0d0d !important;
    }
  
@media screen and (max-width: 800px) {
nav {

      height: 70px; padding: 0 5px;
   
    }

   
    nav .logo {
      color: #9D49FC;
      font-size: 15px;
    /*  font-weight: 600;*/
    /*  letter-spacing: -1px;*/
    font-family:  Brush Script MT;
    }

    /* Styling all the nav items as a whole */
  
    
    nav .searchbar {
      position: relative;
    }

    /* Styling the search box where the
      input would be given */
    nav .searchbar input[type="text"] {
      border: 0;
      padding: 0;
      width: 0px;
      height: 35px;
      border-radius: 3px;
      transition: all 0.3s ease;
    }

    /* Styling the search bar icon */
    nav .searchbar .icon {
      display: flex;
      position: absolute;
      top: 0;
      right: 0;
      width: 35px;
      height: 100%;
      background: none;
      border-radius: 3px;
      color:gold;
      transition: all 0.5s 0.3s ease;
    }
    
    nav .searchbar .icon i {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      cursor: pointer;
    }
    
    nav .searchbar .icon.active {
      background: #062333;
      transition: all 0.3s ease;
    }
    
    
    nav .licon li {
      list-style: none;
      display: flex;
    }
    
    nav .licon li a {
      padding: 0 20px;
    }

    /* Changing the colour of the login
      icon when hovered over*/
    
    .fa-user-circle:hover {
      color: #0e0d0d !important;
    }
  
}
</style>
</head>
<body>
 
 <nav>
    <div class="logo">
   <h2><img src="files/logo1.jpg" width="70px" height="50px">LOTUS</h2>
      
     
    </div>

  
     
      </nav>


			<div class="container">
			<div class="row">
				<div class="col-11 col-md-3 col-lg-3"></div>
				<div class="col-11 col-md-6 col-lg-6">
					
					<form method="post" class="bg-light px-5 pb-4 " action="validate.php">

						<h1 class="text-center py-4 text-dark">Login Form</h1><img src="files/logo1.jpg" width="70px" height="50px">
						<div class="mb-3">
							
							<input type="text" class="form-control"  placeholder="UserName" name="user">
							
						</div>
						<div class="mb-3">
							
							<input type="password" class="form-control" name="password" autocomplete="current-password" required="" id="id_password">
  <i class="far fa-eye" id="togglePassword" style="margin-left: -0px; cursor: pointer;"></i>
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary btn-lg w-100" name="sub" id ="myBtn">Login</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Please Wait..</p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

				
						
						
					</form>
				</div>


				<div class="col-11 col-md-3 col-lg-3"></div>
			</div>
		</div>
<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});</script>
</body></html>