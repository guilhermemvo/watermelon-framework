<?php

class AccountModel extends BaseModel {

    const CREATE_QUERY = 'INSERT INTO account (name,description,balance) VALUES (:name,:description,:balance)';
    const SELECT_QUERY = 'select * from account';

    public function __construct() {
        parent::__construct();
    }

    public function create(AccountObject $accountObject) {

        $params = array(
            'name' => $accountObject->getName(),
            'description' => $accountObject->getDescription(),
            'balance' => $accountObject->getBalance()
        );

        try {
            return $this->call(self::CREATE_QUERY, $params, null);
        } catch (Exception $exc) {
            //guilhermemvo - Gravar Log de erros aqui
            throw new Exception($exc->getMessage());
        }
    }

    public function select() {
        try {
            return $this->call(self::SELECT_QUERY, null, true);
        } catch (Exception $exc) {
            //guilhermemvo - Gravar Log de erros aqui
            throw new Exception($exc->getMessage());
        }
    }

}

?>
