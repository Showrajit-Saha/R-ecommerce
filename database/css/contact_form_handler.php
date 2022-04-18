


<?php
      $name = $_POST['name'];
      $visitor =$_POST['email'];
      $message=$_POST['message'];

    $email_form = 'showrajitsaha@gmail.com';
    $email_subject="New from sunbmissin";
    $email_body= "User Name:$name.\n".
                    "User Email:$visitor_email\n".
                        "User Message:$message\n";

    $to="u1708021@student.cuet.ac.bd";
    $headers ="From:$emai_from\r\n";
    $headers .="Reply-To:$visitor_email\r\n";
     
     mail($to,$email_subject,$email_body,$headers);
    header("Location:feedback.html")

?>