function trocaClasse(id) {
	$anterior = $("#menu").find(".active");
	$anterior.removeClass();
	$("#link_" + id).parent().addClass("active");
}

function enviar(id) {
	if (id == "sobre") {
		url = "general/sobre";
	} else if (id == "contato") {
		url = "general/contato";
	} else {
		var url = id;
	}
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
	var matricula = $("#matricula").val();
	var telefone = $("#telefone").val();
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
					senha : senha,
					matricula : matricula,
					telefone : telefone
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
	var matricula = $("#matricula").val();
	var telefone = $("#telefone").val();
	console.log(matricula);
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
					senha : senha,
					matricula : matricula,
					telefone : telefone
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
	myConfirm("Deseja excluir este usuário?", function(e) {
		if (e) {
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
	});
}

function formCadSala() {
	$.ajax({
		url : "salas/formCadSala",
		type : "POST",
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
		}
	});
}

function cadastrarSala() {
	var nome = $("#nome").val();
	var qtdeLugares = $("#qtdeLugares").val();
	$.ajax({
		url : "salas/save",
		type : "POST",
		data : {
			nome : nome,
			qtdeLugares : qtdeLugares
		},
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
		}
	});

}

function formAltSala(id) {
	$.ajax({
		url : "salas/formAltSala",
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

function alterarSala() {
	var id = $("#id").val();
	var nome = $("#nome").val();
	var qtdeLugares = $("#qtdeLugares").val();
	$.ajax({
		url : "salas/update",
		type : "POST",
		data : {
			id : id,
			nome : nome,
			qtdeLugares : qtdeLugares
		},
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
		}
	});

}

function removerSala(id) {
	myConfirm("Deseja excluir esta sala?", function(e) {
		if (e) {
			$.ajax({
				url : "salas/delete",
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
	});
}

function formCadReserva() {
	$.ajax({
		url : "reservas/formCadReserva",
		type : "POST",
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
		}
	});
}

function cadastrarReserva() {
	var responsavel = $("#usuario").val();
	var sala = $("#sala option:selected").val();
	var evento = $("#evento").val();
	var data = $("#data").val();
	var inicio = $("#inicio").val();
	var fim = $("#fim").val();
	$.ajax({
		url : "reservas/save",
		type : "POST",
		data : {
			responsavel : responsavel,
			sala : sala,
			evento: evento,
			data: data,
			inicio: inicio,
			fim: fim
		},
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
		}
	});

}

function formAltSala(id) {
	$.ajax({
		url : "salas/formAltSala",
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

function alterarSala() {
	var id = $("#id").val();
	var nome = $("#nome").val();
	var qtdeLugares = $("#qtdeLugares").val();
	$.ajax({
		url : "salas/update",
		type : "POST",
		data : {
			id : id,
			nome : nome,
			qtdeLugares : qtdeLugares
		},
		dataType : "html",
		success : function(html) {
			$("#conteudo").html(html);
		}
	});

}

function removerSala(id) {
	myConfirm("Deseja excluir esta sala?", function(e) {
		if (e) {
			$.ajax({
				url : "salas/delete",
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
	});
}

function myConfirm(msg, fn) {
	var options = {
		buttons : {
			confirm : {
				text : 'Sim',
				className : 'blue',
				action : function(e) {
					fn(true);
					Apprise('close');
				}
			},
			cancel : {
				text : 'Não',
				className : 'red',
				action : function(e) {
					fn(false);
					Apprise('close');
				}
			}
		}
	};

	Apprise(msg, options);
}
