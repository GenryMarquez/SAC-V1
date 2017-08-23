<?= $this->Form->create('User', ['url' => ['action' => 'login']]) ?>
	<div class="form-group has-feedback">
		<!--<input type="email" class="form-control" placeholder="Email">-->
		<?= $this->Form->input('username',['label' => false,'class'=>'form-control','placeholder'=>'User']) ?>
		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	</div>
	<div class="form-group has-feedback">
		<!--<input type="password" class="form-control" placeholder="Password">-->
		<?= $this->Form->input('password',['type'=>'password','label' => false,'class'=>'form-control','placeholder'=>'Password']) ?>
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	</div>
	<div class="row">
		<div class="col-xs-8">
			<div class="checkbox icheck">
				<label>
					<input type="checkbox"> Remember Me
				</label>
			</div>
		</div>
	<!-- /.col -->
		<div class="col-xs-4">
			<!--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>-->
			<?= $this->Form->button('Login',['class' => 'btn btn-primary btn-block btn-flat','div'=>false]) ?>
		</div>
	<!-- /.col -->
	</div>
<?= $this->Form->end() ?>

<div class="social-auth-links text-center">
  <p>- OR -</p>
  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
    Facebook</a>
  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
    Google+</a>
</div>
<!-- /.social-auth-links -->

<a href="#">I forgot my password</a><br>
<a href="register.html" class="text-center">Register a new membership</a>