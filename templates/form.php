<?php
\OCP\Util::addStyle('registration', 'style');
\OCP\Util::addScript('registration', 'form');
if ( \OCP\Util::getVersion()[0] >= 12 )
	\OCP\Util::addStyle('core', 'guest');
?><form action="<?php print_unescaped(\OC::$server->getURLGenerator()->linkToRoute('registration.register.createAccount', array('token'=>$_['token']))) ?>" method="post">
	<input type="hidden" name="requesttoken" value="<?php p($_['requesttoken']) ?>" />
	<fieldset>
		<div class="container" style="padding:20px 80px 50px 80px;font-size: 26px;">
			<div class="" style="padding-bottom: 35px;">

		<?php if ( !empty($_['errormsgs']) ) {?>
		<ul class="error">
			<?php foreach ( $_['errormsgs'] as $errormsg ) { ?>
			<li><?php p($errormsg); ?></li>
			<?php } ?>
		</ul>
		<?php } else { ?>
		<ul class="msg">
			<h3><li><?php p($l->t('Welcome, you can create your account below.'));?></h3></li>
		</ul>
		<?php } ?>
		<!-- <p class="grouptop">
			<input type="email" name="email" id="email" value="<?php p($_['email']); ?>" disabled />
			<label for="email" class="infield"><?php p($_['email']); ?></label>
			<img id="email-icon" class="svg" src="<?php print_unescaped(image_path('', 'actions/mail.svg')); ?>" alt=""/>
		</p>

		<p class="groupmiddle">
			<input type="text" name="username" id="username" value="<?php if (!empty($_['entered_data']['user'])) { p($_['entered_data']['user']); } ?>" placeholder="<?php p($l->t('Username')); ?>" />
			<label for="username" class="infield"><?php p($l->t('Username')); ?></label>
			<img id="username-icon" class="svg" src="<?php print_unescaped(image_path('', 'actions/user.svg')); ?>" alt=""/>
		</p>

		<p class="groupbottom">
			<input type="password" name="password" id="password" placeholder="<?php p($l->t('Password')); ?>"/>
			<label for="password" class="infield"><?php p($l->t( 'Password' )); ?></label>
			<img id="password-icon" class="svg" src="<?php print_unescaped(image_path('', 'actions/password.svg')); ?>" alt=""/>
			<?php if ( \OC::$server->getConfig()->getAppValue('core', 'vendor', '') === 'nextcloud' ) { ?>
			<input id="show" name="show" type="checkbox">
			<label id="show-password" style="display: inline;" for="show"></label>
			<?php } else { ?>
			<input type="checkbox" id="showadminpass" name="showadminpass">
			<label for="showadminpass"></label>
			<?php } ?>
		</p> -->
		<!-- <input type="submit" id="submit" value="<?php p($l->t('Create account')); ?>" /> -->

		<!-- <div class="container" style="padding:20px 80px 50px 80px;font-size: 26px;">
			<div class="" style="padding-bottom: 35px;">
				<h1>INPUT DATA</h1> -->
			</div>
			<div class="row" style="padding-bottom: 20px;">
				<div class="col-md-6" style="padding-right: 10px;">
					<input type="text" name="username" id="username" value="<?php if (!empty($_['entered_data']['user'])) { p($_['entered_data']['user']); } ?>" placeholder="<?php p($l->t('Username')); ?>" class="form-control" style="font-size: 26px;" required autofocus/>
				</div>				
				<div class="col-md-6" style="padding-left: 10px;">
					<input type="email" placeholder="<?php p($l->t('Email')); ?>" name="email" id="email" value="<?php p($_['email']); ?>" class="form-control" style="font-size: 26px;" required/>
				</div>
			</div>
			<div class="row" style="padding-bottom: 30px;">
				<div class="col-md-6" style="padding-right: 10px;">
					<!-- <input type="text" placeholder="phone number" name="phone" id="phone"class="form-control" style="font-size: 26px;" required> -->
					<input type="password" placeholder="<?php p($l->t('Password')); ?>" name="password" id="password" class="form-control" style="font-size: 26px;" required/>
				</div>
				<div class="col-md-6" style="padding-left: 10px;">
					<!-- <div class="col-md-10"> -->
						<input type="password" placeholder="<?php p($l->t('Confirm Password')); ?>" name="confirm_password" id="confirm_password" class="form-control" style="font-size: 26px;" required/>
					<!-- </div> -->
					<!-- <div class="col-md-2">
						<?php if ( \OC::$server->getConfig()->getAppValue('core', 'vendor', '') === 'nextcloud' ) { ?>
							<input id="show" name="show" type="checkbox">
							<label id="show-password" style="display: inline;" for="show"></label>
						<?php } else { ?>
							<input type="checkbox" id="showadminpass" name="showadminpass">
							<label for="showadminpass"></label>
						<?php }?>
					</div> -->
				</div>				
				
			</div>
			<input type="submit" id="submit" value="<?php p($l->t('Create account')); ?>" />
		</div>
	</fieldset>
</form>
