<!-- This is your main page -->

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>Tyre Town</title>
	 <link rel="IMG/shortcut icon" href="IMG/favicon.ico" type="image/x-icon">

     <!-- Bootstrap core CSS -->

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
           integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/main.css">

     <script type="text/javascript" src="./js/scripts.js"></script>

     <!-- This is the javascript needed for some bootstrap components -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
             integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
             crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
             integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
             crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
             integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
             crossorigin="anonymous"></script>

     <!-- error handling function -->
     <script> 
         error_handller();
     </script>

 </head>
 <body>

 
 <!-- Navigation -->
<!--
 <nav class="navbar navbar-expand-lg fixed-top justify-content">
-->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top justify-content">
         <a class="navbar-brand logo_text" href="./index.php">
		 <img src="IMG/logo.png" width="37" height="30" class="d-inline-block align-top" alt="">
             Tyre Town
		 </a>

         
		<div  class="navbar-brand text change_text">

		|   Change Text Size:
		</div>
		<!-- Adding buttons to change font size -->
     <input type="button" class="btn btn-primary btn-md text_size" value="-" onclick="ChangeFontSize(['nav_text', 'title', 'text', 'change_text', 'logo_text'], '-')">

	 <input type="button" class="btn btn-primary btn-md text_size" value="+" onclick="ChangeFontSize(['nav_text', 'title', 'text', 'change_text', 'logo_text'], '+')">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
     </button>

	 <!-- Collapsable code -->
     <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class=" navbar-nav ml-auto justify-content-end nav_text" >
             <li class="nav-item">
                 <a class="nav-link" href="./index.php">Home</a>
             </li>
			 
			 <li class="nav-item">
                 <a class="nav-link" href="./invoice_search.php">Invoice Search</a>
             </li>

			 <li class="nav-item">
                 <a class="nav-link" href="./services.php">Our Services</a>
             </li>

			 <li class="nav-item">
                 <a class="nav-link" href="./open_hours.php">Open Hours</a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="./contact.php">Contact Us</a>
             </li>
         </ul>
     </div>


 </nav>

 <!-- Description code -->
 <div class="description">
     <h1 class='title'>Welcome to Tyre Town!</h1>
     <p class='text'>Tyre Town has served Christchurch for more than 50 years. This family-owned company specializes in providing quality products and services to its customers.
         A courteous car or a friendly team will take you back to your office or home while your vehicle is under service.
         Let the Tyre Town team be responsible for all your wheels, tyres (including wheel alignment) and suspension requirements.
         We are very happy to provide service for you.
     </p>
 </div>

 <script src="js/scripts.js"  > </script>

	 
	 


                <div class="footer fixed-bottom">TyreTown 2019, Dev Group 16</div>
 </body>
</html>
