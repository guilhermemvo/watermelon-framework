<?php

/**
 * Description of CategoryObject
 *
 * @author gmoliveira
 */
class CategoryObject {

    private $id, $name, $description;

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
    
    public function validateData($data) {
        if ($data) {
            return 1;
        } else {
            return 0;
        }
    }

}
