<?php 
	echo form_open('login/validate', 'class="form-signin"');
	echo '<h2 class="form-signin-heading">Login</h2>';
	$data = array(
		'name'        => 'usuario',
		'class' => 'form-control',
		'placeholder' => 'Usuário'
	);
	echo form_input($data);
	
	$data = array(
		'name' => 'senha',
		'class' => 'form-control',
		'placeholder' => 'Senha'
	);
	echo form_password($data);
?>
<?php 
	if(isset($error) && $error) {
?>
	<p class="alert alert-danger">
		E-mail e/ou senha informados incorretamente. Por favor, tente novamente!
	</p>
<?php } ?>

<?php echo form_submit('login', 'Acessar', 'class="btn btn-lg btn-primary btn-block"'); ?>

<?php echo form_close(); ?>
