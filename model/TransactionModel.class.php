<?php

class TransactionModel extends BaseModel {

    const CREATE_QUERY = 'INSERT INTO transaction (name,description,type,category_id,account_id,date,value) VALUES (:name,:description,:type,:category,:account,:date,:value)';
    const SELECT_QUERY = 'select * from transaction';

    public function __construct() {
        parent::__construct();
    }

    public function create(TransactionObject $transactionObject) {

        $params = array(
            'name' => $transactionObject->getName(),
            'description' => $transactionObject->getDescription(),
            'type' => $transactionObject->getType(),
            'category' => $transactionObject->getCategory(),
            'account' => $transactionObject->getAccount(),
            'date' => $transactionObject->getDate(),
            'value' => $transactionObject->getValue()
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
