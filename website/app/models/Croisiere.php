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
    public function startTransaction()
    {

        $this->conn->startTransaction();
    }

    /**
     * @throws Exception
     */
    public function rollback()
    {
        $this->conn->rollback();
    }

    /**
     * @throws Exception
     */
    public function commit()
    {
        $this->conn->commit();
    }

    /**
     * @throws Exception
     */
    public function getAllCroisiere()
    {
        return $this->conn->get($this->table);
    }

    /**
     * @throws Exception
     */
    public function getAllCroisiereJ()
    {
        return $this->conn->rawQuery("SELECT c.id AS idCroisiere,
                                             c.name AS nameCroisier,
                                              n.libelle AS nameNavire, " . "
                                             (
                                             SELECT
                                                 MIN(price)
                                             FROM
                                                  typerom ty
                                             INNER JOIN chambre ch ON
                                                 ch.typeRom = ty.id
                                             WHERE
                                                 ch.navire = n.id
                                             ) AS 'prix',
                                                C.numberOfNight,
                                               `numberOfNight`,
                                                p.name AS 'port_dep',
                                                (
                                                    SELECT NAME
                                                FROM
                                                   countries
                                                WHERE
                                                    abv = p.countrie
                                                ) AS countrie,
                                                (
                                                    SELECT City
                                                FROM
                                                   countries
                                                WHERE
                                                    abv = p.countrie
                                                ) AS city,
                                                (
                                                    SELECT NAME
                                                FROM 
                                                    PORT
                                                WHERE
                                                    id = `departmentPort`
                                                ) AS departmentPort
                                               FROM
                                                `croisiére` c
                                                 INNER JOIN navire n ON
                                                    c.navire = n.id
                                                 INNER JOIN PORT p ON
                                                    p.id = c.departmentPort;
                                             ");
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
    public function getLastId()
    {
        return $this->conn->getValue($this->table, "max(id)");
    }

    /**
     * @throws Exception
     */
    public function update($id, $data): bool
    {
        $db = $this->conn->where('id', $id);
        return $db->update($this->table, $data);
    }
}