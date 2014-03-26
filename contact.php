<?php 
	if ($_POST['submit'] == "Submit"){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		
		$to="mysore_7th@yahoo.in";
		
		$subject="Message From Your Website";

		$headers          = 'MIME-Version: 1.0' . "\r\n";
		$headers         .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers         .= 'To: The Receiver <mysore_7th@yahoo.in>' . "\r\n";
		$headers          .="From: aakansha.com <admin@aakansha.com>";
		
		$message        = "<html><body>
		Hi,<br>
		You have received a message from your website:<br><br>
		<b>Name:</b> $name<br>
		<b>Phone:<b> $phone<br>
		<b>Email:<b> $email<br>
		<b>Comment:</b> $comment<br><br>
		</body></html>";
		
		$sentmail = mail($to, $subject, $message, $headers);
			
			if($sentmail){
				$msg = "<div class='msg'>Thanks for Sending Us a Message. We Will Get Back To You Shortly!</div>";
			} else {
				$msg = "<div class='msg'>Please Try Again.</div>";
			}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Akanksha || Contact</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<!-- favicons -->
<link rel="icon" href="img/favicon.png" type="image/png" />
<link rel="shortcut icon" href="/favicon.ico" />
</head>
	
<body>

	<!-- pink strip top -->
    <div class="horiz_strip" id="pink_top">
    	<div class="horiz_strip_content"></div>
    </div>
    
    <!-- navigation -->
    <div class="horiz_strip" id="nav">
    	<div class="horiz_strip_content">
        	<ul id="nav_ul">
            	<a href="index.html"><li>Home</li></a>
                
                <div class="nav_item">
                    <a href="about.html">
                        <li>About Akanksha</li>
                     </a>
                    <!-- submenu for about section -->
                    <ul id="about_menu" class="submenu">
                        <a href="about.html#specialist"><li>Specialist</li></a>
                        <a href="about.html#team"><li>Team</li></a>
                        <a href="about.html#services"><li>Services</li></a>
                        <a href="about.html#treatment_protocol"><li>Treatment protocol</li></a>
                    </ul>
                </div>
                
                <div class="nav_item">
                    <a href="fertility.html">
                        <li>Fertility Information</li>
                     </a>
                    <!-- submenu for fertility section -->
                    <ul id="fertility_menu" class="submenu">
                        <a href="fertility.html#&slide1-1"><li>Ovulation induction</li></a>
                        <a href="fertility.html#&slide1-2"><li>IUI</li></a>
                        <a href="fertility.html#&slide1-3"><li>ICSI</li></a>
                        <a href="fertility.html#&slide1-4"><li>Surgical Sperm Aspiration</li></a>
                        <a href="fertility.html#&slide1-5"><li>Blastocyst transfer</li></a>
                        <a href="fertility.html#&slide1-6"><li>Cryopreservation</li></a>
                        <a href="fertility.html#&slide1-7"><li>Egg donation and Egg sharing</li></a>
                    </ul>
                </div>
                             
                <div class="nav_item">
                    <a href="other.html">
                        <li>Other Services</li>
                     </a>
                    <!-- submenu for other section -->
                    <ul id="other_menu" class="submenu">
                        <a href="other.html#&slide1-1"><li>How fertile am I?</li></a>
                        <a href="other.html#&slide1-2"><li>Semen Analysis </li></a>
                        <a href="other.html#&slide1-3"><li>MAR Test</li></a>
                        <a href="other.html#&slide1-4"><li>Endometrial Scan</li></a>
                        <a href="other.html#&slide1-5"><li>Follicle Tracking Scan</li></a>
                        <a href="other.html#&slide1-6"><li>Gynaecology Care</li></a>
                        <a href="other.html#&slide1-7"><li>Reproductive Immunology</li></a>
                        <a href="other.html#&slide1-8"><li>Immune Fertility Testing</li></a>
                    </ul>
                </div>
                
                <div class="nav_item">
                    <a href="contact.php">
                        <li class="selected">Contact Us</li>
                     </a>
                    <!-- submenu for fertility section -->
                    <ul id="contact_menu" class="submenu">
                        <a href="#contact_details"><li>Contact Details</li></a>
						<a href="#location_map"><li>Location Map</li></a>
                    	<a href="#book"><li>Book An Appointment</li></a>
                    </ul>
                </div>
                
                <div class="nav_item">
                    <a href="kc_raju_hospital.html">
                        <li>KC Raju Hospital</li>
                     </a>
                    <!-- submenu for fertility section -->
                    <ul id="hospital_menu" class="submenu">
                        <a href="kc_raju_hospital.html#specialties"><li>Specialties</li></a>
                        <a href="kc_raju_hospital.html#facilities"><li>Facilities</li></a>
                        <a href="kc_raju_hospital.html#specialists"><li>Specialists</li></a>
                        <a href="kc_raju_hospital.html#special_features"><li>Special Features</li></a>
                        <a href="kc_raju_hospital.html#affordable_section"><li>Insurance</li></a>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
    
    <!-- main content area -->
    <div class="horiz_strip" id="contact_content">
    	<div class="horiz_strip_content">
        	<!-- Logo -->
            <img src="img/logo.png" alt="Logo" /><br/>
            
            <?php echo $msg; ?>
            
            <!-- left content section -->
            <div id="contact_content_text">
            	<h1 id="contact_us">Contact <span class="pink">Us</span></h1>
                
                <div>
                    <h2 id="contact_details" class="light_pink"><!--Contact Details--></h2>
                    <p id="contact_spacing">#K C Raju Multispeciality Hospital and Aakanksha Fertility Center<br/>
						Hennur Main Road, Below Fly over<br/>
                        Lingarajapuram<br/>
                        Bangalore-84<br/>
                        Email: <a href="mailto:dr_mangaladevi@yahoo.in ">dr_mangaladevi@yahoo.in</a><br/>
                        Website: <a href="http://www.kcrajuhospitals.com" target="_blank">www.kcrajuhospitals.com</a><br/>
                        Phone: 080 25477712/25471264 
                        </p>
					
                    <h2 id="book" class="light_pink"><!--Book an Appointment--></h2> <br/>    
                    <form action="contact.php" method="post">
                    	<!-- name title and input -->
                        <label for="name">Name *</label>
                        <input name="name" id="name" type="text" required><br/>
                        
                        <!-- phone title and input -->
                        <label for="phone">Phone *</label>
                        <input name="phone" id="phone" type="text" required><br/>
                        
                        <!-- email title and input -->
                        <label for="email">E-mail *</label>
                        <input name="email" id="email" type="email" required><br/>
                        
                        <!-- comment title and input -->
                        <label id="comment_label" for="comment">Comment *</label>
                        <textarea name="comment" id="comment" required></textarea><br/>
                        
                        <!-- Submit -->
                        <input name="submit" id="submit" type="submit" value="Submit" required>
                    </form>            
                </div>
        	</div>
            
            <!-- right column -->
            <div id="column_right">
            	<h2 id="location_map" class="light_pink"></h2>
                <iframe width="300" height="625" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=K+C+Raju+Multispeciality+Clinic,+Bangalore,+Karnataka,+India&amp;aq=0&amp;oq=K+C+Raju+Multispeciality+Clinic,&amp;sll=37.0625,-95.677068&amp;sspn=44.388698,99.931641&amp;t=m&amp;ie=UTF8&amp;hq=kc+raju+multispeciality+clinic&amp;hnear=Bangalore,+Bangalore+Urban,+Karnataka,+India&amp;ll=13.013746,77.6258&amp;spn=0.006544,0.003208&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe>
             </div>
             
    </div>
    
    <!-- footer -->
    <div class="horiz_strip" id="footer">
    	<div class="horiz_strip_content">
        	<!-- vertical rows of content -->
            <div class="vertical_footer_row">
            	<a href="about.html#about_akanksha">About Akanksha</a>
                <ul>
                    <a href="about.html#specialist"><li>Specialist</li></a>
					<a href="about.html#team"><li>Team</li></a>
                    <a href="about.html#services"><li>Services</li></a>
                    <a href="about.html#treatment_protocol"><li>Treatment protocol</li></a>
                </ul>
            </div>
            
            <!-- vertical rows of content -->
            <div class="vertical_footer_row">
            	<a href="fertility.html#fertility_information">Fertility Information</a>
                <ul>
                        <a href="fertility.html#&slide1-1"><li>Ovulation induction</li></a>
                        <a href="fertility.html#&slide1-2"><li>IUI</li></a>
                        <a href="fertility.html#&slide1-3"><li>ICSI</li></a>
                        <a href="fertility.html#&slide1-4"><li>Surgical Sperm Aspiration</li></a>
                        <a href="fertility.html#&slide1-5"><li>Blastocyst transfer</li></a>
                        <a href="fertility.html#&slide1-6"><li>Cryopreservation</li></a>
                        <a href="fertility.html#&slide1-7"><li>Egg donation and Egg sharing</li></a>
                    </ul>
            </div>
            
            <!-- vertical rows of content -->
            <div class="vertical_footer_row">
            	<a href="other.html#other_services">Other Services</a>
                <ul>
                        <a href="other.html#&slide1-1"><li>How fertile am I?</li></a>
                        <a href="other.html#&slide1-2"><li>Semen Analysis </li></a>
                        <a href="other.html#&slide1-3"><li>MAR Test</li></a>
                        <a href="other.html#&slide1-4"><li>Endometrial Scan</li></a>
                        <a href="other.html#&slide1-5"><li>Follicle Tracking Scan</li></a>
                        <a href="other.html#&slide1-6"><li>Gynaecology Care</li></a>
                        <a href="other.html#&slide1-7"><li>Reproductive Immunology</li></a>
                        <a href="other.html#&slide1-8"><li>Immune Fertility Testing</li></a>
                    </ul>
            </div>
            
            <!-- vertical rows of content -->
            <div class="vertical_footer_row">
            	<a href="#contact_us">Contact Us</a>
                <ul>
                    <a href="#contact_details"><li>Contact Details</li></a>
					<a href="#location_map"><li>Location Map</li></a>
                    <a href="#book"><li>Book An Appointment</li></a>
                </ul>
            </div>
            
            <!-- vertical rows of content -->
            <div class="vertical_footer_row">
            	<a href="kc_raju_hospital.html#kc_raju">KC Raju Hospital</a>
                <ul>
                    <a href="kc_raju_hospital.html#specialties"><li>Specialties</li></a>
					<a href="kc_raju_hospital.html#facilities"><li>Facilities</li></a>
                    <a href="kc_raju_hospital.html#specialists"><li>Specialists</li></a>
                    <a href="kc_raju_hospital.html#affordable_section"><li>Special Features</li></a>
                    <a href="kc_raju_hospital.html#"><li>Insurance</li></a>
                </ul>
            </div>
            
            <div id="copyright">2013 &copy; Akanksha. All Rights Reserved.<br/><span class='space_top'>Site Credits: <a href="http://www.insciencehealth.com" target="_blank"> <img src="img/common/fb.png" /> </a>
            <a href="http://www.insciencehealth.com" target="_blank"> <img src="img/common/fb.png" /> </a>
            <a href="http://www.insciencehealth.com" target="_blank"> <img src="img/common/fb.png" /> </a></span>
            </div>
            
        </div>
    </div>
    <!-- js -->
    <script src="js/jquery-1.10.0.min.js"></script> 
    <script src="js/script.js"></script>
</body>
</html>
