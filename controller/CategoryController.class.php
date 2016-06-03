<?php

class CategoryController {

    const INSERT_CATEGORY_SUCCESS = "Categoria inserida com sucesso.";
    const INSERT_CATEGORY_FAIL = "A Categoria não foi cadastrada. Tente novamente mais tarde.";

    public function create() {

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
                echo '<pre>Exception!</pre>';
                echo $exc->getMessage();
            }
        } else {

            View::output('newCategoryView');
        }
    }

    public function read() {

        $categoryModel = new CategoryModel();

        try {

            $objectList = $categoryModel->select();

            View::setParams(
                array(
                    'name' => 'Category',
                    'data' => $objectList
                )
            );

            View::output('listCategoryView');

        } catch (Exception $exc) {
            echo '<pre>Exception!</pre>';
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
