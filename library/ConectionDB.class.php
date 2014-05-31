<?php

class ConectionDB {

    private $pdo;

    function __construct() {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=gerefina", 'admin', 'password');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($sql, $params = null, $select = null) {

        try {
            
            $query = $this->pdo->prepare($sql);

            $result = $query->execute($params);

            if ($select) {
                return $query->fetchAll(PDO::FETCH_OBJ);
            }            

            return $result;

        } catch (PDOException $exc) {

            throw new Exception($exc->getMessage());
            
        }
    }

}

?>
