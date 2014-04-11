<h2>Lançar Transação</h2>

<form action="index.php?class=Transaction&function=create" method="POST" autocomplete="on">

    <input autofocus required type="text" name="name" placeholder="Nome">
    <br>

    <input type="text" name="description" placeholder="Descrição">
    <br>

    <label for="debit">Pagamento</label>
    <input type="radio" name="type" id="debit" value="debit">
    <br>

    <label for="credit">Recebimento</label>
    <input type="radio" name="type" id="credit" value="credit">
    <br>

    <select name="category">
        <option value="1">Entretenimento</option>
        <option value="2">Lazer</option>
        <option value="3">Higiene</option>
    </select>
    <br>

    <select name="account">
        <option value="1">Banco do Brasil</option>
        <option value="2">Bradesco</option>
        <option value="3">Caixa</option>
        <option value="4">Carteira</option>
        <option value="5">Santander</option>
    </select>
    <br>

    <input required type="date" name="date">
    <br>

    <label for="value">Valor: </label>
    <input required id="value" name="value" type="number">
    <br>

    <input type="submit" value="Enviar"><br>


</form>