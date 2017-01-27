<section class="section-account">
	<div class="img-backdrop" style="background-image: url('<?php echo base_url();?>assets/backend/img/img16.jpg')"></div>
	<div class="spacer"></div>
	<div class="card contain-sm style-transparent">
		<div class="card-body">
			<div class="row">
			<div class="col-sm-2"></div>
			
				<div class="col-sm-8">
					<br/>
					<span class="text-lg text-bold text-primary">Login</span>
					<br/><br/>

					<form class="form floating-label" accept-charset="utf-8" method="post" >
						</br>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
							<label for="username">Email</label>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" name="password" required >
							<label for="password">Password</label>
							<p class="help-block">Forgot?</a></p>	
						</div>
						<div class="form-group">
							
							<div class="checkbox checkbox-inline checkbox-styled">
										<label>
											<input type="checkbox" name="remember"> <span>Show Password</span>
										</label>
								</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-xs-6 text-left">
								
								<p>
                                    <br/>
                                    <a href="<?php echo base_url() ?>register"><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a>
                                </p>
							</div>
							<div class="col-xs-6 text-right">
								<button class="btn btn-primary btn-raised" type="submit">Login</button>
							</div>
						</div>
					</form>
				</div>

				<div class="col-sm-2"></div>


			</div>
		</div>
	</div>
</section>