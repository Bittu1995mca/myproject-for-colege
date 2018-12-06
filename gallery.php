<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gallery</title>
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
	<link href="gallery.css" rel="stylesheet" type="text/css">
	
	<script>
	  
	  $(document).ready(function()
		
			{
		     $('button').click(function()
							   
				{
			      $('.add').toggle();
			 
			    });
	  
	        
	         });
	  
	 </script>
	
  </head>
  <body>
	<div class="container"> 
	
	
	
	<div class="col-lg-12 head">
		
		<div class="col-lg-7 head1"> <h1 style="font-size:60px;"> Hotel Skylark</h1></div>
		<div class="col-lg-5 head2"> <h3 style="font-size:40px;padding-top:10px;"> HillCart Road , Siliguri</h3></div>
	</div>
	

	  <div class="row">
	  	 <div class="col-lg-12" style="margin-top:2px;"><img src="image/jonathan-percy-552030-unsplash.jpg" class="img-responsive" alt="Placeholder image" style="height:300px; width:100%;" > </div>
	  </div>
	   
	   <div class="col-lg-12" style="margin-top:-55px;"> 
	     <nav class="navbar navbar-inverse">
	       <div class="container-fluid">
	         <!-- Brand and toggle get grouped for better mobile display -->
	         <div class="navbar-header">
	           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	           
	         <!-- Collect the nav links, forms, and other content for toggling -->
	         <div class="collapse navbar-collapse" id="inverseNavbar1">
	           <ul class="nav navbar-nav" style="margin-left:80px; font-size:20px;">
	             <li ><a href="#">Home<span class="sr-only">(current)</span></a></li>
	             <li><a href="#">About</a></li>
	             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms<span class="caret"></span></a>
	               <ul class="dropdown-menu">
	                 <li><a href="#">Action</a></li>
	                 <li><a href="#">Another action</a></li>
	                 <li><a href="#">Something else here</a></li>
	                 <li role="separator" class="divider"></li>
	                 <li><a href="#">Separated link</a></li>
	                 <li role="separator" class="divider"></li>
	                 <li><a href="#">One more separated link</a></li>
                   </ul>
                 </li>
                  <li><a href="#">Facilities</a></li>
                   <li class="active"><a href="#">Gallery</a></li>
                    <li><a href="#">Tariff</a></li>
                     <li><a href="#">Reservation</a></li>
                      <li><a href="#">Contact Us</a></li>
               </ul>
	           
             </div>
	         <!-- /.navbar-collapse -->
           </div>
	       <!-- /.container-fluid -->
         </nav>
       </div>
       
        <div class="col-lg-12 main" >
        	<h1 style="text-align: center;font-size:50px;font-style:italic;"> Photo Gallery</h1>
        	<hr>
        	
        	<p class="para"> Our photo section Skylark hotel is happy to showcase some of its paragraphs will give you a sneak preview of what is in store for you.Our rooms are beautiful and clean. We Provide 24X7 facilities.</p>
        	
        	<div class="col-lg-12 gallery" style="margin-top:15px; ">
        		<div class="col-lg-12"> 
        		<div class="col-lg-4" style="border:1px solid black"> <img src="image/michael-d-beckwith-583340-unsplash.jpg" class="img-responsive" alt="Placeholder image"></div>
        		<div class="col-lg-4" style="border:1px solid black"> <img src="image/grant-707825-unsplash.jpg" class="img-responsive" alt="Placeholder image"></div>
        		
        		<div class="col-lg-4" style="border:1px solid black"> <img src="image/artiom-vallat-558033-unsplash.jpg" class="img-responsive" alt="Placeholder image"></div>
        		
        		
        		
        		</div>
        		
        		<div class="col-lg-12"> 
        		<div class="col-lg-4" style="border:1px solid black"> <img src="image/artiom-vallat-558033-unsplash.jpg" class="img-responsive" alt="Placeholder image"></div>
        		<div class="col-lg-4" style="border:1px solid black"> <img src="image/nichlas-andersen-225986-unsplash.jpg" class="img-responsive" alt="Placeholder image"></div>
        		
        		<div class="col-lg-4" style="border:1px solid black"> <img src="image/drew-coffman-100869-unsplash.jpg" class="img-responsive" alt="Placeholder image"></div>
        		
        		
        		
        		</div>
        		
        		<div class="col-lg-12"> 
        		<div class="col-lg-4" style="border: 1px solid black"> <img src="image/artiom-vallat-558033-unsplash.jpg" class="img-responsive" alt="Placeholder image"></div>
        		<div class="col-lg-4" style="border: 1px solid black"> <img src="image/grant-707825-unsplash.jpg" class="img-responsive" alt="Placeholder image"></div>
        		
        		<div class="col-lg-4" style="border: 1px solid black"> <img src="image/michael-d-beckwith-583340-unsplash.jpg" class="img-responsive" alt="Placeholder image"></div>
        		
        		
        		
        		</div>
        		
        		<div class="col-lg-12">
        			<div class="col-lg-12 add" style="display:none;">
        				<h3 style="color:red;font-size:40px;text-align: center"> We Provide 40% Puja Dhamaka.2019 Puja Offer</h3>
        			</div>
        			<center><button> Click Here To See Bonous</button></center>
        		</div>
        	</div>
        </div>
       
       <div class="col-lg-12 footer"> All Copyright To The Hotel Skylark ,Siliguri</div>
	</div>
  </body>
</html>