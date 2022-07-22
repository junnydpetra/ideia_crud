		<div class="container-fluid">
			<div class="row">
				<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>Menu</span>
						<a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
							<span data-feather="plus-circle"></span>
						</a>
					</h6>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="">
							<span data-feather="file"></span>
							Atividades
							</a>
						</li>
					</ul>
				</div>
				</nav>

				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h2 class="h2">Lista</h2>
						<div class="btn-toolbar mb-2 mb-md-0">
							<div class="btn-group mr-2">
								<a href="<?= base_url() ?>atividades/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Projeto</a>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead align="center">
								<tr>
									<th>ID</th>
									<th>Data de Cadastro</th>
									<th>Descrição</th>
									<th>ID de Projeto</th>
									<th>Opções</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($atividades as $atividade) : ?>
                  				  	<tr>
										<td><?= $atividade['id'] ?> </td>
										<td><?= $atividade['dataCadastro'] ?> </td>
										<td><?= $atividade['descricao'] ?> </td>
										<td><?= $atividade['idProjeto'] ?> </td>
										<td align="center">
											<a href="<?= base_url() ?>atividades/edit/<?= $atividade['id'] ?>" class="btn btn-warning btn-sm">
												<i class="fas fa-pencil-alt"></i>
												Editar
											</a>
											<a href="<?= base_url() ?>atividades/delete/<?= $atividade['id'] ?>" class="btn btn-danger btn-sm">
												<i class="fas fa-trash-alt"></i>
												Excluir
											</a>
										</td>
									</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>

				</main>
			</div>
		</div>

		
	</body>
</html>




