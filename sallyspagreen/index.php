<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'weiz6788@sallyawesome.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sally Spa</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="home">

  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4">
    <div class="container">
      <a href="index.html" class="navbar-brand">
        <img src="img/logo3.png" width="50" height="50" alt="m">
        <h3 class="d-inline align-middle">Sally Spa</h3>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#therapy" class="nav-link">Our Therapists</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--SHOWCASE -->
<section id="showcase" class="py-5">
  <div class="primary-overlay ">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center">
          <h2 class="display-2 mt-5 pt-5 text-dark">
            Talking body, listening hands.
          </h2>
          <h4 >Our mission is to provide  <strong> high quality massage</strong> at a <strong> great price</strong> for our customers. </h4>
          <h3 class="text-dark"><i class="fa fa-phone"></i> : 000 000 0000 </h3>
        </div>
        <div class="col-lg-6">
          <img src="img/lady5.png" alt="" class="mb-5 pb-5 img-fluid d-none d-lg-block">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<section id="newsletter" class="bg-orange text-white py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control form-control-lg" placeholder="Enter Name">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control form-control-lg" placeholder="Enter Email">
      </div>
      <div class="col-md-4">
        <button class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope-open-o"></i> Subscribe</button>
      </div>
    </div>
  </div>
</section>

<!-- BOXES -->
<section id="boxes" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card text-center bg-primary">
          <div class="card-body">
            <h3 class="text-dark">Look Good</h3>
            <p >Relax your body and mind, soothe your anxiety and headaches</p>

          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center border-warning ">
          <div class="card-body">
            <h3 class="text-warning" >Feel Better</h3>
            <p class="text-muted">Help to heal chronic conditions and stress-related insomnia</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center bg-primary">
          <div class="card-body">
            <h3 class="text-dark">Be Stronger</h3>
            <p >Help to eases joint and muscle pain and improving your joint mobility.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center border-warning ">
          <div class="card-body">
            <h3 class="text-warning">Live Longer</h3>
            <p class="text-muted">A haven like place for personal healing, growth and discovery.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
    </div>
  </div>
</section>


<!-- ABOUT/ WHY SECTION -->
<section id="about" class=" py-5 text-center bg-light">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="info-header mb-5">
          <h1 class="text-primary pb-3">
            Chinese Massage
          </h1>
          <p class="lead pb-3">
            Ancient Chinese experts and practitioners believe that energy in the body has to flow continuously to help an individual to relieve stress and prevent diseases.
          </p>
        </div>

        <!-- ACCORDION -->
        <div id="accordion" role="tablist">
          <div class="card">
            <div class="card-header" id="heading1">
              <h5 class="mb-0">
                <div href="#collapse1" data-toggle="collapse" data-parent="#accordion" class="text-white">
                  <i class="fa fa-arrow-circle-down"></i> Chinese Massage
                </div>
              </h5>
            </div>

            <div id="collapse1" class="collapse show">
              <div class="card-body">
                Chinese massage focuses on channels or energy points that will effectively transport and guide blood and energy, or "qi," throughout the body. The aim is to achieve balance to protect the person against different types of infection and maintain the optimum function of all organs. When the channels are impeded or blocked, the person experiences pain and is prone to health problems. The masseuse can identify which pathways are blocked and need pressure.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="heading1">
              <h5 class="mb-0">
                <div href="#collapse2" data-toggle="collapse" data-parent="#accordion" class="text-white">
                  <i class="fa fa-arrow-circle-down"></i> Deep Tissue Massage
                </div>
              </h5>
            </div>

            <div id="collapse2" class="collapse">
              <div class="card-body">
              Deep tissue massage uses firm pressure and slow strokes to reach deeper layers of muscle and fascia (the connective tissue surrounding muscles). It's used for chronic aches and pain and contracted areas such as a stiff neck and upper back, low back pain, leg muscle tightness, and sore shoulders.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="heading1">
              <h5 class="mb-0">
                <div href="#collapse3" data-toggle="collapse" data-parent="#accordion" class="text-white">
                  <i class="fa fa-arrow-circle-down"></i> Reflexology
                </div>
              </h5>
            </div>

            <div id="collapse3" class="collapse">
              <div class="card-body">
              Reflexology is a spa treatment where the therapist works on reflex points on your feet, hands, and ears that are thought to relate to specific organs and glands in the body. Beyond the feel-good effects of the treatment, the practice and purpose go deeper than the skin and muscles by taking specific reflex points on the foot to induce a healing response in corresponding organs and areas of the body.
          </div>

        </div>

        </div>


        </div>

        </div>
      </div>
  </div>
</section>

<!--AUTHORS -->
<section id="therapy" class="my-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="info-header mb-5">
          <h1 class="text-primary pb-3">
            Meet Our Therapists
          </h1>
          <p class="lead pb-3">
            There are tremendous benefits to be achieved through this treatment.  Whether your need is to have a moment of relaxation, reduce muscle tension or attain relief from chronic pain, Our massage therapists can enhance your overall sense of emotional and physical well-being.
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/lady0.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Bobina Zurn</h3>
            <h5 class="text-muted">Massage Therapist</h5>

            <p>We can’t wait to get our hands on you!</p>
            <div class="d-flex flex-row justify-content-center">
              <div class="p-4">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
              </div>
              <div class="p-4">
                <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
              </div>
              <div class="p-4">
                <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>



      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/lady1.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Grace Smith</h3>
            <h5 class="text-muted">Massage Therapist</h5>

            <p>We’ve got your back.</p>
            <div class="d-flex flex-row justify-content-center">
              <div class="p-4">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
              </div>
              <div class="p-4">
                <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
              </div>
              <div class="p-4">
                <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/lady2.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Bunny Bridge</h3>
            <h5 class="text-muted">Massage Therapist</h5>

            <p>Revitalize your beauty… Revitalize your soul.</p>
            <div class="d-flex flex-row justify-content-center">
              <div class="p-4">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
              </div>
              <div class="p-4">
                <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
              </div>
              <div class="p-4">
                <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/lady3.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Violante Cazzola</h3>
            <h5 class="text-muted">Massage Therapist</h5>

            <p>We can help you recover and perform better.</p>
            <div class="d-flex flex-row justify-content-center">
              <div class="p-4">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
              </div>
              <div class="p-4">
                <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
              </div>
              <div class="p-4">
                <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <h3>Get In Touch</h3>
        <p class="lead">Helping you feel fit for sport and fit for life.</p>
       
        <?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>
              <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon">
                <i class="fa fa-envelope"></i>
              </span>
              <input type="text" name="email" class="form-control" placeholder="example@email.com" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon">
                <i class="fa fa-pencil"></i>
              </span>
              <textarea name="message" class="form-control" placeholder="Enter Message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
          </div>
         
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Submit </button>
        </form>
      </div>
      <div class="col-lg-3 align-self-center">
        <img src="img/logo.png" alt="" class="img-fluid">

      </div>
    </div>
  </div>
</section>


<footer id="main-footer" class="py-5 bg-primary ">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6 ml-auto">
        <h3 class="text-dark"><i class="fa fa-phone"></i> : 306 250 3966 </h3>
        <p class="lead ">Copyright &copy:2018</p>
      </div>
    </div>
  </div>

</footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>

</body>
</html>
