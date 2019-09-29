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
     <link rel="stylesheet" href="css/style.css">

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

	 
	 <!-- Get Target values from database and store values in an array -->
	 <?php
	 require_once('./request/request_targets.php');
	 if($targets = mysqli_fetch_array($query))
	 ?>
 </head>
 <body>

 
 <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top justify-content">

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



   <!-- Page content -->
    <div class="container">

            <div class="col-lg-12 ">
                <h2 class="mt-5 text-center">Tyre Town Invoice Search</h2>
            </div>



         <form method="post" action="invoice_search.php">
                <div class="float-mid search"><input type="text" name="input" size="25" id="receiptID"
                                              placeholder="Enter Invoice Number" required pattern="\S+"/>
                    <input class="button" type="submit" name="submitButton" value="Submit" ></div></form>

        <br>



        <?php
        require_once('./request/search_request2.php');
        // echo($_POST['input']); Testing user input to make sure is a valid option

        if (!empty($_POST['input'])){
            if($row = mysqli_fetch_array($query))
            ?>
                <button class="collapsible"><h3>Customer Information</h3></button>

                <div class="content">
                <div class="col-lg-12">
                <table>
                        <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Vehicle Registration</th>
                        <th>Vehicle Model</th>
                        <th>Vehicle Make</th>
                        <th>Year</th>
                        <th>Body Type</th>
                        <th>Chassis Number</th>
                        <th>Odometer Reading</th>
                        </thead>
                        <tr>
                            <td data-label="Name"><?php echo $row['NAME'];?></td>
                            <td data-label="Email"><?php echo $row['EMAIL'];?></td>
                            <td data-label="Phone"><?php echo $row['PHONE'];?></td>
                            <td data-label="Vehicle Registration"><?php echo $row['VEHICLE REGISTRATION'];?></td>
                            <td data-label="Vehicle Model"><?php echo $row['VEHICLE MODEL'];?></td>
                            <td data-label="Vehicle Make"><?php echo $row['VEHICLE MAKE'];?></td>
                            <td data-label="Year"><?php echo $row['YEAR'];?></td>
                            <td data-label="Body Type"><?php echo $row['BODY TYPE'];?></td>
                            <td data-label="Chassis Number"><?php echo $row['CHASSIS NUMBER'];?></td>
                            <td data-label="Odometer Reading"><?php echo $row['ODOMETER READING'];?></td>

                        </tr>
                </table>
            </div>
            </div>
        <?php } ?> <!-- F.D - Is this good practise? -->



        <?php
        require_once('./request/search_request.php');
        if (empty($_POST['input'])){
        }
        else{if($row = mysqli_fetch_array($query))
            ?>

            <br>



            <button class="collapsible"><h3>Invoice</h3></button>
                    <div class="content">
                        <div class="col-lg-12">
                            <table>
                                <thead>
                                    <th>Tax Invoice Number</th>
                                    <th>Service Description</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Amount</th>
                                    <th>Subtotal</th>
                                    <th>GST</th>
                                    <th>Total</th>
                                    <th>Paid</th>
                                    <th>Date</th>
                                    <th>Due Date</th>
                                </thead>

                                <tr>

                                    <td data-label="Tax Invoice Number"><?php echo $row['TAX INVOICE NUMBER'];?></td>
                                    <td data-label="Service Description"><?php echo $row['SERVICE DESCRIPTION'];?></td>
                                    <td data-label="Quantity"><?php echo $row['QUANTITY'];?></td>
                                    <td data-label="Unit Price"><?php echo '$' . $row['UNIT PRICE'];?></td>
                                    <td data-label="Amount"><?php echo '$' . $row['AMOUNT'];?></td>
                                    <td data-label="Subtotal"><?php echo '$' . $row['SUBTOTAL'];?></td>
                                    <td data-label="GST"><?php echo '$' . $row['GST'];?></td>
                                    <td data-label="Total"><?php echo '$' . $row['TOTAL'];?></td>
                                    <td data-label="Paid"><?php echo '$' . $row['PAID'];?></td>
                                    <td data-label="Date"><?php echo $row['DATE'];?></td>
                                    <td data-label="Due Date"><?php echo $row['DUE DATE'];?></td>

                                </tr>
                            </table>
                    </div>
                </div>

        <?php } ?>

        <?php
        require_once('./request/search_request3.php');
        if (!empty($_POST['input'])){
        if($row = mysqli_fetch_array($query))
            ?>

            <br>

            <button class="collapsible"><h3>Garage Information</h3></button>
            <div class="content">
            <div class="col-lg-12">
                <table>
                        <thead>
                            <th>Technician Name</th>
                            <th>Inspection Time/Date</th>
                            <th>Branch Name</th>
                            <th>Branch Phone</th>
                            <th>Branch Email</th>
                            <th>Branch Address</th>
                            <th>Branch GST Registration</th>
                            <th>Branch Fax</th>
                            </thead>
                        <tr>
                            <td data-label="Technician Name"><?php echo $row['TECHNICIAN NAME'];?></td>
                            <td data-label="Inspection Time/Date"><?php echo $row['INSPECTION TIME/DATE'];?></td>
                            <td data-label="Branch Name"><?php echo $row['BRANCH NAME'];?></td>
                            <td data-label="Branch Phone"><?php echo $row['BRANCH PHONE'];?></td>
                            <td data-label="Branch Email"><?php echo $row['BRANCH EMAIL'];?></td>
                            <td data-label="Branch Address"><?php echo $row['BRANCH ADDRESS'];?></td>
                            <td data-label="Branch GST Registration"><?php echo $row['BRANCH GST REGISTRATION'];?></td>
                            <td data-label="Branch Fax"><?php echo $row['BRANCH FAX'];?></td>
                        </tr>
                </table>
            </div>
            </div>

        <?php } ?>

		<?php
		function check_target($value_str, $target_str) {
			// Given the value and the target from the database and cleans then checks if the value is within the threshold and return the value in
			// green if True or red if False.

			if ($value_str == null || $target_str == null){
				return "-";
			}

			$value_int = str_replace(array("'",'m'), '',$value_str);

			$target_str = str_replace("°", '.',$target_str);
			$target_str = str_replace(array("'",'m'), '',$target_str);
			$target_ints = explode(" +/-", $target_str);


			$target_value = $target_ints[0];
			$target_error = 0;
			if (isset($target_ints[1])) {
				$target_error = $target_ints[1];
			}

			if (($target_value - $target_error) < $value_int && $value_int < ($target_value + $target_error)) {
				$colour = 'green';
			} else {
				$colour = 'red';
			}

			return sprintf('<span style="color:%s;">', $colour) .  $value_str .  "</span>";
		}
		?>

        <?php
        require_once('./request/search_request4.php');
        if (!empty($_POST['input'])){
        if($row = mysqli_fetch_array($query))
        ?>

        <br>

        <button class="collapsible"><h3>Alignment Information</h3></button>
        <div class="content">
        <header>Back Axle</header>
            <div class="col-lg-12">
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Camber</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Camber" class="table-no-underline background noPad">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo check_target($row['1'], $targets['2']); ?></td>
                        <td data-label="Target" class="table-no-underline target">-0°40'   +/-0°30'</td>
                        <td data-label="Actual"><?php echo check_target($row['2'], $targets['2']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head">Right</td>
                        <td data-label="Before"><?php echo check_target($row['3'], $targets['2']);?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo check_target($row['4'], $targets['2']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head">Cross</td>
                        <td data-label="Before"><?php echo check_target($row['5'], $targets['3']);?></td>
                        <td data-label="Target" class="target">0°00' +/-0°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo check_target($row['6'], $targets['3']);?></td>
                    </tr>
                    </tbody>
                </table>

                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Toe</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Toe"class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo check_target($row['7'], $targets['4']);?></td>
                        <td data-label="Target" class="table-no-underline target">1.5mm +/-1.00</td>
                        <td data-label="Actual"><?php echo check_target($row['8'], $targets['4']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo check_target($row['9'], $targets['4']);?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo check_target($row['10'], $targets['4']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Total</td>
                        <td data-label="Before"><?php echo check_target($row['11'], $targets['5']);?></td>
                        <td data-label="Target" class="target">3mm +/-2.0mm</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo check_target($row['12'], $targets['5']);?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Geometrical driving axis</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Geometrical Driving Axis" class="table-no-underline noRightBorder background">&nbsp;</td>
                        <td class="table-column-head noRightBorder maxwidth-empty-second orientations noShow">&nbsp;</td>
                        <td data-label="Before"><?php echo check_target($row['13'], $targets['6']);?></td>
                        <td data-label="Target" class="target">0°00'</td>
                        <td data-label="Actual"><?php echo check_target($row['14'], $targets['6']);?></td>
                    </tbody>
                </table>
                <header>Front Axle</header>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Camber</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Camber" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo check_target($row['15'], $targets['7']);?></td>
                        <td data-label="Target" class="table-no-underline target">0°00' +/-0°30'</td>
                        <td data-label="Actual"><?php echo check_target($row['16'], $targets['7']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo check_target($row['17'], $targets['7']);?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo check_target($row['18'], $targets['7']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo check_target($row['19'], $targets['8']);?></td>
                        <td data-label="Target" class="target">0°00' +/-0°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo check_target($row['20'], $targets['8']);?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Caster</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Caster" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo check_target($row['21'], $targets['9']);?></td>
                        <td data-label="Target" class="table-no-underline target">-2°35' +/-0°30'</td>
                        <td data-label="Actual"><?php echo check_target($row['22'], $targets['9']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo check_target($row['23'], $targets['9']);?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo check_target($row['24'], $targets['9']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo check_target($row['25'], $targets['10']);?></td>
                        <td data-label="Target" class="target">0°00' +/-0°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo check_target($row['26'], $targets['10']);?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">SAI</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="SAI" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo check_target($row['27'], $targets['11']);?></td>
                        <td data-label="Target" class="table-no-underline target">-12°40' +/-0°45</td>
                        <td data-label="Actual"><?php echo check_target($row['28'], $targets['11']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo check_target($row['29'], $targets['11']);?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo check_target($row['30'], $targets['11']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo check_target($row['31'], $targets['12']);?></td>
                        <td data-label="Target" class="target">0°00'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo check_target($row['31'], $targets['12']);?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Track differential angle</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Track Differential Angle" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo check_target($row['33'], $targets['13']);?></td>
                        <td class="table-no-underline noShow target"></td>
                        <td data-label="Actual"><?php echo check_target($row['34'], $targets['13']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo check_target($row['35'], $targets['13']);?></td>
                        <td class="noShow target"></td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo check_target($row['36'], $targets['13']);?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Toe</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Toe" class="table-no-underline background">&nbsp;</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo check_target($row['37'], $targets['14']);?></td>
                        <td data-label="Target" class="table-no-underline target">0.5mm +/-1.0mm</td>
                        <td data-label="Actual"><?php echo check_target($row['38'], $targets['14']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo check_target($row['39'], $targets['14']);?></td>
                        <td class="noShow target"></td>
                        <td data-label="Actual"><?php echo check_target($row['40'], $targets['14']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Cross</td>
                        <td data-label="Before"><?php echo check_target($row['41'], $targets['15']);?></td>
                        <td data-label="Target">1mm +/-2.0mm</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo check_target($row['42'], $targets['15']);?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Setback</th>
                    <th>&nbsp;</th> 
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Setback" class="table-no-underline noRightBorder background">&nbsp;</td>
                        <td class="table-column-head noRightBorder maxwidth-empty-second noShow orientations">&nbsp;</td>
                        <td data-label="Before"><?php echo check_target($row['43'], $targets['16']);?></td>
                        <td data-label="Target" class="target">0°00'</td>
                        <td  class="underPadding bottomTD" data-label="Actual"><?php echo check_target($row['44'], $targets['16']);?></td>
                    </tbody>
                </table>
                <table class="alignment">
                    <thead>
                    <th class="maxwidth-title">Max steering lock</th>
                    <th>&nbsp;</th>
                    <th>Before</th>
                    <th>Target</th>
                    <th>Actual</th>
                    </thead>
                    <tbody class="alignment-graph">
                    <tr class="alignment-graph">
                        <td data-label="Max Steering Lock" class="table-no-underline background">Left Steer</td>
                        <!--<td data-label="Left Steer" class="bigNoShow"></td>-->
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo check_target($row['45'], $targets['17']);?></td>
                        <td data-label="Target" class="table-no-underline target">-41°00' +/-1°30'</td>
                        <td data-label="Actual"><?php echo check_target($row['46'], $targets['17']);?></td>
                    </tr>
                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo check_target($row['47'], $targets['18']);?></td>
                        <td data-label="Target" class="target">-33°00' +/-1°30'</td>
                        <td data-label="Actual"><?php echo check_target($row['48'], $targets['18']);?></td>
                    </tr>
                    <tr class="alignment-graph">
                        <td class="table-no-underline background">Right Steer</td>
                        <td class="table-column-head orientations">Left</td>
                        <td data-label="Before"><?php echo check_target($row['49'], $targets['20']);?></td>
                        <td data-label="Target" class="table-no-underline target noShow">-41°00' +/-1°30'</td>
                        <td data-label="Actual"><?php echo check_target($row['50'], $targets['20']);?></td>
                    </tr>

					<!-- Seems to be a mistake in the given database with the last two values in the 'targetvalue'
						 database where the last two values don't match the given values and are the wrong way around,
						 for now i'll swith them around the other way so they'll work properly.
					 -->

                    <tr>
                        <td class="table-no-underline noShow">&nbsp;</td>
                        <td class="table-column-head orientations">Right</td>
                        <td data-label="Before"><?php echo check_target($row['51'], $targets['19']);?></td>
                        <td class="noShow target">-33°00' +/-1°30'</td>
                        <td class="underPadding bottomTD" data-label="Actual"><?php echo check_target($row['52'], $targets['19']);?></td>
                    </tr>
                    </tbody>
                </table>

        <?php } ?>

                <br>
                <br>

                <div class="footer fixed-bottom">TyreTown 2019, Dev Group 16</div>

    <!-- JavaScript function must be bellow the last collapsible box -->
    <script>
        make_collapsible();
    </script>


 </body>
</html>
