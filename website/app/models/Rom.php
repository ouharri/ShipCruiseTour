<?php

class Rom extends DB
{
    private string $table = 'chambre';
    private MysqliDb|false $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllRom(): false|MysqliDb|array|string
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
    public function getRomByType($cruiseid, $typeRom = false): array|string
    {
        $type = $typeRom? "AND ty.id = ?" : "";
        return $this->conn->rawQuery("SELECT * , ch.id AS idRom , ty.libelle AS typeRomName , ty.id AS idTypeRom
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
                                                 croisiére c
                                             WHERE
                                                id = ?
                                           )" . $type . "
                                             AND 
                                                ch.id 
                                             NOT IN
                                           ( 
                                              SELECT
                                                  r.chambre
                                              FROM
                                                  réservation r
                                              INNER JOIN croisiére cr ON
                                                  cr.id = r.croisiére
                                              WHERE
                                                  cr.DateOfDeparture LIKE
                                                (
                                                  SELECT
                                                      c.DateOfDeparture
                                                  FROM
                                                      croisiére c
                                                  WHERE
                                                      c.id = ?
                                                )
                                              AND r.croisiére = ?
                                           )
                                           ;",$typeRom? [$cruiseid,$typeRom, $cruiseid, $cruiseid] : [$cruiseid, $cruiseid, $cruiseid]);
    }
    /**
     * @throws Exception
     */
    public function getRomInCruise($id): array|string
    {
        return $this->conn->rawQuery("SELECT * , ch.id AS idRom , ty.libelle AS typeRomName , ty.id AS idTypeRom
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
                                                 croisiére c
                                             WHERE
                                                id = ?
                                           )
                                             AND 
                                                ch.id 
                                             NOT IN
                                           ( 
                                              SELECT
                                                  r.chambre
                                              FROM
                                                  réservation r
                                              INNER JOIN croisiére cr ON
                                                  cr.id = r.croisiére
                                              WHERE
                                                  cr.DateOfDeparture LIKE
                                                (
                                                  SELECT
                                                      c.DateOfDeparture
                                                  FROM
                                                      croisiére c
                                                  WHERE
                                                      c.id = ?
                                                )
                                              AND r.croisiére = ?
                                           );", [$id, $id, $id]);
    }
}