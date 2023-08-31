<?php
include("includes/header1.php");
include("functions/functions.php");
$active='Account';

?>
<script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {

    $('#myform').validate({ // initialize the plugin
        rules: {
            email {
                required: true,
                email: true
            },
            c_pass1 {
                required: true,
                minlength: 5
            }
            c_pass2{
              required:true;
              
            }

        }
    });

});
</script>
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Register
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
          
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2>Create new account</h2>
                           
                       </center><!-- center Finish -->
                      
                       <form action="customer_register.php" method="post" enctype="multipart/form-data" id="myform" onsubmit=><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label> Name</label>
                               
                               <input type="text" class="form-control" name="c_name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label> Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Password</label>
                               
                               <input type="password" class="form-control" name="c_pass1"  id="p1"required >
                               
                           </div><!-- form-group Finish -->
                            <div class="form-group"><!-- form-group Begin -->
                               
                               <label> Confirm Password</label>
                               
                               <input type="password" class="form-control" name="c_pass2" id="p2" required>
                               
                           </div><!-- form-group Finish -->
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Contact</label>
                               
                               <input type="text" class="form-control" name="c_contact" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>City</label>
                               
                               <input type="text" class="form-control" name="c_city" required>
                               
                           </div><!-- form-group Finish -->
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Address</label>
                               
                               <input type="text" class="form-control" name="c_add" required>
                               
                           </div><!-- form-group Finish -->
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="register" class="btn btn-primary">
                               
                               <i class="fa fa-user"></i>Register
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish --> 
 
<?php
addcustomer();
?>
    <?php
     include("includes/footer.php");
     ?>

</body>
</html>