<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GereFina - Gerenciador Financeiro Pessoal</title>

        <!-- Bootstrap -->
        <link href="./view/css/bootstrap.min.css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <h1>GereFina</h1>

        <div class="btn-group">
            <a href='index.php'><button type="button" class="btn btn-default">Home</button></a>
            <a href='index.php?class=Transaction&function=read'><button type="button" class="btn btn-default">Transaction</button></a>
            <a href='index.php?class=Account&function=read'><button type="button" class="btn btn-default">Account</button></a>
            <a href='index.php?class=Category&function=read'><button type="button" class="btn btn-default">Category</button></a>
            <a href='index.php?class=Account&function=create'><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button></a>
            
        </div>


        <div>