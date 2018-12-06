<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	<style>
	
		
	.input
		{
			width:100%;
			padding:12px;
			border:1 px solid #ccc;
			border-radius:4px;
			resize: vertical;
			
		}
		
		label
		{
			padding:12px 12px 12px 0;
			display:inline-block;
		}
		
		.submit,.cancel
		{
			background-color: green;
			color:aliceblue;
			font-size:15px;
			text-align: center;
			margin-top: 20px;
			border-radius:12px;
			width:30%;
			font-size:20px; 
		}
	
	  
	 </style>
  </head>
  <body>
	 <div class="container">
	   <div class="col-lg-12" style="background-color: black; color:aliceblue; font-size:70px; text-align:center; padding-top:-20px;"> 
	   
	    <h1> Reservation Form</h1>
	   
	   </div>
	 	
	 	 <div class="col-lg-12" style="margin-top:30px;">
	 	 	
	 	 	<div class="col-lg-3"></div>
	 	 	<div class="col-lg-6">
	 	 		<form nmae="resrvation" method="post" action="reservedb.php">
	 	 			
	 	 		  
	 	 		  	
	 	 		  	 <label>First Name:</label>	
	 	 		  	  <input type="text" name="fname" placeholder="Enter Your First Name" class="input">
	 	 		  	 <label> Last Name:</label>
	 	 		  	   <input type="text" name="lname" placeholder="Enter Your last Name" class="input">
	 	 		  	
	 	 		  	
	 	 		  	
	 	 		  	<label>Fathers' Name:</label> 
	 	 		  	 <input type="text" name="fathername" placeholder="Enter Your Father Name" class="input"
	 	 		  	
	 	 		  	
	 	 		  	
	 	 		  	 <label> <b> Check In:</b></label>
	 	 		  	  <input type="date" name="checkin" class="input">
	 	 		  	
	 	 		  	
	 	 		  	 
	 	 		  	 <label> Check Out:</label>
	 	 		  	 <input type="date" name="checkout" class="input">
	 	 		  	
	 	 		  	
	 	 		  	
	 	 		  	 
	 	 		  	   <label> Number Of Rooms</label>
	 	 		  	    <select name="room no" class="input">
	 	 		  	    <option value="invalid"> </option> 
	 	 		  	   	<option value="1"> 1 No Rooms</option>
	 	 		  	   	<option value="2"> 2 No Rooms</option>
	 	 		  	   	<option value="3"> 3 No Rooms</option>
	 	 		  	   </select>
	 	 		  	 
	 	 		  	 
	 	 		  	 
	 	 		  	 
	 	 		  	   <label> Rooms Type</label>
	 	 		  	    <select name="room no" class="input">
	 	 		  	     <option value="invalid"> </option>
	 	 		  	   	<option value="1"> King Suite</option>
	 	 		  	   	<option value="2"> Conference Room</option>
	 	 		  	   	<option value="3"> Bed room</option>
	 	 		  	   </select>
	 	 		  	   
	 	 		  	   <label> Communication address:</label><br>
	 	 		  	   <textarea cols="80px"; rows="10px"; name="address" class="input"></textarea>
	 	 		  	   <label> Phone Number:</label>
	 	 		  	    <select name="code">
	 	 		  	    <option value="invalid"> </option> 
	 	 		  	    <option value="91+"> 91+</option>
	 	 		  	    <option value="91+"> 92+</option>
	 	 		  	    <option value="91+"> 93+</option>
	 	 		  	    
	 	 		  	    </select>
	 	 		  	   <input type="text" name="phone" placeholder="Enter Valid Phone Number:" class="input">
	 	 		  		
	 	 			<input type="checkbox" value="1" name="check" style="margin-top:10px;"> <b>I accept All Rule And Condition.</b><br>
	 	 			
	 	 			<input type="submit" value="Make Payment" name="sub" class="submit">
	 	 			<input type="reset" value="Cancel" name="Cancel" class='cancel'>
	 	 		</form>
	 	 	</div>
	 	 	
	 	
	 </div>
  </body>
</html>