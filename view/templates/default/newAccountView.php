<h2>Cadastrar Conta</h2>

<form role="form" action="index.php?class=Account&function=create" method="POST" autocomplete="on">

    <div class="form-group">
        <label for="accountName">Nome da Conta</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome da conta" required autofocus>
    </div>

    <div class="form-group">
        <label for="descriptionAccount">Descrição</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Descrição">
    </div>

    <div class="form-group">
        <label for="balanceAccount">Saldo</label>
        <input type="number" class="form-control" id="balance" name="balance" placeholder="Saldo">
    </div>

    <button type="submit" class="btn btn-default" value="enviar">Enviar</button>

</form>