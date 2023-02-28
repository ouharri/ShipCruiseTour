<?php

class CruiseItinery extends DB
{
    private string $table = 'cruiseitinery';
    private MysqliDb|false $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function startTransaction(): void
    {
        $this->conn->startTransaction();
    }

    /**
     * @throws Exception
     */
    public function rollback(): bool
    {
        return $this->conn->rollback();
    }

    /**
     * @throws Exception
     */
    public function commit(): bool
    {
        return $this->conn->commit();
    }


    /**
     * @throws Exception
     */
    public function getAllCruiseItinery(): false|MysqliDb|array|string
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
    public function getRow($id, $where = 'id'): false|MysqliDb|array|string
    {
        return $this->conn->where($where, $id)->get($this->table, null, 'port');
    }

    /**
     * @throws Exception
     */
    public function getRowName($id, $where = 'id')
    {
        return $this->conn->rawQuery("SELECT NAME,
                                     city,
                                     (
                                      SELECT NAME
                                      FROM
                                          countries
                                      WHERE
                                         abv = countrie
                                      ) AS countrie
                                      FROM " . $this->table . " ct
                                      INNER JOIN 
                                           PORT po 
                                      ON
                                         ct.port = po.id
                                     WHERE
                                     croisiére = ?", array($id));
    }

    /**
     * @throws Exception
     */
    public function update($id, $data): bool
    {
        return $this->conn->where('id', $id)->update($this->table, $data);
    }
}