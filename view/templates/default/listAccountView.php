<div class="table-responsive">

    <table class="table table-striped">

        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>SALDO</th>
            <th>OPÇÕES</th>
        </thead>

        <?php

            foreach ($data as $key => $object) {

                echo "

                    <tbody>
                        <td> $object->id </td>
                        <td> $object->name </td>
                        <td> $object->description </td>
                        <td> $object->balance </td>
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
