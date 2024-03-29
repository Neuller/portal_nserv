<?php 
require_once "../../Model/Conexao.php";
require_once "../../Model/Servicos.php";
require_once "../../Model/Utilitarios.php";

$c = new conectar();
$conexao = $c -> conexao();
$obj = new servicos();
$objUtils = new utilitarios();

$sql = "SELECT id_preco_servico, descricao, garantia, valor
FROM preco_servicos 
ORDER BY id_preco_servico DESC";

$result = mysqli_query($conexao, $sql);	
?>

<!DOCTYPE html>
<html>
<body>
	<div class="table-responsive">
		<table id="tablePrecos" class="table table-hover table-condensed table-bordered text-center table-striped">
			<thead>
				<tr>
					<td>DESCRIÇÃO</td>
                    <td>GARANTIA</td>
					<td>VALOR</td>
                    <td>EXCLUIR</td>
				</tr>
			</thead> 
			<tbody>
				<?php
					while($mostrar = mysqli_fetch_array($result))
					{
						echo 
						'
						<tr>
						<!-- DESCRIÇÃO -->
						<td>'.$mostrar[1].'</td>
						<!-- GARANTIA -->
						<td>'.$mostrar[2].'</td>
						<!-- VALOR -->
						<td>'.'R$ '.$mostrar[3].'</td>
						<!-- BOTÃO EXCLUIR -->
                        <td>'.'<span class="btn btn-danger btn-md" title="EXCLUIR" onclick="excluir('.$mostrar[0].')">
						<span class="glyphicon glyphicon-remove"></span>
						</span>'.'</td>					
						</tr>
						';
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>

<script>
$(document).ready(function(){
});
</script>