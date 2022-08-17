<?php
class PostController extends BaseController
{
    function getAll()
    {
        $array = $this->model("PostModel");
        $this->view("layout/admin/index", [
            "page" => "Post/show",
            "title" => "List Bài Post",
            "post" => $array->getAllPost(),
            "category" => $this->model("CategoryModel")->getAllCategory(),
            "auth" => $this->model("AccountModel")->getAllAccount()
        ]);
    }
    function create()
    {
        if (isset($_POST["addPost"])) {
            $tittle = $_POST["tittle"];
            $content = $_POST["content"];
            $category_id = $_POST["category_id"];
            $auth_id = $_POST["auth_id"];
            $data = array(
                'tittle' => $tittle,
                'content' => $content,
                'category_id' => $category_id,
                'auth_id' => $auth_id
            );
            $array = $this->model("PostModel");
            $array->createPost($data);
            header('Location: http://localhost/mvc_php/Post');
        } else {
            $this->view("layout/admin/index", [
                "page" => "Post/create",
                "title" => "Tạo Bài Post",
                "category" => $this->model("CategoryModel")->getAllCategory(),
                "auth" => $this->model("AccountModel")->getAllAccount()
            ]);
        }
    }
    function edit($id)
    {
        if (isset($_POST["editPost"])) {
            $tittle = $_POST["tittle"];
            $content = $_POST["content"];
            $category_id = $_POST["category_id"];
            $auth_id = $_POST["auth_id"];
            $data = array(
                'tittle' => $tittle,
                'content' => $content,
                'category_id' => $category_id,
                'auth_id' => $auth_id
            );
            $array = $this->model("PostModel");
            $array->updatePost($data, $id);
            header('Location: http://localhost/mvc_php/Post');
        } else {
            $array = $this->model("PostModel");
            $this->view("layout/admin/index", [
                "page" => "Post/edit",
                "title" => "Sửa bài Post",
                "postId" => $array->getPostId($id),
                "category" => $this->model("CategoryModel")->getAllCategory(),
                "auth" => $this->model("AccountModel")->getAllAccount()
            ]);
        }
    }
    function delete($id)
    {
        $array = $this->model("PostModel");
        $array->deletePost($id);
        header('Location: http://localhost/mvc_php/Post');
    }
    function showContent($id)
    {
        $this->view("layout/admin/index", [
            "page" => "Post/showContent",
            "title" => "Chi Tiết Bài Post",
            "content" => $this->model("PostModel")->getPostId($id)
        ]);
    }
    function showListPost()
    {
        $this->view("layout/user/index", [
            "page" => "post/showlistPost",
            "title" => "Blog",
            "post" => array_reverse($this->model("PostModel")->getAllPost()),
            "auth" => $this->model("AccountModel")->getAllAccount(),
            "category" => $this->model("CategoryModel")->getAllCategory()
        ]);
    }
    function showPost($id)
    {
        $array = $this->model("PostModel");
        $array->updateView($id);
        $this->view("layout/user/index", [
            "page" => "post/showPost",
            "title" => "show Bài Post",
            "postId" => $this->model("PostModel")->getPostId($id),
            "auth" => $this->model("AccountModel")->getAllAccount(),
            "category" => $this->model("CategoryModel")->getAllCategory()
        ]);
    }
    function showPostCategory($id)
    {
        $this->view("layout/user/index", [
            "page" => "post/showPostCat",
            "title" => "show Bài Post theo Danh mục",
            "auth" => $this->model("AccountModel")->getAllAccount(),
            "category" => $this->model("CategoryModel")->getAllCategory(),
            "postCat" => array_reverse($this->model("PostModel")->showPostDK($cat = 'category_id', $id))
        ]);
    }
    function showPostAuth($id)
    {
        $this->view("layout/user/index", [
            "page" => "post/showPostAuth",
            "title" => "show Bài Post theo Tác Giả",
            "auth" => $this->model("AccountModel")->getAllAccount(),
            "category" => $this->model("CategoryModel")->getAllCategory(),
            "postAuth" => array_reverse($this->model("PostModel")->showPostDK($cat = 'auth_id', $id))
        ]);
    }
    function postTrending()
    {
        $array = $this->model("PostModel");
        $this->view("layout/user/index", [
            "page" => "post/showPostTrending",
            "title" => "show Post Trending",
            "post" => $array->orderView(),
            "auth" => $this->model("AccountModel")->getAllAccount(),
            "category" => $this->model("CategoryModel")->getAllCategory()
        ]);
    }
}
