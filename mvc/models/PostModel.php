<?php
class PostModel extends BaseModel
{
    const TABLE = 'posts';
    const IDTABLE = 'id';
    public function getAllPost()
    {
        return $this->getAll(self::TABLE);
    }
    public function getPostId($id)
    {
        return $this->findById(self::TABLE, $id, self::IDTABLE);
    }

    public function createPost($data = [])
    {
        return $this->create(self::TABLE, $data);
    }

    public function updatePost($data, $id)
    {
        return $this->update(self::TABLE, self::IDTABLE, $id, $data);
    }
    public function deletePost($id)
    {
        return $this->delete(self::TABLE, self::IDTABLE, $id);
    }
    public function updateView($id)
    {
            $sql = "UPDATE posts SET view_count = view_count+1  WHERE id = $id";
            mysqli_query($this->con,$sql);
    }
    public function showPostDK($dk1,$dk2)
    {
        $sql = "SELECT * FROM posts where $dk1 = $dk2 ";
        $query =  mysqli_query($this->con,$sql);
        $data = [];
        while ($row = mysqli_fetch_array($query)) {
            array_push($data,$row);
        };
        return $data;
    }
    public function orderView()
    {
        $sql = "SELECT * FROM posts ORDER BY view_count DESC";
        $query =  mysqli_query($this->con,$sql);
        $data = [];
        while ($row = mysqli_fetch_array($query)) {
            array_push($data,$row);
        };
        return $data;
    }
}
