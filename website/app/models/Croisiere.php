<?php
class Croisiere extends DB
{
    private $table = 'croisiére';
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllCroisiere()
    {
        return  $this->conn->get($this->table);
    }

    /**
     * @throws Exception
     */
    public function insert($data): bool
    {
        return $this->conn->insert($this->table,$data);
    }

    /**
     * @throws Exception
     */
    public function delete($id): bool
    {
        $db = $this->conn->where('id',$id);
        return $db->delete($this->table);
    }

    /**
     * @throws Exception
     */
    public function getRow($id)
    {
        $db = $this->conn->where('id',$id);
        return $db->getOne($this->table);
    }
    /**
     * @throws Exception
     */
    public function getLastId()
    {
        return $this->conn->getValue($this->table, "max(id)");
    }

    /**
     * @throws Exception
     */
    public function update($id, $data): bool
    {
        $db = $this->conn->where('id',$id);
        return $db->update($this->table,$data);
    }
}