<div class="row">
	<h2>Usuários</h2>
</div>
<div class="row">
	<div class="btn-group btn-group-sm">
		<button type="button" class="btn btn-default btn-group-sm" onclick="formCadUsuario();">
			<span class="glyphicon glyphicon-plus"></span>Novo Usuário
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
			<th>E-mail</th>
			<th>Ações</th>
		</tr>
		<?php foreach($usuarios as $usuario){ ?>
		<tr id='<?php echo $usuario["id"]; ?>'>
			<!-- <td> = celula -->
			<td><?php echo $usuario["id"]; ?></td>
			<td><?php echo $usuario["nome"]; ?></td>
			<td><?php echo $usuario["email"]; ?></td>
			<td>
				<a title="Alterar" class="glyphicon glyphicon-edit" href="#" onclick="formAltUsuario(<?php echo $usuario["id"]; ?>);"></a>&nbsp;
				<a title="Excluir" class="glyphicon glyphicon-remove" onclick="removerUsuario(<?php echo $usuario["id"]; ?>);" href="#"></a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>