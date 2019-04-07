<?php

	$error = ""; $successMessage = "";

	if ($_POST) {
		
		if(!$_POST["email"]) {
			
			$error .= "An email address is required!<br>";
			
		}
		if(!$_POST["content"]) {
			
			$error .= "Content is required!<br>";
			
		}
		if(!$_POST["subject"]) {
			
			$error .= "Subject is required!<br>";
			
		}
		
		if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
			
			$error .= "The email address is invalid!<br>";
			
		}
		
		if ($error != "") {
			
			$error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
			
		} else {
			
			$emailTo = "suzan493@gmail.com";
			
			$subject = $_POST['subject'];
			
			$content = $_POST['content'];
			
			$headers = "From; ".$_POST['email'];
			
			if (mail($emailTo, $subject, $content, $headers)) {
				
				$successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
				
			} else {
				
				$error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
				
			}
			
		}
		
	}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Breathtaking Release</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="inner">
					<h1>Breathtaking Release</h1>
					<p>Professional Therapeutic Bodywork</p>
				</div>
			</header>
			<!-- Contact Form -->
<div class="modal fade" id="contactMe" tabindex="-1" role="dialog" aria-labelledby="contactMe" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-left: 10px;">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Contact Me</h1>
			<div id="error"></div>
			<form method="post">
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email address">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			  <div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" class="form-control" id="subject" name="subject">
			  </div>

			<div class="form-group">
			<label for="content">Questions and/or comments</label>
			<textarea class="form-control" id="content" name="content" rows="3"></textarea>
			</div>
			<button type="submit" id="submit" class="btn btn-secondary">Submit</button>
</form>

		</div>
    </div>
  </div>
</div>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
						<!-- <span class="icon far fa-calendar-alt" style="font-size:3em; color:#EF6480"></span> -->
						<h2>Schedule An Appointment Today</h2>
						<ul class="actions">
							<li><a href="https://www.massagebook.com/profiles/publicBooking/4322899" target="_blank" class="button big">San Jose</a></li>
							<li><a href="https://www.massagebook.com/Santa_Cruz~Massage~breathtaking-release?src=external" target="_blank" class="button big">Santa Cruz</a></li>
						</ul>
					</section>

				<!-- Items -->
					<section class="main items">
						<article class="item">
							<header>
								<a><img src="images/pic01.jpg" alt="" /></a>
								<h3>BIO</h3>
							</header>
							<p>Learn more about Suzan and her qualifications.</p>
						<ul class="actions">
						<li><a class="button big" data-toggle="modal" data-target="#bio">More</a></li>
						</ul>
						<ul class="actions">
						<li><a class="button big" data-toggle="modal" data-target="#contactMe">Contact Me</a></li>
					</ul>
						</article>
<!-- Modal -->
<div class="modal fade" id="bio" tabindex="-1" role="dialog" aria-labelledby="bio" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-left: 10px;">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>About Suzan</h1>
			<p> Suzan Abboud was born and raised in the Monterey California area. She moved to Santa Cruz two years ago. She graduated with an AS in Massage Therapy in 2009 from Monterey Peninsula college. She has been a massage therapist for 9 years and worked at a variety of settings from spas, to physical therapy offices, and franchises. <br>Being able to help people have less pain and less anxiety is why she loves being a Massage Therapist. Being intuitive and providing a healing approach that has a longer lasting effect on the body is what people describe as her massage style. She studied Swedish, Sports, Deep tissue, Trigger point, Clinical Massage, and Craniosacral Therapy.</p>

		</div>
    </div>
  </div>
</div>

						<article class="item">
							<header>
								<a><img src="images/pic02.jpg" alt="" /></a>
								<h3>Craniosacral Therapy</h3>
							</header>
							<p>Evaluates and enhances the function of the physiological body arrangement called the craniosacral system.</p>
							<ul class="actions">
								<li><a class="button big" class="btn btn-primary" data-toggle="modal" data-target="#craniosacral">More</a></li>
							</ul>
						</article>
<!-- Modal -->
<div class="modal fade" id="craniosacral" tabindex="-1" role="dialog" aria-labelledby="craniosacral" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-left: 10px;">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>CranioSacral Therapy</h1>
			<p>(CST) was pioneered and developed by osteopathic physician John E. Upledger following extensive scientific studies from 1975 to 1983 at Michigan State University, where he served as a clinical researcher and Professor of Biomechanics.
