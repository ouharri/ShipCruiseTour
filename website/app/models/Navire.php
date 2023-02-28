<?php

class Navire extends DB
{
    private string $table = 'navire';
    private MysqliDb|false $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllNavire(): false|MysqliDb|array|string
    {
        return $this->conn->get($this->table);
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
        return $this->conn->where('id', $id)->delete($this->table);
    }

    /**
     * @throws Exception
     */
    public function getRow($id): array|string|null
    {
        return $this->conn->where('id', $id)->getOne($this->table);
    }

    /**
     * @throws Exception
     */
    public function update($id, $data): bool
    {
        return $this->conn->where('id', $id)->update($this->table, $data);
    }


    /**
     * @throws Exception
     */
    public function getTotal()
    {
        return $this->conn->getValue($this->table, 'count(*)');
    }
}