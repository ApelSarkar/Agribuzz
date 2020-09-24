<?php
include("header.php");
if(isset($_POST[submit]))
{
	$to = "apel35-1669@diu.edu.bd";
		$subject = "Message from AgriBuzz";
		
		$message = "
		<html>
		<head>
		<title>AgriBuzz Contact Us form</title>
		</head>
		<body>
		<p>AgriBuzz Contact Us form</p>
		<table>
		<tr>
		<th>Name</th>
		<td>$_POST[name]</td>
		</tr>
		<tr>
		<th>Email ID</th>
		<td>$_POST[emailid]</td>
		</tr>
		<tr>
		<th>Contact Number</th>
		<td>$_POST[contctno]</td>
		</tr>
		<tr>
		<th>Website</th>
		<td>$_POST[web]</td>
		</tr>
		<tr>
		<th>Subject</th>
		<td>$_POST[subject]</td>
		</tr>
		<tr>
		<th>Message</th>
		<td>$_POST[textarea]</td>
		</tr>
		</table>
		</body>
		</html>
		";
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// More headers
		$headers .= 'From: <$_POST[emailid]>' . "\r\n";
		
echo "<script>alert('Thank You For Dropping A Mail!! We'll Get Back To You Soon..');</script>";
		sendemailmsg($to,$subject,$message);
}
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>CONTACT US...</h2>
          <ol>
            <li>Happy to help..</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	

 
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>We'd Love To Hear From You!!!</h3>
          <p> Please use the contact form on the right side if you have any questions or requests, concerning our services. <br>We will respond to your message within 24 hours.</p>
    
        <a href="#" class="twitter cta-btn "><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook cta-btn"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram cta-btn"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus cta-btn"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin cta-btn"><i class="bx bxl-linkedin"></i></a>

        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.814859294976!2d90.3729417507571!3d23.75398068451197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b99468a77131%3A0x2f198574847d3d9a!2sDaffodil%20International%20University-%20Software%20Section!5e0!3m2!1sen!2sbd!4v1598120156626!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Dhanmondi 32- DIU - 1207,Dhaka, Bangladesh</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>sarkarapel420@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>01751-373413</p>
                </div>
              </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  
<?php
include("footer.php");
?>