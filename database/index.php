

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive E-Commerce Website Design Tutorial</title>





    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>


        
    <link rel="shortcut icon" href="./images/favicon.ico" type="images/x-icon" />
    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="R-ecom/css/style.css">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- header section starts  -->

<header>
     <!-- nav1 start-->
    <div class="nav1">
        <div class="left">
       <h1>All  <span>Mart</span><h1>
      <p> Everything for kids world</p>
      
        </div>
         <div class="right">
       <a href="https://www.facebook.com/" > <i class="fa fa-facebook"></i></a>
         <a href="https://www.instagram.com/accounts/login/" > <i class="fa fa-instagram"></i></a>
         <a href="https://web.whatsapp.com/" >   <i class="fa fa-whatsapp"></i></a>
           <a href="https://twitter.com/login?lang=en-gb" > <i class="fa fa-twitter"></i></a>
               <i class="fa fa-pinterest"></i>
        </div>

   

        </div>
        <!-- nav1 end-->
<div class="header-1">

            <div class="left">
            <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  shopping </a>
        <span> welcome to my E shop</span>
        <a href="#" > Register</a> OR 
         <a href="Log in.html" > Login</a>
        </div>

    <div class="form-container">
        
    </div>

</div>

<div class="header-2">

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
           <ul>
<li><a  id="#active" href="R-ecom/index.html"><i class="fa fa-home"></i> home</a></li>
<li><a href="about.html"><i class="fa fa-user"></i> Boy</a></li>

<li><a href="#"><i class="fa fa-users"></i> Accessories </a></li>


<li><a href="#"><i class="fa fa-anchor"></i> Toys </a></li>

<li><a href="#"><i class="fa fa-calendar-check-o"></i> Announce </a></li>
<li><a href="#"><i class="fa fa-search"></i>Find </a></li>
<li><a href="#"><i class="fa fa-caret-down"></i>Special </a>
    
    

</li>
</ul>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>

</div>

</header>
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1>Contact form Tutorial from <a href="http://hubbunch.com">All Mart.com</a></h1>

                    <p class="lead">This is a demo for our tutorial dedicated to crafting working Bootstrap contact form with PHP.</p>


                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required. Contact form by <a href="https://hubbunch.com" target="_blank">HubBunch</a>.</p>
                                </div>
                            </div>
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  shopping </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique expedita molestiae distinctio facere beatae velit, maiores ullam molestias necessitatibus sapiente.</p>
        </div>

        <div class="box">
            <h3>links</h3>
            <a href="#">home</a>
            <a href="#">arrival</a>
            <a href="#">featured</a>
            <a href="#">gallery</a>
            <a href="#">deal</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
            <p> <i class="fas fa-home"></i>
              Mirpur ,Dhaka
            </p>
            <p> <i class="fas fa-phone"></i>
                +880....
            </p>
            <p> <i class="fas fa-globe"></i>
               nd1234@gmail.com
            </p>
        </div>

    </div>

<h1 class="credit">Designed  by <span>SS Akash </span> | all rights reserved. </h1>

</section>

<!-- footer section ends -->






        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    









<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>
    
    
    
    
    
    
    
</body>
</html>