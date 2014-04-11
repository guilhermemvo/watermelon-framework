<?php

/**
 * Description of AccountObject
 *
 * @author gmoliveira
 */
class AccountObject {

    private $id, $name, $description, $balance;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

    public function validateData($data) {
        if ($data) {
            return 1;
        } else {
            return 0;
        }
    }

}