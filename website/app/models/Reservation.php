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
    public function getResClient($id)
    {
        return $this->conn->rawQuery("SELECT c.id AS 'idCruise', 
                                             r.id AS 'idReservation',
                                             c.name AS 'nameCruise',
                                             n.libelle AS 'nameNavire',
                                             c.img, " . "
                                             c.desc,
                                             c.numberOfNight,
                                             ( SELECT NAME
                                                FROM 
                                                    PORT WHERE
                                                id = c.departmentPort
                                             ) AS 'departmentPort',
                                             ( SELECT name
                                                FROM
                                                    countries WHERE
                                                abv = p.countrie
                                             ) AS 'portCountrie',
                                             p.name AS 'portDep',
                                             p.city AS 'portCity',
                                             c.DateOfDeparture,
                                             c.TimeOfDeparture,
                                             t.libelle AS 'typeRom',
                                             t.price AS 'resPrice',
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
                                             t.id = ch.typeRom AND r.user = ?;", [$id]);
    }

    /**
     * @throws Exception
     */
    public function getResId($id)
    {
        return $this->conn->rawQuery("SELECT c.id AS 'idCruise', 
                                             r.id AS 'idReservation',
                                             r.date AS 'dateReservation',
                                             c.name AS 'nameCruise',
                                             n.libelle AS 'nameNavire',
                                             c.img, " . "
                                             c.desc,
                                             c.numberOfNight,
                                             ( SELECT NAME
                                                FROM 
                                                    PORT WHERE
                                                id = c.departmentPort
                                             ) AS 'departmentPort',
                                             ( SELECT name
                                                FROM
                                                    countries WHERE
                                                abv = p.countrie
                                             ) AS 'portCountrie',
                                             p.name AS 'portDep',
                                             p.city AS 'portCity',
                                             c.DateOfDeparture,
                                             c.TimeOfDeparture,
                                             t.libelle AS 'typeRom',
                                             t.price AS 'resPrice',
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
                                             t.id = ch.typeRom AND r.id = ?;", [$id])[0];
    }

    /**
     * @throws Exception
     */
    public function getDate($id)
    {
        return $this->conn->rawQuery("SELECT c.DateOfDeparture " . "
                                             FROM 
                                                 `croisiére` c
                                             INNER JOIN 
                                                réservation r 
                                             ON
                                                r.croisiére = c.id 
                                             AND r.id = ?;", [$id])[0]['DateOfDeparture'];
    }

    /**
     * @throws Exception
     */
    public function getStatistic($dat)
    {
        return $this->conn->rawQuery("SELECT COUNT(*) AS cnt " . "
                                             FROM 
                                                réservation re 
                                             WHERE re.date 
                                             LIKE ?;", [$dat])[0]['cnt'];
    }

    /**
     * @throws Exception
     */
    public function getAvgStatistic($m, $y)
    {
        return $this->conn->rawQuery("SELECT AVG(price) AS avg
                                             FROM 
                                                réservation re 
                                             WHERE 
                                                MONTH(re.date) LIKE {$m}
                                             AND
                                                 YEAR(re.date) LIKE {$y} ;
                                             ")[0]['avg'];
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