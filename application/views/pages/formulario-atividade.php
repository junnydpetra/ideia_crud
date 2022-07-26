<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12">
				
			<?php if(isset($atividade)) : ?>
				<form action="<?= base_url() ?>atividades/update/<?= $atividade['id'] ?>" method="post">
			<?php else : ?>
				<form action="<?= base_url() ?>atividades/cadastro" method="post">
			<?php endif; ?>
				
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="dataCadastro">Data de Cadastro</label>
							<input type="date" class="form-control" name="dataCadastro" id="dataCadastro" placeholder="Data de Cadastro" required value="<?= isset($atividade) ? $atividade["dataCadastro"] : "" ?>"></input>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Descrição</label>
							<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição" required value="<?= isset($atividade) ? $atividade["descricao"] : "" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="category">ID de Projeto</label>
							<input type="text" class="form-control" name="idProjeto" id="idProjeto" placeholder="ID do Projeto" required value="<?= isset($atividade) ? $atividade["idProjeto"] : "" ?>">
						</div>
					</div>
  
					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url() ?>atividades" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
