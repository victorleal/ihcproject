<div class="row">
	<div class="col-lg-12"><h2>Solicitação de Reserva</h2></div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="well">
			<?php echo form_open('reserva/save', 'class="form-horizontal"'); ?>
			<?php $data = array('type' => 'hidden', 'id' => 'usuario', 'name' => 'usuario', 'value' => $id);
			?>
			<?php echo form_input($data); ?>
			<!-- TipoUsuario -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Responsável:', 'responsavel', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'responsavel', 'name' => 'responsavel', 'class' => 'form-control', 'value' => $usuario, 'disabled' => 'true');
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>

			<!-- Nome -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Sala:', 'sala', $data); ?>
				<div class="col-lg-10">
					<?php
					$options = array();
					foreach ($salas as $sala) {
						$options[$sala['ID']] = $sala['Nome'];
					}
					?>
					<?php echo form_dropdown('sala', $options, null, 'id = "sala" class="form-control"'); ?>
				</div>
			</div>
			
			<!-- Matricula -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Evento:', 'evento', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'evento', 'name' => 'evento', 'class' => 'form-control', 'maxlength' => '500');
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>
			
			<!-- Telefone -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Data:', 'data', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'data', 'name' => 'data', 'class' => 'form-control', 'maxlength' => '10');
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>

			<!-- E-mail -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Início:', 'inicio', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'inicio', 'name' => 'inicio', 'class' => 'form-control');
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>
			
			<!-- E-mail -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Fim:', 'fim', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'fim', 'name' => 'fim', 'class' => 'form-control');
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
					<button type="button" class="btn btn-default" onclick="cadastrarReserva();">
						Cadastrar
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