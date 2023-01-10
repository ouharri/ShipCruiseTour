<?php
class reservation extends DB
{
    private $table = 'réservation';
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllReservation()
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
    public function getResClient($id)
    {
        return $this->conn->rawQuery("SELECT c.id, 
                                             r.id, " . "
                                             c.name AS 'nameCruise',
                                             n.libelle AS 'nameNavire',
                                             c.img,
                                             c.numberOfNight,
                                             p.name AS 'portDep',
                                             p.city AS 'portCity',
                                             p.countrie AS 'portCountrie',
                                             c.DateOfDeparture,
                                             c.TimeOfDeparture,
                                             t.libelle,
                                             t.price,
                                             ch.numberOfRom 
                                         FROM
                                             `croisiére` c
                                         INNER JOIN navire n ON
                                             c.navire = n.id
                                         INNER JOIN port p ON
                                             p.id = c.departmentPort
                                         INNER JOIN réservation r ON
                                             r.croisiére = c.id
                                         INNER JOIN chambre ch ON
                                             ch.id = r.chambre
                                         INNER JOIN typerom t ON
                                             t.id = ch.typeRom AND r.user = ?;",[$id]);
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