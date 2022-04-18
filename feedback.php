<!--

<?php
$receiver = "u1708021@student.cuet.ac.bd";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...This is a test email send from Localhost.";
$sender = "From:showrajitsaha@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>

-->








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="images/x-icon" />
    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
	
	
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
        <a href="http://localhost/R-ecom/feedback.php" > Feedback</a> OR 
         <a href="http://localhost/dashboard/contactUs/index.php" > Login</a>
        </div>

    <div class="form-container">
 
    </div>

</div>

<div class="header-2">

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
           <ul>
<li><a  id="#active" href="#home"><i class="fa fa-home"></i> home</a></li>
<li><a href="Boys.html"><i class="fa fa-user"></i> Boy</a></li>

<li><a href="Girls.html"><i class="fa fa-users"></i> Girls </a></li>


<li><a href="#"><i class="fa fa-anchor"></i> Toys </a></li>

<li><a href="#"><i class="fa fa-calendar-check-o"></i> Announce </a></li>
<li><a href="#"><i class="fa fa-search"></i>Find </a></li>
<li><a href="Special.html"><i class="fa fa-caret-down"></i>Special </a>
    
	
</li>
</ul>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="cart1.html" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>

</div>

</header>

<!-- header section ends -->



<!--     contact us  start   -->
<section class="contact">

<div class="container">
         <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
               <h2 class="text-center">
                  Send Message
               </h2>
               <p class="text-center">
                  Send mail to anyone from localhost.
               </p>
               <!-- starting php code -->
               <?php
                  //first we leave this input field blank
                  $recipient = "";
                  //if user click the send button
                  if(isset($_POST['send'])){
                      //access user entered data
                     $recipient = $_POST['email'];
                     $subject = $_POST['subject'];
                     $message = $_POST['message'];
                     $sender = "From: showrajitsaha@gmail";
                     //if user leave empty field among one of them
                     if(empty($recipient) || empty($subject) || empty($message)){
                         ?>
               <!-- display an alert message if one of them field is empty -->
               <div class="alert alert-danger text-center">
                  <?php echo "All inputs are required!" ?>
               </div>
               <?php
                  }else{
                      // PHP function to send mail
                     if(mail($recipient, $subject, $message, $sender)){
                      ?>
               <!-- display a success message if once mail sent sucessfully -->
               <div class="alert alert-success text-center">
                  <?php echo "Your mail successfully sent to $recipient"?>
               </div>
               <?php
                  $recipient = "";
                  }else{
                   ?>
               <!-- display an alert message if somehow mail can't be sent -->
               <div class="alert alert-danger text-center">
                  <?php echo "Failed while sending your mail!" ?>
               </div>
               <?php
                  }
                  }
                  }
                  ?> <!-- end of php code -->
               <form action="feedback.php" method="POST">
                  <div class="form-group">
                     <input class="form-control" id="form-control"name="email" type="email" placeholder="E-mail" value="<?php echo $recipient ?>">
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="subject" type="text" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                     
                  <textarea id="subject" name="message"  class="form-control textarea" placeholder="Write something..."row="5" style="height:200px"></textarea>

				  </div>
				 
   
                  <div class="form-group">
                     
                    <input type="submit" class="form-control1 submit " value="send" name="send"  placeholder="Subject">
				  </div>
               </form>
            </div>
         </div>
      </div>


</section>
<!--     contract us  end   -->




<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  shopping </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique expedita molestiae distinctio facere beatae velit, maiores ullam molestias necessitatibus sapiente.</p>
        </div>

        <div class="box">
            <h3>links</h3>
            <a href="index.html">home</a>
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











<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>
    
	
	
	
	
	
	
</body>
</html>