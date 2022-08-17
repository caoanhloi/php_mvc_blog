<?php
class CategoryController extends BaseController
{
    function getAll()
    {
        $array = $this->model("CategoryModel");
        $this->view("layout/admin/index", [
            "page" => "category/show",
            "title" => "List Danh mục",
            "cat" => $array->getAllCategory()
        ]);
    }
    function create()
    {
        if (isset($_POST["addCategory"])) {
            $name = $_POST["name"];
            $data = array(
                'name' => $name
            );
            var_dump($data);
            $array = $this->model("CategoryModel");
            $array->createCategory($data);
            header('Location: http://localhost/mvc_php/category');
        } else {
            $this->view("layout/admin/index", [
                "page" => "category/create",
                "title" => "Tạo Danh mục"
            ]);
        }
    }

    function edit($id)
    {
        if (isset($_POST["editCategory"])) {
            $name = $_POST["name"];
            $data = array(
                'name' => $name
            );
            $array = $this->model("CategoryModel");
            $array->updateCategory($data, $id);
            header('Location: http://localhost/mvc_php/category');
        } else {
            $array = $this->model("CategoryModel");
            $this->view("layout/admin/index", [
                "page" => "category/edit",
                "title" => "Sửa Danh mục",
                "catId" => $array->getCategoryId($id)
            ]);
        }
    }

    function delete($id)
    {
        $array = $this->model("CategoryModel");
        $array->deleteCategory($id);
        header('Location: http://localhost/mvc_php/category');
    }
}
