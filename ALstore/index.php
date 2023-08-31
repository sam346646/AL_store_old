<?php 

include("includes/db.php");
include("functions/functions.php");

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AL Store</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="font-awsome/css/font-awesome.min.css">
</head>
<body>


<div id="top"><!-- topbgins -->
	<div class="container"><!-- containerbgins -->
		<div class="col-md-6 offer">
			<a href="#" class=" btn  btn-success btn-sm">Wellcome</a>
		</div>
		<div class="col-md-6">
			<ul class="menu">
				<li>
					<a href="customer_register.php"> Register</a>
				</li>
				<li>
					<a href="customer/my_account.php"> Myaccount</a>
				</li>
				<li>
					<a href="cart.php"> Add to cart</a>
				</li>
				<li>
					<a href="checkout.php"> Login</a>
				</li>



			</ul>	
		</div>				
	</div><!-- endcontainer -->
</div><!-- topends-->
<div id="navbar" class="navbar navbar-default"><!--mainmenu-->

	<div class="container"><!-- navbar container-->
		
		<div class="navbar-header" class="navbar-brand home">
			
			<a href="" class="navbar-brand home">
				<img src="images/AL_hex_store-1.png" class="hidden-as" height="49" width="125">
				
			</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target="#Navigation">
				<spam class="sr-only">Toggle Navigation</spam>
				<i class="fa fa-align-justify"></i>



			</button>
			<button class="navbar-toggle" data-toggle="collapse" data-target="#search">
				<spam class="sr-only">Toggle search</spam>
				<i class="fa fa-search"></i>



			</button>
		</div>	
		<div class="navbar-collapse collapse" id="Navigation"><!--navbar collapse begin-->

			<div class="padding-nav"><!--padding nav begins-->

				<ul class="nav navbar-nav left">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="shop.php">Shop</a></li>
    				<li><a href="customer/my_account.php">My Account</a></li>
    				<li><a href="cart.php">My cart</a></li>
    				<li><a href="contact.php">Contact us</a></li>
				</ul>

			</div><!--padding nav ends-->
				<a href="cart.php" class="btn navbar-btn btn-primary right">
					
					<i class="fa fa-shopping-cart"></i>
					<span> </span>
				</a>
				<div class="navbar-collapse collapse right"><!--navbar collapse right begins-->

					<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle search</span>
						<i class="fa fa-search"></i>



					</button>
					
				</div><!--navbar collapse right ends-->


				<div claas="collapse clearfix" id="search"><!--collapse  clearfixbegins-->

					<form  action="results.php" method="get"  class="navbar-form"><!--navbaR FORM begin-->
						<div class="input-group">
							
							<input class="form-control" placeholder="search" name="user_query" required>

							<span class="input-group-btn"><!-- btn btn span start-->
				            <button class="btn btn-primary" type="submit" name="search" value="search"><!-- btn btn primary begins-->
				            	
				            	<i class="fa fa-search"></i>
				            </button><!-- btn btn primary end-->
				            </span><!-- btn btn span end-->
						</div>
					</form><!--navbaR FORM end-->
					
				</div><!--collapse  clearfixbegins-->
		</div><!--navbar collapse end-->
	</div><!-- navbarcontainer end-->
	
</div><!--end mainmenu-->
 <div id="advantages"><!-- #advantages Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="same-height-row"><!-- same-height-row Begin -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>10% additional offer in  this wintersale...! </p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Prices</a></h3>
                       
                       <p>Premium product at reasonable price</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">100% Original</a></h3>
                       
                       <p>We provied 100% original products trusted by </p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
           </div><!-- same-height-row Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- #advantages Finish -->
    <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Our Latest Products
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
   <div id="content" class="container"><!-- container Begin -->
      <div class="row"><!-- row Begin -->
           <?php 
    
        getPro();
    
    ?>
        </div><!-- row Finish -->
       
   </div><!-- container Finish -->
 <?php 
    
    include("includes/footer.php");
    
    ?>
       


 <script src="js/jquery-331.min.js"></script>
 <script src="js/bootstrap-337.min.js"></script>
</body>
</html>