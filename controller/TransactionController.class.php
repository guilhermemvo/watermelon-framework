<?php

/**
 * Description of TransactionController
 *
 * @author gmoliveira
 */
class TransactionController {

    public function create() {

        define('INSERT_TRANSACTION_SUCCESS', "Transação inserida com sucesso.");
        define('INSERT_TRANSACTION_FAIL', "A Transação não foi cadastrada. Tente novamente mais tarde.");

        $transactionObject = new TransactionObject();

        if ($transactionObject->validateData($_POST)) {

            $transactionObject->setName($_POST['name']);
            $transactionObject->setDescription($_POST['description']);
            $transactionObject->setType($_POST['type']);
            $transactionObject->setCategory($_POST['category']);
            $transactionObject->setAccount($_POST['account']);
            $transactionObject->setDate($_POST['date']);
            $transactionObject->setValue($_POST['value']);

            $transactionModel = new TransactionModel();

            try {
                if ($transactionModel->create($transactionObject)) {
                    echo INSERT_TRANSACTION_SUCCESS . '<br><br>';
                    $this->read();
                } else {
                    echo INSERT_TRANSACTION_FAIL . '<br><br>';
                }
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }
        } else {
            include './view/newTransactionView.php';
        }
    }

    public function read() {

        $transactionModel = new TransactionModel();

        try {
            $objectList = $transactionModel->select();
            include './view/listTransactionView.php';
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function update() {
        return 1;
    }

    public function delete() {
        return 1;
    }

}