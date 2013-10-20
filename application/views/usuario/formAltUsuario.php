<div class="row">
	<div class="col-lg-12">
		<h2>Alteração de Usuário</h2>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="well">
			<?php echo form_open('usuario/save', 'class="form-horizontal"'); ?>
			<?php
			$data = array('type' => 'hidden', 'id' => 'id', 'name' => 'id', 'value' => $usuario['id']);
			?>
			<?php echo form_input($data); ?>
			<!-- TipoUsuario -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Tipo de Usuário:', 'tipoUsuario', $data); ?>
				<div class="col-lg-10">
					<?php
					$options = array();
					foreach ($tiposUsuario as $tipo) {
						$options[$tipo['id']] = $tipo['descricao'];
					}
					$data = array('id' => 'tipoUsuario', 'name' => 'tipoUsuario', 'class' => 'form-control');
					?>
					<?php echo form_dropdown('tipoUsuario', $options, $usuario['tipousuario'], 'id = "tipoUsuario" class="form-control"'); ?>
				</div>
			</div>

			<!-- Nome -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Nome:', 'nome', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'maxlength' => '50', 'value' => $usuario['nome']);
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>
			
			<!-- Matricula -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Matrícula/RA:', 'matricula', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'matricula', 'name' => 'matricula', 'class' => 'form-control', 'maxlength' => '6', 'value' => $usuario['matricula']);
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>
			
			<!-- Telefone -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Telefone:', 'telefone', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'telefone', 'name' => 'telefone', 'class' => 'form-control', 'maxlength' => '50', 'value' => $usuario['telefone']);
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>

			<!-- E-mail -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('E-mail:', 'email', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'email', 'name' => 'email', 'class' => 'form-control', 'value' => $usuario['email']);
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>

			<!-- Senha -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Senha:', 'senha', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('type' => 'password', 'id' => 'senha', 'name' => 'senha', 'class' => 'form-control', 'onfocus' => "$('#erro').hide()");
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>

			<!-- Confirma Senha -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Confirme a senha:', 'confirmaSenha', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('type' => 'password', 'id' => 'confirmaSenha', 'name' => 'confirmaSenha', 'class' => 'form-control', 'onfocus' => "$('#erro').hide()");
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>

			<div id="erro" class="row col-lg-10" style="display:none;">
				<p class="alert alert-danger">
					As senhas não conferem. Digite novamente!
				</p>
			</div>

			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="button" class="btn btn-default" onclick="alterarUsuario();">
						Alterar
					</button>
					<button type="button" onclick="enviar('usuarios');" class="btn btn-default">
						Cancelar
					</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
		<!-- /container -->
	</div>
</div>