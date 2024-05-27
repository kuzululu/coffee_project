<section id="contact" class="parallax-window" data-parallax="scroll" data-image-src="img/antique-cafe-bg-04.jpg">
	
<div class="container">
	<div class="row">
			<div class="col-md-12 text-center p-4 title">
				<h1 class="fw-bolder text-uppercase text-success" data-aos="fade-up" data-aos-duration="2000">Contact</h1>
			</div>
		</div> <!-- end of row -->

		<div class="row mt-5">
			<div class="col-md-6 msg-contact p-0">
				<?php require_once "template-parts/map.php"; ?>
				<h5 class="mt-3 ms-3 text-center">
					<span class="fw-bolder text-uppercase">tel:</span> <a class="text-decoration-none text-dark" href="tel: 09452869822">09452869822</a> | 
					<span class="fw-bolder text-uppercase">Email:</span> email@address.com
				</h5>
			</div> <!-- end of column -->

			<div class="col-md-6 contact-msg text-light">
				<form class="row needs-validation" method="POST" novalidate="" action="<?php htmlspecialchars("PHP_SELF"); ?>">

				<div class="col-md-12 mb-3">
					<label>Name:</label>
					<div class="input-group">
						<span class="input-group-text"><i class="fas fa-user text-primary"></i></span>
						<input type="text" name="name" class="form-control" placeholder="Name" required="">
					</div>
				</div>

				<div class="col-md-12 mb-3">
					<label>Email:</label>
					<div class="input-group">
						<span class="input-group-text"><i class="fas fa-envelope-square text-primary"></i></span>
						<input type="email" name="email" class="form-control" placeholder="Email" required="">
					</div>
				</div>

				<div class="col-md-12 mb-3">
					<label>Message</label>
					<textarea class="form-control textarea" rows="9" name="message" required=""></textarea>
				</div>

				<div class="col-md-12 mb-3 text-end">
					<input type="submit" name="btnSend" class="btn btn-lg btn-primary" value="Send">
				</div>
					
				</form>
			</div> <!-- end of column -->
		</div> <!-- end of row -->
</div>


</section>

<script type="text/javascript">
	$(document).ready(function(){
		$("input").blur(function(){
				$(this).css("color","white");
		});

		$("input").on("focus",function(){
			$(this).css("color", "black");
		});

		$(".textarea").on("blur", function(){
			$(this).css("color", "white");
		});

		$(".textarea").focus(function(){
			$(this).css("color", "black");
		});
	});
</script>