CST is a gentle, hands-on method of evaluating and enhancing the functioning of a physiological body system called the craniosacral system - comprised of the membranes and cerebrospinal fluid that surround and protect the brain and spinal cord.
Using a soft touch generally no greater than 5 grams, or about the weight of a nickel, practitioners release restrictions in the craniosacral system to improve the functioning of the central nervous system.
By complementing the body's natural healing processes, CST is increasingly used as a preventive health measure for its ability to bolster resistance to disease, and is effective for a wide range of medical problems associated with pain and dysfunction, including:
<ul>
<li>Migraine Headaches</li>
<li>Chronic Neck and Back Pain</li>
<li>Motor-Coordination Impairments</li>
<li>Colic</li>
<li>Autism</li>
<li>Central Nervous System Disorders</li>
<li>Orthopedic Problems</li>
<li>Concussions and Traumatic Brain Injuries</li>
<li>Alzheimer's Disease and Dementia</li>
<li>Spinal Cord Injuries</li>
<li>Scoliosis</li>
<li>Infantile Disorders</li>
<li>Learning Disabilities</li>
<li>Chronic Fatigue</li>
<li>Emotional Difficulties</li>
<li>Stress and Tension-Related Problems</li>
<li>Fibromyalgia and other Connective-Tissue Disorders</li>
<li>Temporomandibular Joint Syndrome (TMJ)</li>
<li>Neurovascular or Immune Disorders</li>
<li>Post-Traumatic Stress Disorder</li>
<li>Post-Surgical Dysfunction</li>
</ul>
SomatoEmotional Release (SER) is a therapeutic process that uses and expands on the principles of CranioSacral Therapy to help rid the mind and body of the residual effects of trauma. SER1 offers applications designed to enhance results using CST and other complementary therapies.
<li>Assess and mobilize the Avenue of Expression working through more than 10 different body components, including the thoracic inlet, hard palate and hyoglossal tissues.</li>
<li>Locate and release Energy Cysts.</li>
<li>Release suppressed emotions that may be inhibiting complete structural releases.</li>
<li>Refine listening and comprehension skills.</li>
<li>Improve palpation and whole-body evaluation skills.</li>

</p>

		</div>
    </div>
  </div>
</div>

						<article class="item">
							<header>
								<a><img src="images/pic03.jpg" alt="" /></a>
								<h3>Myofacial \ Trigger Point Therapy</h3>
							</header>
							<p>Trigger points or muscle "knots" are sensitive spots in soft tissue, and too many of them is "myofascial pain syndrome".</p>
						<ul class="actions">
						<li><a class="button big" class="btn btn-primary" data-toggle="modal" data-target="#myofacial">More</a></li>
						</ul>
						</article>
<!-- Modal -->
<div class="modal fade" id="myofacial" tabindex="-1" role="dialog" aria-labelledby="myofacial" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-left: 10px;">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Myofascial  Release Therapy</h1>
			<p>All muscles, arteries, bones, organs, etc. are held together by a Saran wrap kind of tissue called fascia. Developed in the late 1960's by John Barnes, Myofascial Release works by the manipulation of the fascia that connects and surrounds muscles. Because the fascia is body-wide, a tension or trauma in one part of the body can affect another part. The fascia responds to the trained touch to release the adverse effects of inflammation, tensions and trauma.</p>
			<br>
			<h1>Trigger Points</h1>
			<p>Muscle “knots” are sensitive spots in soft tissue, and too many of them is “myofascial pain syndrome.” They are usually described as micro-cramps, but the science is half-baked and their nature is controversial. Regardless, these sore spots are as common as pimples, often alarmingly fierce, and they seem to grow like weeds around injuries. They may be a major factor in back and neck pain, as a cause and/or complication.</p>
		</div>
    </div>
  </div>
</div>
						<article class="item">
							<header>
								<a><img src="images/pic04.jpg" alt="" /></a>
								<h3>Deep Tissue / Sports Massage</h3>
							</header>
							<p>A deep tissue massage is perfectly explained by its name. The pressure is adjusted to manipulate the deeper tissue layers in the body.</p>
						<ul class="actions">
						<li><a class="button big" class="btn btn-primary" data-toggle="modal" data-target="#deepTissue">More</a></li>
						</ul>
						</article>
<!-- Modal -->
<div class="modal fade" id="deepTissue" tabindex="-1" role="dialog" aria-labelledby="deepTissue" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-left: 10px;">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Deep Tissue Massage</h1>
			<p>Deep tissue massage is designed to relieve severe tension in the muscle and the connective tissue or fascia. This type of massage focuses on the muscles located below the surface of the top muscles. The term "deep tissue” is often misused to identify a massage that is performed with sustained deep pressure. Deep tissue massage is a separate category of massage therapy, used to treat particular musculoskeletal disorders and complaints and employs a dedicated set of techniques and strokes to achieve a measure of relief. It should not be confused with "deep pressure” massage, which is one that is performed with sustained strong, occasionally intense pressure throughout an entire full-body session. Deep tissue massage is applied to both the superficial and deep layers of muscles, fascia, and other structures.</p>
			<br>
			<h1>Sport Massage</h1>
			<p>This special form of massage is typically used before, during, and after athletic events to prepare the athlete for peak performance, to drain away fatigue, to relieve swelling, to reduce muscle tension, to promote flexibility and to prevent injuries. Depending on the needs of the athlete, a variety of techniques are used including classic Swedish strokes, cross-fiber friction, pressure-point work, and joint mobilization.</p>
		</div>
    </div>
  </div>
</div>

					</section>

				<!-- CTA -->
					<!--<section id="cta" class="main special">
						<h2>Treat Yourself Today</h2>
						<p>Appointments are filling up<br />
						Make your reservation today</p>
						<ul class="actions">
							<li><a class="button big" class="btn btn-primary" data-toggle="modal" data-target="#contactMe">Get Started!</a></li>
						</ul>
					</section>-->

				<!-- Main -->
				<!--
					<section id="main" class="main">
						<header>
							<h2>Lorem ipsum dolor</h2>
						</header>
						<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</section>
				-->

				<!-- Footer -->
					<footer id="footer">
						<!--<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>-->
						<p class="copyright">&copy; Breathtaking Release. <br>Design: <a href="http://thesedangflies-com.stackstaging.com/">John Watson Designs</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>