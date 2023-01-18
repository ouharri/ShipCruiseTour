<?php

class Countries extends DB
{
    private $table = 'countries';
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllCountries()
    {
        return  $this->conn->get($this->table);
    }

    /**
     * @throws Exception
     */
    public function getRow($id)
    {
        $db = $this->conn->where('abv',$id);
        return $db->getOne($this->table);
    }

}