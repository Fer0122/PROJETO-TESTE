<h1>Novo Cliente</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="telefone" name="telefone" class="form-control">
	</div> 
	<div class="mb-3">
		<label>Endereço</label>
		<input type="endereço" name="endereço" class="form-control">
	</div>
	<div class="mb-3">	
		<button type="submit" class="btn btn-primary">Enviar</button>	
	</div>
</form> 