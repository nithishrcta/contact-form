<?php
 
if(isset($_POST['submit'])){
    $mailto = "nithishr018@gmail.com"; // My email address
     //custmer data
    $name = $_POST['name'];  // Getting Customer Name
    $from = $_POST['email']; // Getting customer Email address
    $phoneNumber = $_POST['phone']; // getting customer phone number
    $subject = $_POST['subject'];  // Getting subject line from customer
    $subject2 = "Confirmation: Message Submitted Successfully! | KnowReva"; //for customer confirmatiom
 
     //Email body, I will receive
    $message = "Student Name: " . $name . "\n"
    . "Phone Number: " . $phoneNumber . "\n\n"
    . "Message: " . "\n" . $_POST['message'];
     //Message for customer
    $message2 = "Dear " . $name . "\n"
    . "Thank you for contacting us, we will get back to you shortly."."\n\n"
    . "You submitted the following message: ". "\n". $_POST['message']."\n\n"
    . "Regards,/n"
    . "- KnowReva";
 
    $headers = "From:" .  $from; //Customer email
    $headers2 = "From:" . $mailto;  //This will sent to client
      //PHP mailer function
    $result = mail($mailto, $subject, $message, $headers); //Send email to me
    $result2 = mail($from, $subject2, $message2, $headers2); // sends confirmation email to customers
 
    /* checking if the Mails has sent successfully! */
    if ($result && $result2) {
        $success = "Message was sent successfully, check your email!";
         echo '<script type="text/javascript">alert("Message Sent Successfully. We will contact you shortly.")</script>'; 
    } else {
        $failed = "Message was not sent, try again later!";
         echo '<script type="text/javascript">alert("Mail was not sent, Try again!.")</script>'; 
    }
     
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./contact.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <div class="container">
        <form method="post" action="#">
            <h3>GET IN TOUCH</h3>
            <input type="text" placeholder="Your Name" required id="name" name="name">
            <input type="email" placeholder="Email ID" required id="email" name="email0">
            <input type="text" placeholder="Phone No" required id="phone" name="phone">
            <textarea id="message" rows="4" placeholder="How can we Help you?" name="subject"></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    <!-- <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
         function sendEmail(){
         Email.send({
            Host : "smtp.gmail.com",
            Username : "nithishr018@gmail.com",
            Password : "mmdrscta",
            To : "nithishr081@gmail.com",
            From : document.getElementById("email").value,
            Subject : "New Contact form Enquiry",
            Body : "Name: " + document.getElementById("name").value
            + "<br> Email: " + document.getElementById("email").value
            + "<br> Phone No: " + document.getElementById("phone").value
            + "<br> Message: " + document.getElementById("message").value
        }).then(
            message => alert("Message Sent Succesfully")
    );
}
    </script> -->
</body>
</html>