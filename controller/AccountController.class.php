<?php

/**
 * Description of AccountController
 *
 * @author gmoliveira
 */
class AccountController {

    public function create() {

        define('INSERT_ACCOUNT_SUCCESS', "Conta inserida com sucesso.");
        define('INSERT_ACCOUNT_FAIL', "A Conta não foi cadastrada. Tente novamente mais tarde.");

        $accountObject = new AccountObject();

        if ($accountObject->validateData($_POST)) {

            $accountObject->setName($_POST['name']);
            $accountObject->setDescription($_POST['description']);
            $accountObject->setBalance($_POST['balance']);

            $accountModel = new AccountModel();

            try {
                if ($accountModel->create($accountObject)) {
                    echo INSERT_ACCOUNT_SUCCESS . '<br><br>';
                    $this->read();
                } else {
                    echo INSERT_ACCOUNT_FAIL . '<br><br>';
                }
            } catch (Exception $exc) {
                echo '<br>Caiu na Exception!<br>';
                exit;
                echo $exc->getMessage();
            }
        } else {

            View::output('newAccountView');
        }
    }

    public function read() {

        $accountModel = new AccountModel();

        try {

            $objectList = $accountModel->select();

            View::setParams(array(
                'name' => 'Painho Gay',
                'data' => $objectList
            ));

            View::output('listAccountView');
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