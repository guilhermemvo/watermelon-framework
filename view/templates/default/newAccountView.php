<h2>Cadastrar Conta</h2>

<form action="index.php?class=Account&function=create" method="POST" autocomplete="on">

    <input autofocus required type="text" name="name" placeholder="Nome">
    <br>

    <input type="text" name="description" placeholder="Descrição">
    <br>

    <label for="balance">Saldo: </label>
    <input required id="balance" name="balance" type="number">
    <br>

    <input type="submit" value="Enviar"><br>


</form>