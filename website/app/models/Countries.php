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

}