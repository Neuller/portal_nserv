<?php
session_start();
if (isset($_SESSION["User"])) {
?>
<!DOCTYPE html>
<html>
	<body>
		<div class="tblServicos container">
			<div class="cabecalho bgGray">
				<div class="text-center textCabecalho opacidade">
					<h3><strong>PROCURAR SERVIÇOS</strong></h3>
				</div>
			</div>
			<!-- TABELA -->
			<div class="row">
				<div class="col-sm-12 tabelas" align="center">
					<div id="tabelaServicos"></div>
				</div>
			</div>
		</div>
	</body>	
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$("#tabelaServicos").load("./View/Servicos/TabelaServicos.php");
	});

	function visualizarServico(idServico) {
		$("#conteudo").load("./View/Servicos/VisualizarServico.php?id="+idServico);
	}
</script>
<?php
} else {
	header("location:./index.php");
}
?>