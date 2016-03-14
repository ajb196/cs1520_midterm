<!-- contact component -->

<div class="col-lg-1"></div>

<div class="col-lg-10 paper shadow">

	<h2 class="secHead">Contact</h2>

	<?php if ($contact) {?> 
		<h2 class="secHead">Message Sent</h2>
	<?php } else { ?>

		<div class="row">

			<form action="index.php" method="POST">
				<div class="col-xs-0 col-sm-2 col-md-3"></div>

				<div class="col-xs-12 col-sm-8 col-md-6 paper">
					
					<div class="form-group">
						<label for="name">Name</label>
						<input id="name" class="form-control" type="text" name="name" size="30" required autocomplete="off">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input id="email" class="form-control" type="text" name="email" size="30" required autocomplete="off">
					</div>

					<div class="form-group">
						<label for="message">Message</label>
						<input id="message" class="form-control" type="memo" name="message" size="30" required autocomplete="off">
					</div>

					<center><button class="btn btn-primary" type="submit">Submit</button></center>

				</div><!--/form-group-->

				<div class="col-xs-0 col-sm-2 col-md-3"></div>
			</form>

		</div>

	<?php } ?>

</div>

<div class="col-lg-1"></div>