<div class="row">
	<h2>Reservas</h2>
</div>
<div class="row">
	<div class="btn-group btn-group-sm">
		<button type="button" class="btn btn-default btn-group-sm" onclick="formCadReserva();">
			<span class="glyphicon glyphicon-plus"></span>Nova Reserva
		</button>
	</div>
	<br/><br/>
</div>
<div class="row">
	<table id="listagem" class="table table-striped">
		<!-- <tr> = linha -->
		<tr>
			<!-- <th> = celula de cabecalho -->
			<th>Responsável</th>
			<th>Sala</th>
			<th>Evento</th>
			<th>Data</th>
			<th>Horário Início</th>
			<th>Horário Fim</th>
			<th>Ações</th>
		</tr>
		<?php 
		if(count($reservas) > 0){
		foreach($reservas as $reserva){ ?>
		<tr id='<?php echo $reserva["id"]; ?>'>
			<!-- <td> = celula -->
			<td><?php echo $reserva["usuario"]; ?></td>
			<td><?php echo $reserva["sala"]; ?></td>
			<td><?php echo $reserva["evento"]; ?></td>
			<td><?php echo $reserva["data"]; ?></td>
			<td><?php echo $reserva["inicio"]; ?></td>
			<td><?php echo $reserva["fim"]; ?></td>
			<td>
				<a title="Alterar" class="glyphicon glyphicon-edit" href="#" onclick="formAltReserva(<?php echo $reserva["id"]; ?>);"></a>&nbsp;
				<a title="Excluir" class="glyphicon glyphicon-remove" onclick="removerReserva(<?php echo $reserva["id"]; ?>);" href="#"></a>
			</td>
		</tr>
		<?php } ?>
		<?php } else { ?>
		<tr colspan="7"><td>Nenhuma reserva encontrada</td></tr>
		<?php } ?>
	</table>
</div>