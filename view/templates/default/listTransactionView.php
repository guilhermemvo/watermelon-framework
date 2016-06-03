<div class="table-responsive">

    <table class="table table-striped">

        <thead>
			<th>ID</th>
			<th>NOME</th>
			<th>DESCRIÇÃO</th>
			<th>TIPO</th>
			<th>ID DA CATEGORIA</th>
			<th>ID DA CONTA</th>
			<th>DATA</th>
			<th>VALOR</th>
			<th>OPÇÕES</th>
		</thead>

		<?php

			foreach ($data as $key => $object) {

				echo "

					<tbody>
						<td> $object->id </td>
						<td> $object->name </td>
						<td> $object->description </td>
						<td> $object->type </td>
						<td> $object->category_id </td>
						<td> $object->account_id </td>
						<td> $object->date </td>
						<td> $object->value </td>
						<td>
                            <button type='button' class='btn btn-default btn-xs'>
                                <span class='glyphicon glyphicon-pencil'></span>
                            </button>
                            <button type='button' class='btn btn-default btn-xs'>
                                <span class='glyphicon glyphicon-trash'></span>
                            </button>
                        </td>
					</tbody>
				";
			}
		?>
	</table>
</div>
