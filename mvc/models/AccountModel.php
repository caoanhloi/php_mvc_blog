<?php
class AccountModel extends BaseModel
{
    const TABLE = 'account';
    const IDTABLE = 'id';
    public function getAllAccount()
    {
        return $this->getAll(self::TABLE);
    }

    public function getAccountId($id)
    {
        return $this->findById(self::TABLE, $id, self::IDTABLE);
    }

    public function createAccount($data = [])
    {
        return $this->create(self::TABLE, $data);
    }

    public function updateAccount($data, $id)
    {
        return $this->update(self::TABLE, self::IDTABLE, $id, $data);
    }
    public function deleteAccount($id)
    {
        return $this->delete(self::TABLE, self::IDTABLE, $id);
    }
    public function checkLogin($email,$password)
    {
        $sql = "SELECT * FROM account WHERE email = '$email' AND password = '$password'";
        $query =  mysqli_query($this->con,$sql);
        $data = [];
        while ($row = mysqli_fetch_array($query)) {
            array_push($data,$row);
        };
        return $data;
    }
}
