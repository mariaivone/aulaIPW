<?php
	include ("Noticia.php");
		$listarNoticia = new Noticia();
		$valor = $listarNoticia->buscarTodos();

	print_r($valor);
?>
<table>
	<th>Item</th>
	<th>Titulo</th>
	<th>Autor</th>
	<th>Ação</th>
	<tr>
		<td></td>	
		<td></td>	
		<td></td>	
		<td></td>	
	
	</tr>
</table>