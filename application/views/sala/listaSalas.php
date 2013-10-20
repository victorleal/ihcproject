<div class="row">
	<h2>Salas</h2>
</div>
<div class="row">
	<div class="btn-group btn-group-sm">
		<button type="button" class="btn btn-default btn-group-sm" onclick="formCadSala();">
			<span class="glyphicon glyphicon-plus"></span>Nova Sala
		</button>
	</div>
	<br/><br/>
</div>
<div class="row">
	<table id="listagem" class="table table-striped">
		<!-- <tr> = linha -->
		<tr>
			<!-- <th> = celula de cabecalho -->
			<th>ID</th>
			<th>Nome</th>
			<th>Quantidade de lugares</th>
			<th>Ações</th>
		</tr>
		<?php foreach($salas as $sala){ ?>
		<tr id='<?php echo $sala["ID"]; ?>'>
			<!-- <td> = celula -->
			<td><?php echo $sala["ID"]; ?></td>
			<td><?php echo $sala["Nome"]; ?></td>
			<td><?php echo $sala["QuantidadeLugares"]; ?></td>
			<td>
				<a title="Alterar" class="glyphicon glyphicon-edit" href="#" onclick="formAltSala(<?php echo $sala["ID"]; ?>);"></a>&nbsp;
				<a title="Excluir" class="glyphicon glyphicon-remove" onclick="removerSala(<?php echo $sala["ID"]; ?>);" href="#"></a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>