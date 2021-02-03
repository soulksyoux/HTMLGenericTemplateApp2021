<?php
define("TITLE", "Template CRPG");
define("ACTIVE_PAGE", "index");
define("CURRENT_PAGE", "Home");
require_once("includes/master.php");
?>

<!-- paginas -->

<div  class="main" id="pagina">

	<div class="custom-container mb-4 mt-4">


			<div class="menu-direito-display-button">
			<a href="#" class="btn btn-sm btn-info" style="background-color: #FFFFFF; border: 1px solid #064685; color: #064685">Abrir Menu</a>

			</div>

		<div class="table-container mt-5">
		<table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th data-visible="false">Id</th>
						<th class="tipo-col">Tipo</th>
						<th class="data-col">Data</th>
						<th class="atividade-col">Atividade</th>
						<th class="hora-inicio-col">Hora Inicio</th>
						<th class="hora-fim-col">Hora Fim</th>
						<th class="duracao-col">Dur.</th>
						<th class="destinatario-col">Destinatário / Utente</th>
						<th class="financiador-col">Financiador</th>
						<th class="projeto-col">Projeto</th>
						<th class="rubrica-col">Rúbrica</th>
						<th class="centro-responsabilidade-col">Centro de responsabilidade</th>
						<th class="accoes-col">Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Registo manual</td>
						<td>21.01.04</td>
						<td>Apoio a colaboradores com dificuldade de acesso ao VPN devido a password expirada</td>
						<td>09:00</td>
						<td>09:30</td>
						<td>0,5</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>
						
						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
						
					</tr>
					<tr>
						<td>2</td>
						<td>Registo manual</td>
						<td>21.01.04</td>
						<td>Impressora com papel encravado no piso 2</td>
						<td>09:30</td>
						<td>10:30</td>
						<td>1</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Registo manual</td>
						<td>21.01.04</td>
						<td>Acompanhamento do técnico da Canon para instalação do Uniflow no servidor crpgprt01, e validação de conformidade nas impressoras após instalação de todo o software e reinicio das máquinas, assim como validação de certificado, nos postos dos colaboradores nos browser chrome ie firefox e edge.</td>
						<td>10:30</td>
						<td>11:30</td>
						<td>1</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Registo manual</td>
						<td>21.01.05</td>
						<td>Mudança de toner na impressora X</td>
						<td>09:00</td>
						<td>09:30</td>
						<td>0,5</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Registo manual</td>
						<td>21.01.06</td>
						<td>Apoio a colaboradora Y no acesso ao VPN</td>
						<td>16:00</td>
						<td>16:30</td>
						<td>0,5</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>6</td>
						<td>Registo manual</td>
						<td>21.01.06</td>
						<td>Ida á Aguda para instalação de headsets na sala 5.30</td>
						<td>11:00</td>
						<td>13:00</td>
						<td>2</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>7</td>
						<td>Registo manual</td>
						<td>21.01.07</td>
						<td>Instalação dos certificados do internet banking nos colaboradores de SFI e diretor</td>
						<td>09:00</td>
						<td>13:00</td>
						<td>4</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>8</td>
						<td>Registo manual</td>
						<td>21.01.07</td>
						<td>Criação de um template genérico para as micro aplicações do CRPG</td>
						<td>09:00</td>
						<td>12:00</td>
						<td>3</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>9</td>
						<td>Registo manual</td>
						<td>21.01.07</td>
						<td>Mudança dos templates de termos de responsabilidade dos colaboradores</td>
						<td>15:00</td>
						<td>17:00</td>
						<td>0,5</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>10</td>
						<td>Registo manual</td>
						<td>21.01.08</td>
						<td>Reunião de equipa STI</td>
						<td>11:00</td>
						<td>11:45</td>
						<td>0,75</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>11</td>
						<td>Registo manual</td>
						<td>21.01.08</td>
						<td>Reunião relativa a administração dos servidores e adaptabilidade da rede</td>
						<td>12:00</td>
						<td>13:00</td>
						<td>0,5</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					<tr>
						<td>12</td>
						<td>Registo manual</td>
						<td>21.01.09</td>
						<td>Configuração de ambiente virtual de testes com duas máquinas na mesma rede</td>
						<td>10:00</td>
						<td>12:30</td>
						<td>2,5</td>
						<td>na</td>
						<td>N.A.</td>
						<td>CRPG</td>
						<td>CRPG</td>
						<td>10C02 - STI - SISTEMAS DE INFORMAÇÃO</td>

						<td>
							<a class="ver" href="#" title="Ver">
								<i class="far fa-eye table-icons"></i>
							</a>

							<a class="editar" href="./editar.php" title="Editar" data-toggle="modal" data-target="#modal-editar">
								<i class="far fa-edit table-icons"></i>
							</a>
	
							<a class="remove" href="javascript:void(0)" title="Eliminar" data-toggle="modal" data-target="#modal-eliminar">
								<i class="fa fa-trash table-icons"></i>
							</a>

						</td>
					</tr>
					
				</tbody>
			</table>



		</div>



		

	</div>

	<div class="menu-direito-container">
		
		<div class="menu-direito">
			<div class="close-menu-direito">
				<a href="#" id="close-menu-direito-action">X</a>
			</div>
			<div>
				<div class="menu-direito-actions-title">Ações</div>
				<ul>
	
			
					<li id="headingOne">
		
						<a href="#" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">
							<span class="menu-direito-actions-pointer">></span>Ação 1
						</a>

						<div id="collapseOne" class="menu-direito-actions-subitens collapse" aria-labelledby="headingOne">

							<ul>
								<li><a href="#">Sub Opção 1.1</a></li>
								<li><a href="#">Sub Opção 1.2</a></li>
								<li><a href="#">Sub Opção 1.3</a></li>
							</ul>

						</div>
			
					</li>



		

					<li><a href="#"><span class="menu-direito-actions-pointer"></span>Ação 2</a></li>
					<li><a href="#"><span class="menu-direito-actions-pointer"></span>Ação 3</a></li>
					<li><a href="#"><span class="menu-direito-actions-pointer"></span>Ação 4</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>


</div>

	<script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
		});

		$('.accoes-col').css('min-width', '45px');
	</script>



</body>

</html>