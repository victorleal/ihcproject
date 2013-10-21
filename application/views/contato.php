<div class="container">
	<div class="row">
		<ol class="breadcrumb">
			<li>
				<a href="index.php">Início</a>
			</li>
			<li>
				<a href="#">Contato</a>
			</li>
		</ol>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h2>Contato</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="well">
				<form class="form-horizontal" role="form">
					<fieldset>
						<!-- Nome -->
						<div class="row">
							<div class="form-group">
								<label for="txtNome" class="col-lg-2 control-label">Nome:</label>
								<div class="col-lg-10">
									<input id="txtNome" class="form-control" type="text" placeholder="Nome">
								</div>
							</div>
						</div>
						<!--E-mail -->
						<div class="row">
							<div class="form-group">
								<label for="txtEmail" class="col-lg-2 control-label">E-mail:</label>
								<div class="col-lg-10">
									<input id="txtEmail" class="form-control" type="text" placeholder="E-mail">
								</div>
							</div>
						</div>

						<!-- Mensagem -->
						<div class="row">
							<div class="form-group">
								<label for="txtMensagem" class="col-lg-2 control-label">Mensagem:</label>
								<div class="col-lg-10">
									<textarea id="txtMensagem" class="form-control" rows="3"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn btn-default">
											Enviar
										</button>
										<button onclick="window.location('index.php');" class="btn btn-default">
											Cancelar
										</button>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>

</div>