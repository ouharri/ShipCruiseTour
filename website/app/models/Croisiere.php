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
    public function getStatisticCroisiere($year){
        return $this->conn->rawQuery("SELECT COUNT(cr.id) AS COUNT,
                                             MONTH(cr.DateOfDeparture) AS MONTH
                                         FROM
                                             croisiére cr
                                         WHERE
                                             YEAR(cr.DateOfDeparture) = ?
                                         GROUP BY
                                             MONTH(cr.DateOfDeparture)
                                         ORDER BY  MONTH(cr.DateOfDeparture);",[$year]);
    }

    /**
     * @throws Exception
     */
    public function getCapacity($id)
    {
        return $this->conn->rawQuery("SELECT
                                          cr.id AS idCruises,
                                          na.numberOfPlaces AS capacity,
                                          SUM(ch.capacity) AS reserved
                                      FROM
                                          croisiére cr
                                      INNER JOIN navire na ON
                                          cr.navire = na.id
                                      INNER JOIN `réservation` re ON
                                          re.croisiére = cr.id
                                      INNER JOIN chambre ch ON
                                          ch.id = re.chambre
                                      WHERE 
                                            cr.id = ?
                                      GROUP BY
                                          idCruises
                                      ;",[$id]);
    }

    /**
     * @throws Exception
     */
    public function getAllCroisiereJ()
    {
        return $this->conn->rawQuery("SELECT c.id AS idCroisiere,
                                             c.name AS nameCroisier,
                                              n.libelle AS nameNavire,
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
                                                C.id,
                                                C.numberOfNight,
                                                C.DateOfDeparture,
                                                C.TimeOfDeparture,
                                               `numberOfNight`,
                                                c.img,
                                                c.desc,
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
                                                    p.id = c.departmentPort
                                             WHERE 
                                                c.DateOfDeparture >= current_timestamp()
                                             ;");
    }

    /**
     * @throws Exception
     */
    public function getAllCroisiereHome()
    {
        return $this->conn->rawQuery("SELECT c.id AS idCroisiere,
                                             c.name AS nameCroisier,
                                             n.libelle AS nameNavire,
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
                                                C.id,
                                                C.numberOfNight,
                                                C.DateOfDeparture,
                                                C.TimeOfDeparture,
                                               `numberOfNight`,
                                                c.img,
                                                c.desc,
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
                                                    p.id = c.departmentPort
                                             ;");
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

    /**
     * @throws Exception
     */
    public function searchByPort($id)
    {
        return $this->conn->rawQuery("SELECT c.id AS idCroisiere,
                                             c.name AS nameCroisier,
                                              n.libelle AS nameNavire,
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
                                                C.id,
                                                C.numberOfNight,
                                                C.DateOfDeparture,
                                                C.TimeOfDeparture,
                                               `numberOfNight`,
                                                c.img,
                                                c.desc,
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
                                                    p.id = c.departmentPort
                                                AND c.departmentPort = ?;
                                             ", array($id));
    }

    /**
     * @throws Exception
     */
    public function searchByNavire($id)
    {
        return $this->conn->rawQuery("SELECT c.id AS idCroisiere,
                                             c.name AS nameCroisier,
                                             n.libelle AS nameNavire,
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
                                                C.id,
                                                C.numberOfNight,
                                                C.DateOfDeparture,
                                                C.TimeOfDeparture,
                                               `numberOfNight`,
                                                c.img,
                                                c.desc,
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
                                                    p.id = c.departmentPort
                                                AND c.navire = ?;
                                             ", array($id));
    }

    /**
     * @throws Exception
     */
    public function searchByMonth($month)
    {
        return $this->conn->rawQuery("SELECT c.id AS idCroisiere,
                                             c.name AS nameCroisier,
                                             n.libelle AS nameNavire,
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
                                                C.id,
                                                C.numberOfNight,
                                                C.DateOfDeparture,
                                                C.TimeOfDeparture,
                                               `numberOfNight`,
                                                c.img,
                                                c.desc,
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
                                                    p.id = c.departmentPort
                                             WHERE
                                                 CONCAT(year(c.DateOfDeparture),'-',month(c.DateOfDeparture )) LIKE ?;
                                             ", array('%' . $month . '%'));
    }

    /**
     * @throws Exception
     */
    public function searchAll($port, $navire, $month)
    {
        return $this->conn->rawQuery("SELECT c.id AS idCroisiere,
                                             c.name AS nameCroisier,
                                             n.libelle AS nameNavire,
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
                                                C.id,
                                                C.numberOfNight,
                                                C.DateOfDeparture,
                                                C.TimeOfDeparture,
                                               `numberOfNight`,
                                                c.img,
                                                c.desc,
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
                                                    p.id = c.departmentPort
                                                 AND c.departmentPort = ?
                                                 AND c.navire = ?
                                             WHERE
                                                 c.DateOfDeparture LIKE ?;
                                             ", array($port, $navire, '%' . $month . '%'));
    }

    /**
     * @throws Exception
     */
    public function getDetailCruise($id)
    {
        return $this->conn->rawQuery("SELECT c.id AS idCroisiere,
                                             c.name AS nameCroisier,
                                             n.libelle AS nameNavire,
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
                                                C.DateOfDeparture,
                                                C.TimeOfDeparture,
                                               `numberOfNight`,
                                                c.img,
                                                c.desc,
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
                                                    p.id = c.departmentPort
                                             where c.id = ?;
                                             ",[$id]);
    }

    /**
     * @throws Exception
     */
    public function getTotal()
    {
        return  $this->conn->getValue($this->table,'count(*)');
    }

}