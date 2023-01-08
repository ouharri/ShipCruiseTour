<?php
class Navire extends DB
{
    private $table = 'navire';
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllNavire()
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
    public function update($id, $data): bool
    {
        $db = $this->conn->where('id',$id);
        return $db->update($this->table,$data);
    }

    /**
     * @throws Exception
     */
    public function getRomInCruise($id)
    {
        return $this->conn->rawQuery("SELECT * " . "
                                           FROM
                                              chambre ch 
                                           INNER JOIN typerom ty ON
                                              ty.id = ch.typeRom
                                           WHERE 
                                             ch.navire = 
                                           (
                                             SELECT
                                                 navire
                                             FROM
                                                 croisiére
                                             WHERE
                                                id = ?
                                           );",[$id]);
    }
}