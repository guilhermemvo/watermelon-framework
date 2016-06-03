<div>

	<table border='1px'>

		<tr style="background-color: #fff000;">
			<td>ID</td>
			<td>NOME</td>
			<td>DESCRIÇÃO</td>
			<td>TIPO</td>
			<td>ID DA CATEGORIA</td>
			<td>ID DA CONTA</td>
			<td>DATA</td>
			<td>VALOR</td>
		</tr>

		<?php

			foreach ($data as $key => $object) {

				echo '<tr>';

					echo '<td>' . $object->id . '</td>';
					echo '<td>' . $object->name . '</td>';
					echo '<td>' . $object->description . '</td>';
					echo '<td>' . $object->type . '</td>';
					echo '<td>' . $object->category_id . '</td>';
					echo '<td>' . $object->account_id . '</td>';
					echo '<td>' . $object->date . '</td>';
					echo '<td>' . $object->value . '</td>';

				echo '</tr>';

			}

		?>

	</table>

</div>
