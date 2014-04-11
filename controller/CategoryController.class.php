<?php

/**
 * Description of CategoryController
 *
 * @author gmoliveira
 */
class CategoryController {

    public function create() { 

        define('INSERT_CATEGORY_SUCCESS', "Categoria inserida com sucesso.");
        define('INSERT_CATEGORY_FAIL', "A Categoria não foi cadastrada. Tente novamente mais tarde.");

        $categoryObject = new CategoryObject();

        if ($categoryObject->validateData($_POST)) {

            $categoryObject = new CategoryObject();
            $categoryObject->setName($_POST['name']);
            $categoryObject->setDescription($_POST['description']);

            $categoryModel = new CategoryModel();

            try {
                if ($categoryModel->create($categoryObject)) {
                    echo INSERT_CATEGORY_SUCCESS . '<br><br>';
                    $this->read();
                }
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }
        } else {
            include './view/newCategoryView.php';
        }
    }

    public function read() {

        $categoryModel = new CategoryModel();

        try {
            $objectList = $categoryModel->select();
            include './view/listCategoryView.php';
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