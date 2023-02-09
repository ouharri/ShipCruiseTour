<?php


class users extends DB
{
    private $table = "user";
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAll()
    {
        return $this->conn->get($this->table);
    }

    /**
     * @throws Exception
     */
    public function getAllusers($user, $password)
    {
        $admin = $this->conn->where('login', $user);
        $admin = $this->conn->where('password', $password);
        return $admin->getOne($this->table);
    }

    /**
     * @throws Exception
     */
    public function insert($data): bool
    {
        return $this->conn->insert($this->table, $data);
    }

    /**
     * @throws Exception
     */
    public function delete($id): bool
    {
        $db = $this->conn->where('id', $id);
        return $db->delete($this->table);
    }

    /**
     * @throws Exception
     */
    public function getRow($id)
    {
        $db = $this->conn->where('id', $id);
        return $db->getOne($this->table);
    }

    /**
     * @throws Exception
     */
    public function getTotal()
    {
        return $this->conn->getValue($this->table, 'count(*)');
    }

    /**
     * @throws Exception
     */
    public function setAdmin($id): bool
    {
        $db = $this->conn->where('id', $id);
        return $db->update($this->table, ['is_admin' => true]);
    }

    /**
     * @throws Exception
     */
    public function update($id, $data): bool
    {
        $db = $this->conn->where('id', $id);
        return $db->update($this->table, $data);
    }

    /**
     * @throws Exception
     */
    public function setClient($id): bool
    {
        $db = $this->conn->where('id', $id);
        return $db->update($this->table, ['is_admin' => false]);
    }
}