<?php 
    /* Specify the form field names your form will accept
    $whitelist = array( 'name', 'email', 'message');*/

// Set the email address submissions will be sent to
    $email_address = 'heyhey@alexflores.design';

// Set the subject line for email messages
    $subject = 'New Contact Form Submission';


    if ($_POST["submit"]) {
        /*$result='<div class="alert alert-success">Form submitted</div>';*/

        if (intval($_POST['human']) !== 7) {
            $error="<br />Your math is suspect.";
        }

        if (!$_POST['name']) {
            $error.="<br />Please enter your name";
        }

        if (!$_POST['email']) {
            $error.="<br />Please enter your email address";
        }

        /*if (!$_POST['phone']) {
            $error.="<br />Please enter your phone number";
        }*/

        if (!$_POST['comment']) {
            $error.="<br />Please enter a comment";
        }


        if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
            $error.="<br />Please enter a valid email address";
        } 

        if ($error) {

            $result='<div class="alert alert-danger"><strong>There were error(s) in form:</strong>'.$error.'</div>';


        } else {

        if (mail( $email_address, $subject, "Name: ".$_POST['name']."


            Email: ".$_POST['email']."

            Phone: ".$_POST['phone']."

            Comment: ".$_POST['comment'])) {

                $result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch.</div>';

                $_POST = array();

            } else {
            
                $result='<div class="alert alert-danger">Sorry there was an error in sending your message.  Please try again later.</div>';                
            
            }
        }

    }
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace|Lora" rel="stylesheet">

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--1.0 HEADER -->
        <div class="header-background-tablet-img" id="background-header-tablet">
            <header>
            	<!--1.1 LOGO -->
            	<div id="logo">
                    <h1> AlexFlores.design </h1>
                    <!--<figure class="logo-img">
            		  <img src="img/logov2.png" alt="AlexFlores.design" />
                    </figure>-->
                    
        		</div>

            	<!--1.2 NAVIGATION -->
            	<nav>
            		<ul>
            			<li>
            				<a href="#work">Work</a>
            			</li>
            			<li>
            				<a href="#about">About</a>
        				</li>
        				<li>
            				<a href="#contact">Contact</a>
        				</li>
            		</ul>
            	</nav>
            </header>
        
        <!-- 2.0 MAIN CONTENT -->
            <div id="main-content">        	
            	<!--2.1 WELCOME -->
            	<div class="result">
                        <?php echo $result; ?>
                </div>
                <div class="welcome">
            		<header>
            			<h1>
            				Welcome to AlexFlores.design! 
            			</h1>
        			</header>
    			</div>
    			<div class="welcome-message">
    				<h2>
    					Please make yourself at home, check out some of my work, read my story and then send me an email because I’d love to hear from you!
    				</h2>
    			</div>


            	<!--2.2 WORK -->
            	<a name="work"></a>
                <div class="work">
            		<header>
            			<h1>
            				Work
            			</h1>
            		</header>
            		<div class="portfolio-samples">
    	        		<a target="_blank" href="http://ehtlogistics.com/">
                            <figure class="portfolio-sample1">
        	        			<img src="img/portfolio-sample1.png" alt="portfolio-sample1" />
        	    			</figure>
                        </a>
    	    			<a target="_blank" href="http://knitsong.com/">
                            <figure class="portfolio-sample2">
                                <img src="img/portfolio-sample2.png" alt="portfolio-sample2" />
        	    			</figure>
                        </a>

                        <a target="_blank" href="http://www.alexanderthedeveloper.com/">
        	    			<figure class="portfolio-sample3">
        	        			<img src="img/portfolio-sample3.png" alt="portfolio-sample3" />
        	    			</figure>
                        </a>
        			</div>
            	</div>

            	<!--2.3 ABOUT -->            
                <div class="about-background-img" id="background-mobile">
                    <a name="about"></a>
                    <div class="about">            
                        <header>
                			<h1>
                				About
                			</h1>
                		</header>            
            			<div class="story">	    			
                            <h2>            
        	    				Story
        	    			</h2>
        	    			<p class="story-copy">
        	    				

                                From Band Director to Online Business Owner to IT Director, I'm no stranger to providing both highly creative and highly technical solutions for clients with a specific outcome in mind.
        	    			</p>
            			</div>
            			<div class="skills">
                            <h2>
        	    				Skills
        	    			</h2>
        	    			<p class="skills-copy">
        	    				<ul>
        	    					<li>
        	    						UX/UI
        	    					</li>
        	    					<li>
        	    						HTML5
        	    					</li>
        	    					<li>
        	    						CSS3
        	    					</li>
        	    					<li>
        	    						Responsive Design
        	    					</li>
                                    <li>
                                        Adobe Photoshop
                                    </li>
        	    				</ul>
        	    			</p> 
            			</div>
            			<div class="services">
        	    			<h2>
        	    				Services
        	    			</h2>
        	    			<p class="services-copy">
        	    				<ul>
        	    					<li>
        	    						Portfolio Design
        	    					</li>
        	    					<li>
        	    						Marketing Sites
        	    					</li>
        	    					<li>
        	    						Blogging Sites
        	    					</li>
        	    				</ul>
        	    			</p>
            			</div>
                	</div>
                </div>
            </div>
        </div>
        <!--3.0 Footer -->
        <footer>
        <!--3.1 CONTACT -->
        	<a name="contact"></a>
            <div class="contact">
        		<h1>
        			Contact
        		</h1>
    		</div>
    		<div class="email">
        		<h2>
        			<a href="mailto:heyhey@alexflores.design">heyhey@alexflores.design</a>
        		</h2>
    		</div>
            <form action="?" method="post">
                <h2>
                    <div class="form-group">
                    <label for="name">Name</label>       
                        <input type="text" name="name" class="form-control" value="<?php echo $_POST['name']; ?>" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $_POST['email']; ?>" />
                </div>


                <div class="form-group">
                    <label for="phone">Phone <em>(optional) </em></label>
                    <input type="text" name="phone" class="form-control"value="<?php echo $_POST['phone']; ?>" />
                </div>

                <div class="form-group">
                    <label for="comment">Message</label>
                    <textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?></textarea>
                </div>
                </h2>
                <div class="form-group">
                    <label for="human" class="control-label">5 + 2 ?</label>
                    <input type="text" class="form-control" name="human" placeholder="Your Answer">
                </div>
                <h2><input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" /></h2>
            </form>
        </footer>


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
