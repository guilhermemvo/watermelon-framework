<div>

	<table border='1px'>

		<tr style="background-color: #fff000;">
			<td>ID</td>
			<td>NOME</td>
			<td>DESCRIÇÃO</td>
		</tr>


		<?php

			foreach ($objectList as $key => $object) {

				echo '<tr>';

					echo '<td>' . $object->id . '</td>';
					echo '<td>' . $object->name . '</td>';
					echo '<td>' . $object->description . '</td>';

				echo '</tr>';

			}

		?>

	</table>

</div>