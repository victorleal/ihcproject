function trocaClasse(id) {
	$anterior = $("#menu").find(".active");
	$anterior.removeClass();
	$("#link_" + id).parent().addClass("active");
}

function enviar(id) {
	var url = id;
	$.ajax({
		url : url,
		type : "POST",
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
			trocaClasse(id);
		}
	});
}

function formCadUsuario() {
	$.ajax({
		url : "usuarios/formCadUsuario",
		type : "POST",
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
		}
	});
}

function formAltUsuario(id) {
	$.ajax({
		url : "usuarios/formAltUsuario",
		type : "POST",
		data : {
			id : id
		},
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
		}
	});
}

function cadastrarUsuario() {
	var tipoUsuario = $("#tipoUsuario option:selected").val();
	var nome = $("#nome").val();
	var email = $("#email").val();
	var senha = $("#senha").val();
	var confirmaSenha = $("#confirmaSenha").val();
	if (senha != '' || confirmaSenha != '') {
		if (senha != confirmaSenha) {
			$("#erro").show();
			$("#senha").addClass("has-error");
			$("#confirmaSenha").addClass("has-error");
		} else {
			$.ajax({
				url : "/reservaSala/usuarios/save",
				type : "POST",
				data : {
					tipoUsuario : tipoUsuario,
					nome : nome,
					email : email,
					senha : senha
				},
				dataType : "html",
				success : function(html) {
					$("#conteudo").html(html);
				}
			});
		}
	} else {
		$("#erro").show();
		$("#senha").addClass("has-error");
		$("#confirmaSenha").addClass("has-error");
	}
}

function alterarUsuario() {
	var id = $("#id").val();
	var tipoUsuario = $("#tipoUsuario option:selected").val();
	var nome = $("#nome").val();
	var email = $("#email").val();
	var senha = $("#senha").val();
	var confirmaSenha = $("#confirmaSenha").val();
	if (senha != '' || confirmaSenha != '') {
		if (senha != confirmaSenha) {
			$("#erro").show();
			$("#senha").addClass("has-error");
			$("#confirmaSenha").addClass("has-error");
		} else {
			$.ajax({
				url : "usuarios/update",
				type : "POST",
				data : {
					id : id,
					tipoUsuario : tipoUsuario,
					nome : nome,
					email : email,
					senha : senha
				},
				dataType : "html",
				success : function(html) {
					$("#conteudo").html(html);
				}
			});
		}
	} else {
		$("#erro").show();
		$("#senha").addClass("has-error");
		$("#confirmaSenha").addClass("has-error");
	}
}

function removerUsuario(id) {
	$.ajax({
		url : "usuarios/delete",
		type : "POST",
		data : {
			id : id
		},
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
		}
	});
}

function sobre() {
	$("#conteudo").load("sobre.php");
}

function contato() {
	$("#conteudo").load("contato.php");
}

function listaReservas() {
	$("#conteudo").load("reserva/listaReservas.php");
	trocaClasse("reserva");
}

function listaSalas() {
	$("#conteudo").load("sala/listaSalas.php");
	trocaClasse("sala");
}

function listaUsuarios() {
	$("#conteudo").load("usuario/listaUsuarios.php");
	trocaClasse("usuario");
}

function solicitarReserva() {
	$("#conteudo").load("reserva/solicitarReserva.php");
	trocaClasse('reserva');
}

function alterarReserva() {
	$("#conteudo").load("reserva/alterarReserva.php");
	trocaClasse('reserva');
}

function removeRegistro(id) {
	var r = confirm("Confirma exclusão?");
	if (r == true) {
		$("#listagem tr#" + id).remove();
	}
}

function cadastrarSala() {
	$("#conteudo").load("sala/cadastroSala.php");
	trocaClasse('sala');
}

function alterarSala() {
	$("#conteudo").load("sala/alterarCadastroSala.php");
	trocaClasse('sala');
}

function vai() {

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
