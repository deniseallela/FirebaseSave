<?php include('loginProcess.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>my account</title>
    <!-- online link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- BS4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- downloaded BS3 -->
   <!--  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script> -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
    <style type="text/css">
    hr
    {
        border: solid black 1px;
        width: 50%;
    }
     body
    {
       background-image: url(nai.jpg);
        background-repeat: no-repeat;
        background-size: 100% ;
         
    }
</style>
</head>
<body style="font-size: 1.7em; font-family: timesnewroman;"  class="bg-light">
    
       
        
            <nav class="container navbar navbar-expand-sm navbar-inverse navbar-fixed-top" >

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="container-fluid ">
            <div class="navbar-header">
                <a style="font-size: 2em; color: red;" href="#"><img src="p.jpg" alt="IosKenya" style= "width:40px; color: red; font-size: 2em; "> IosKenya
                </a>

            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="nav navbar-nav ">
                    <li class=" nav-item ">
                        <a href="index.html"><i class="fa fa-home"> Home</i></a>
                    </li>
                    <li class="nav-item ">
                        <a href="account.html"><span class="glyphicon glyphicon-earphone"> Contact Us</span></a>
                    </li>
                    <li class=" nav-item">
                      <a href="about.html"><i class="fa fa-info"> About Us</i></a>
                    </li>
                    
                    <li class=" nav-item">
                      <a href="shop.php"><i class="fa fa-shopping-basket"> Shop</i></a>
                    </li>
                    

                    <li class="dropdown nav-item navbar-right">
                      
                        <a class="fa" href="account.html">Login | Register</a>
                    </li>
                </ul>
            </div>
          </nav>
                
      
  

 <div id="x">
            <h1 style="font-weight: bold;">Integrated Office Solutions</h1>
        
        <hr style="margin-bottom: 0;">

</div>
</div>
<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div style="margin-left:0;" class="col-sm-3 ">
          <div >
                <h1 style="font-weight: bold; color:black;">SHOP</h1>
                <hr style="margin-left: 0;">
            </div>
<div class="form-group">
  <label for="sel1"  >Manufacturer:</label>
  <select class="form-control" id="sel1">
    <option class="active">All</option>
    <option>Ricoh</option>
    <option>Lower Pressure Rollers</option>
    <option>Kyocera</option>
      </select>
      <label for="sel1">Series:</label>
  <select class="form-control" id="sel1">
    <option class="active">Any series</option>
    <option>Ecosys fs</option>
    </select>
    <label for="sel1">Category:</label>
  <select class="form-control" id="sel1">
    <option class="active">Any category</option>
    <option>1128</option>
    <option>C2126</option>
  </select>
</div>

</div>





    <div class="col-md-9 ">
       
<div  class="col-sm-12 ">
    <div class="row">
        <div style=" background-color: lightgrey;" class="border" >
                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
            </div>
    
        <form style=" background-color: lightgrey;" class="b" method="POST" action="loginProcess.php" role="form">
           <?php include('errors.php'); ?>
            <h1>Create Account</h1>
            <div class="form-group">
                    <label for="name">First Name :</label>
                    <input type="text" class="form-control" name="name_1" value="<?php echo $name_1; ?>">
                </div>
                <div class="form-group">
                    <label for="name2">Last Name :</label>
                    <input type="text" class="form-control" name="name_2"  value="<?php echo $name_2; ?>">
                </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password_1">
            </div>
            <div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" name="password_2">
            </div>
            <div style="color: blue" class="checkbox">
                <label><input type="checkbox"> Remember me</label>
                <input type="submit" name="reg_user" value="Register"><br>
                <a href="account.php">Already Have an Account</a>
            </div>
            
        </form>
        
        </div>
    </div>


</div>




</div>



<footer class="container-fluid" id="q">
<div class="row">
    <ul class="text-left events">
        <li> <p> <a href="#"><span class="fa fa-truck"></span> Free Delivery.</a> Within Nairobi. </p>
        </li>
        <li> <p> <a href="#"><span class="fa fa-refresh"></span> 100% quality </a> The best quality of all products. </p>
        </li>
    </ul>
</div>



<div >
    
        <div class="text-left col-sm-8 border">

            <h5>Follow Us</h5>
            <ul class="list-unstyled social">
                <li>
                    <a href="https://www.facebook.com/Integratedofficesolution/"><span class="fa fa-facebook/"></span>Facebook </a>
                </li>
                <li>   
                    <a href="https://twitter.com/inte_off_sol"><span class="fa fa-twitter"></span>Twitter</a>
                </li>
            </ul>
        </div>




        <div style="margin-bottom: 0px;" class="text-right copyright col-sm-4">



            <img src="http://ioskenya.com/wp-content/themes/ioskenya/images/ninja.png" alt="" style="width: 30px;"/>Powered By <a href="#">Ninjaz</a><br/> &copy; 2016 
        </div>
    </div>
</div>
</footer>
</body>
</html>
