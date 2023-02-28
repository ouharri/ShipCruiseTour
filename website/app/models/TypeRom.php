<?php

class TypeRom extends DB
{
    private string $table = 'typerom';
    private MysqliDb|false $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllTypeRom(): false|MysqliDb|array|string
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
    public function getMaxRomType($id)
    {
        $db = $this->conn->where('id', $id);
        return $db->getOne($this->table)['max'];
    }
}