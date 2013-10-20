function trocaClasse(id){
	$anterior = $("#menu").find(".active");
	$anterior.removeClass();
	$("#link_" + id).parent().addClass("active");
}

function sobre(){
	$("#conteudo").load("sobre.php");
}

function contato(){
	$("#conteudo").load("contato.php");
}

function listaReservas(){
	$("#conteudo").load("reserva/listaReservas.php");
	trocaClasse("reserva");
}

function listaSalas(){
	$("#conteudo").load("sala/listaSalas.php");
	trocaClasse("sala");
}

function listaUsuarios(){
	$("#conteudo").load("usuario/listaUsuarios.php");
	trocaClasse("usuario");
}

function solicitarReserva(){
	$("#conteudo").load("reserva/solicitarReserva.php");
	trocaClasse('reserva');
}

function alterarReserva(){
	$("#conteudo").load("reserva/alterarReserva.php");
	trocaClasse('reserva');
}

function removeRegistro(id){
	var r = confirm("Confirma exclusão?");
	if (r==true)
	  {
	  $("#listagem tr#"+id).remove();
	  }
}

function cadastrarSala(){
	$("#conteudo").load("sala/cadastroSala.php");
	trocaClasse('sala');
}

function cadastrarUsuario(){
	$("#conteudo").load("usuario/formCadastroUsuario.php");
	trocaClasse('usuario');
}

function alterarSala(){
	$("#conteudo").load("sala/alterarCadastroSala.php");
	trocaClasse('sala');
}

function alterarUsuario(){
	$("#conteudo").load("usuario/formAlterarCadastroUsuario.php");
	trocaClasse('usuario');
}

function vai(){

	$.post('save', {
		'nome' : $("#nome").val(),
		'qtdeLugares' : $("#qtdeLugares").val()
	},
	// when the Web server responds to the request
	function(result) {
		// clear any message that may have already been written
		alert('done');
	}); 

}
