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
     <link rel="stylesheet" href="css/main.css">

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
 <nav class="navbar navbar-expand-lg fixed-top justify-content">

         <a class="navbar-brand" href="./index.php">
		 <img src="IMG/logo.png" width="37" height="30" class="d-inline-block align-top" alt="">
		 Tyre Town
		 </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

     <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class=" navbar-nav ml-auto justify-content-end " id='test'>
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

    <div class="card">
		<h2 align="center">Our services include: </h2>
		<table align="center">
			<tr> <th colsapn="20"></th></tr>
			<tr> <td>Tyre Maintenance</td></tr>
			<tr> <td>Wheel Balance</td></tr>
			<tr> <td>Tyre Rotation</td></tr>
			<tr> <td>Nitrogen Tyre Inflation</td></tr>
			<tr> <td>Puncture Repair</td></tr>
			<tr> <td>Run Flate Tyre Repair</td></tr>
		</table>
    </div>



                <div class="footer fixed-bottom">TyreTown 2019, Dev Group 16</div>
 </body>
</html>
