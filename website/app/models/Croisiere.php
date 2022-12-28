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
        return $this->conn->get($this->table);
    }

    /**
     * @throws Exception
     */
//$a = ' SELECT
//                                *, PO.nameP as nameP_d , PP.nameP as nameP_a
//                            FROM
//                                port PO ,
//                                port PP ,
//                                croisiere co ,
//                                narive na ,
//                                chambre ch ,
//                                reservation re
//                            where
//                                re.id_cr= co.id_cr
//                            and
//                                re.id_ch=ch.id_ch
//                            and
//                                co.port_dep=PO.id_p
//                            and
//                                co.port_dar=PP.id_p
//                            and
//                                co.id_nav=na.id_n
//                            and
//                                id_user = :id
//
//';
    public function getAllCroisiereJ()
    {
        return $this->conn->rawQuery("SELECT
                                                c.id AS idCroisiere,
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
                                                   c.img,
                                                   `numberOfNight`,
                                                   p.name AS 'port_dep',
                                                   p.countrie,
                                                   `departmentPort`
                                                   FROM
                                                      `croisiére` c
                                                   INNER JOIN navire n ON
                                                       c.navire = n.id
                                                   INNER JOIN PORT p ON
                                                      p.id = c.departmentPort;");
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