<div class="table-responsive">

    <table class="table table-striped">

        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>SALDO</th>
            <th>OPÇÕES</th>            
        </tr>

        <?php
        foreach ($data as $key => $object) {

            echo '<tr>';

                echo '<td>' . $object->id . '</td>';
                echo '<td>' . $object->name . '</td>';
                echo '<td>' . $object->description . '</td>';
                echo '<td>' . $object->balance . '</td>';

                echo '
                    <td>
                        <button type="button" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                        
                        <button type="button" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </td>';

                
                
            echo '</tr>';
        }
        ?>

    </table>

</div>