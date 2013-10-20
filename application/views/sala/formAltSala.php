<div class="row">
	<div class="col-lg-12">
		<h2>Alteração de Sala</h2>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="well">
			<?php echo form_open('sala/save', 'class="form-horizontal"'); ?>
			<?php
			$data = array('id' => 'id', 'name' => 'id', 'type' => 'hidden', 'value' => $sala['ID']);
			?>
			<?php echo form_input($data); ?>
			<!-- Nome -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Nome Sala/Lab:', 'nome', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome Sala/Lab', 'maxlength' => '50', 'value' => $sala['Nome']);
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>

			<!-- Qtd Lugares -->
			<!-- Nome -->
			<div class="form-group">
				<?php
				$data = array('class' => 'col-lg-2 control-label', );
				?>
				<?php echo form_label('Quantidade Lugares:', 'qtdeLugares', $data); ?>
				<div class="col-lg-10">
					<?php
					$data = array('id' => 'qtdeLugares', 'name' => 'qtdeLugares', 'class' => 'form-control', 'placeholder' => 'Quantidade Lugares', 'maxlength' => '5', 'value' => $sala['QuantidadeLugares']);
					?>
					<?php echo form_input($data); ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="button" class="btn btn-default" onclick="alterarSala();">
						Alterar
					</button>
					<button type="button" onclick="enviar('salas');" class="btn btn-default">
						Cancelar
					</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
		<!-- /container -->
	</div>
</div>