<?php
class AccountController extends BaseController
{
    function getAll()
    {
        $array = $this->model("AccountModel");
        $this->view("layout/admin/index", [
            "page" => "Account/show",
            "title" => "Danh sách Account",
            "ac" => $array->getAllAccount()
        ]);
    }
    function create()
    {
        if (isset($_POST["addAccount"])) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'password' => $password
            );
            $array = $this->model("AccountModel");
            $array->createAccount($data);
            header('Location: http://localhost/mvc_php/Account');
        } else {
            $this->view("layout/admin/index", [
                "page" => "Account/create",
                "title" => "Tạo Account",
            ]);
        }
    }
    function edit($id)
    {
        if (isset($_POST["editAccount"])) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $role = $_POST["role"];
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'password' => $password,
                'role' => $role
            );
            $array = $this->model("AccountModel");
            $array->updateAccount($data, $id);
            header('Location: http://localhost/mvc_php/Account');
        } else {
            $array = $this->model("AccountModel");
            $this->view("layout/admin/index", [
                "page" => "Account/edit",
                "title" => "Sửa Account",
                "acId" => $array->getAccountId($id),
                "ac" => $array->getAllAccount()
            ]);
        }
    }
    function delete($id)
    {
        $array = $this->model("AccountModel");
        $array->deleteAccount($id);
        header('Location: http://localhost/mvc_php/Account');
    }
    function register()
    {
        if (isset($_POST["register"])) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'password' => $password
            );
            $array = $this->model("AccountModel");
            $array->createAccount($data);
            header('Location: http://localhost/mvc_php/Account');
        } else {
            $array = $this->model("AccountModel");
            $this->view("layout/admin/index", [
                "page" => "Account/register",
                "title" => "Đăng ký Account",
            ]);
        }
    }
    function login()
    {
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $array = $this->model("AccountModel");
            $data = $array->checkLogin($email, $password);
            if ($data == null) {
                $this->view("layout/admin/index", [
                    "page" => "Account/login"
                ]);
            } else {
                $_SESSION['account'] = $data;
                foreach ($data as $key => $value) {
                    if ($value["role"] == 0) {
                        header('Location: http://localhost/mvc_php/Acount/show');
                    } else {
                        header('Location: http://localhost/mvc_php/Post/showListPost');
                    }
                }
            }
        } else {
            $this->view("layout/admin/index", [
                "page" => "Account/login",
                "title" => "Đăng Nhập"
            ]);
        }
    }
    function logout()
    {
        session_destroy();
        header('Location: http://localhost/mvc_php/Post/showListPost');
    }
}
