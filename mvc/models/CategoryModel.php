<?php
class CategoryModel extends BaseModel
{
    const TABLE = 'categories';
    const IDTABLE = 'id';
    public function getAllCategory()
    {
        return $this->getAll(self::TABLE);
    }
    public function getCategoryId($id)
    {
        return $this->findById(self::TABLE, $id, self::IDTABLE);
    }
    public function createCategory($data = [])
    {
        return $this->create(self::TABLE, $data);
    }

    public function updateCategory($data, $id)
    {
        return $this->update(self::TABLE, self::IDTABLE, $id, $data);
    }
    public function deleteCategory($id)
    {
        return $this->delete(self::TABLE, self::IDTABLE, $id);
    }
}
