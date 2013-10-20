<div class="row">
	<h2>Cadastro de Usuário</h2>
</div>
<?php echo form_open('usuario/save', 'class="form-horizontal"'); ?>
<!-- TipoUsuario -->
<div class="form-group">
	<?php
		$data = array(
			'class' => 'col-lg-2 control-label',
		);
	?>
	<?php echo form_label('Tipo de Usuário:', 'tipoUsuario', $data); ?>
	<div class="col-lg-10">
		<?php
		$options = array();
		foreach($tiposUsuario as $tipo){
			$options[$tipo['id']] = $tipo['descricao']; 
		}
			$data = array(
				'id' => 'tipoUsuario',
				'name' => 'tipoUsuario',
				'class' => 'form-control'
			);
		?>
	    <?php echo form_dropdown('tipoUsuario', $options, null, 'id = tipoUsuario'); ?>
    </div>
</div>

<!-- Nome -->
<div class="form-group">
	<?php
		$data = array(
			'class' => 'col-lg-2 control-label',
		);
	?>
	<?php echo form_label('Nome:', 'nome', $data); ?>
	<div class="col-lg-10">
		<?php
			$data = array(
				'id' => 'nome',
				'name' => 'nome',
				'class' => 'form-control',
				'maxlength' => '50'
			);
		?>
	    <?php echo form_input($data); ?>
    </div>
</div>

<!-- E-mail -->
<div class="form-group">
	<?php
		$data = array(
			'class' => 'col-lg-2 control-label',
		);
	?>
	<?php echo form_label('E-mail:', 'email', $data); ?>
	<div class="col-lg-10">
		<?php
			$data = array(
				'id' => 'email',
				'name' => 'email',
				'class' => 'form-control'
			);
		?>
	    <?php echo form_input($data); ?>
    </div>
</div>

<!-- Senha -->
<div class="form-group">
	<?php
		$data = array(
			'class' => 'col-lg-2 control-label',
		);
	?>
	<?php echo form_label('Senha:', 'senha', $data); ?>
	<div class="col-lg-10">
		<?php
			$data = array(
				'type' => 'password',
				'id' => 'senha',
				'name' => 'senha',
				'class' => 'form-control',
				'onfocus' => "$('#erro').hide()"
			);
		?>
	    <?php echo form_input($data); ?>
    </div>
</div>

<!-- Confirma Senha -->
<div class="form-group">
	<?php
		$data = array(
			'class' => 'col-lg-2 control-label',
		);
	?>
	<?php echo form_label('Confirme a senha:', 'confirmaSenha', $data); ?>
	<div class="col-lg-10">
		<?php
			$data = array(
				'type' => 'password',
				'id' => 'confirmaSenha',
				'name' => 'confirmaSenha',
				'class' => 'form-control',
				'onfocus' => "$('#erro').hide()"
			);
		?>
	    <?php echo form_input($data); ?>
    </div>
</div>

<div id="erro" class="row col-lg-10" style="display:none;">
	<p class="alert alert-danger">As senhas não conferem. Digite novamente!</p>
</div>

        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="button" class="btn btn-default" onclick="cadastrarUsuario();">Cadastrar</button>
			<button type="button" onclick="listaUsuarios();" class="btn btn-default">Cancelar</button>
          </div>
        </div>
      </form>

    </div> <!-- /container -->