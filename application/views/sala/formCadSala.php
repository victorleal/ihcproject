<div class="row">
	<h2>Cadastro de Sala</h2>
</div>
<?php echo form_open('sala/save', 'class="form-horizontal"'); ?>
<!-- Nome -->
<div class="form-group">
	<?php
		$data = array(
			'class' => 'col-lg-2 control-label',
		);
	?>
	<?php echo form_label('Nome Sala/Lab:', 'nome', $data); ?>
	<div class="col-lg-10">
		<?php
			$data = array(
				'id' => 'nome',
				'name' => 'nome',
				'class' => 'form-control',
				'placeholder' => 'Nome Sala/Lab',
				'maxlength' => '50'
			);
		?>
	    <?php echo form_input($data); ?>
    </div>
</div>

<!-- Qtd Lugares -->
<!-- Nome -->
<div class="form-group">
	<?php
		$data = array(
			'class' => 'col-lg-2 control-label',
		);
	?>
	<?php echo form_label('Quantidade Lugares:', 'qtdeLugares', $data); ?>
	<div class="col-lg-10">
		<?php
			$data = array(
				'id' => 'qtdeLugares',
				'name' => 'qtdeLugares',
				'class' => 'form-control',
				'placeholder' => 'Quantidade Lugares',
				'maxlength' => '5'
			);
		?>
	    <?php echo form_input($data); ?>
    </div>
</div>
        <!-- Implementar depois Adicionar Objetos 
        <div class="form-group">
          <label for="txtAddObjeto" class="col-lg-2 control-label">Adicionar Objetos:</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="txtAddObjeto" name="txtAddObjeto" placeholder="Adicionar Obejtos" maxlength="30">
            </div>
          </div>-->


        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="button" class="btn btn-default" onclick="vai();">Cadastrar</button>
			<button type="button" onclick="listaSalas();" class="btn btn-default">Cancelar</button>
          </div>
        </div>
      </form>

    </div> <!-- /container -->