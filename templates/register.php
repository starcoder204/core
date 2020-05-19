<?php
\OCP\Util::addStyle('registration', 'style');
if ( \OCP\Util::getVersion()[0] >= 12 )
	\OCP\Util::addStyle('core', 'guest');
if ($_['entered']): ?>
	<?php if (empty($_['errormsg'])): ?>
		<ul class="success">
			<li>
			<h3><?php p($l->t('Thank you for registering, you should receive a verification link in a few minutes.')); ?>
			</h3></li>
		</ul>
	<?php else: ?>
		<form action="<?php print_unescaped(\OC::$server->getURLGenerator()->linkToRoute('registration.register.validateEmail')) ?>" method="post">
			<fieldset>
				<ul class="error">
					<li><?php p($_['errormsg']); ?></li>
				</ul>
				<p class="groupofone">
					<input type="email" name="email" id="email" placeholder="<?php p($l->t('Email')); ?>" value="" required autofocus />
					<label for="email" class="infield"><?php p($l->t( 'Email' )); ?></label>
					<img id="email-icon" class="svg" src="<?php print_unescaped(image_path('', 'actions/mail.svg')); ?>" alt=""/>
				</p>
				<input type="hidden" name="requesttoken" value="<?php p($_['requesttoken']); ?>" />
				<input type="submit" id="submit" value="<?php p($l->t('Request verification link')); ?>" />
			</fieldset>
		</form>
	<?php endif; ?>
<?php else: ?>
	<form id="register-from" action="<?php print_unescaped(\OC::$server->getURLGenerator()->linkToRoute('registration.register.validateEmail')) ?>" method="post">
		<fieldset>
			<div class="container" style="padding:20px 80px 50px 80px;font-size: 26px;">
				<div class="" style="padding-bottom: 35px;">

					<?php if ($_['errormsg']): ?>
						<!-- <ul class="error">
							<li><?php p($_['errormsg']); ?></li>
							<li><?php p($l->t('Please re-enter a valid email address')); ?></li>
						</ul> -->
						<h3><?php p($l->t('Please re-enter a valid email address')); ?></h3>
					<?php else: ?>
					<!-- <ul class="msg">
							<li><h3><?php p($l->t('You will receive an email with a verification link')); ?></h3></li>
						</ul> -->
						<h3><?php p($l->t('You will receive an email with a verification link')); ?></h3>
					<?php endif; ?>

				</div>

				<div class="row" style="padding-bottom: 30px;">
					<div class="col-md-3" style="padding-right: 10px;text-align: right;">
						<label for="email" class="infield"><?php p($l->t('Email')); ?>:</label>
					</div>
					<div class="col-md-7" style="padding-right: 10px;">
						<input type="email" placeholder="<?php p($l->t('Email')); ?>" name="email" class="form-control" style="font-size: 26px;" required autofocus/>
					</div>				
					<div class="col-md-7 offset-md-3" style="padding-top: 30px;">
						<input type="hidden" name="requesttoken" value="<?php p($_['requesttoken']); ?>" />
						<input type="submit" id="submit" value="<?php p($l->t('Request verification link')); ?>" />
					</div>
				</div>
			</div>

			<!-- <p class="groupofone">
			<input type="email" name="email" id="email" placeholder="<?php p($l->t('Email')); ?>" value="" required autofocus />
				<label for="email" class="infield"><?php p($l->t('Email')); ?></label>
				<img id="email-icon" class="svg" src="<?php print_unescaped(image_path('', 'actions/mail.svg')); ?>" alt=""/>
			</p>
			<div class="container" style="padding:20px 80px 50px 80px;font-size: 26px;">
				<div class="" style="padding-bottom: 35px;">
					<h1>INPUT DATA</h1>
				</div>
				<div class="row" style="padding-bottom: 20px;">
					<div class="col-md-6" style="padding-right: 10px;">
						<input type="text" placeholder="name" name="name" class="form-control" style="font-size: 26px;" required />
					</div>				
					<div class="col-md-6" style="padding-left: 10px;">
						<input type="text" placeholder="<?php p($l->t('Email')); ?>" name="email" class="form-control" style="font-size: 26px;" required/>
					</div>
				</div>
				<div class="row" style="padding-bottom: 30px;">
					<div class="col-md-6" style="padding-right: 10px;">
						<input type="text" placeholder="password" name="password" class="form-control" style="font-size: 26px;" required/>
					</div>				
					<div class="col-md-6" style="padding-left: 10px;">
						<input type="text" placeholder="confirm password" name="confirm_password" class="form-control" style="font-size: 26px;" required>
					</div>
				</div>
				<input type="hidden" name="requesttoken" value="<?php p($_['requesttoken']); ?>" />
				<input type="submit" id="submit" value="<?php p($l->t('Request verification link')); ?>" />
			</div> -->
		</fieldset>
	</form>
<?php endif; ?>
