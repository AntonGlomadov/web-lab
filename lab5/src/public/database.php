<?php

class Database{
    private mysqli $db;

    public function connect() {
        $this->db = new mysqli('db', 'root', 'password192', 'webapp');
    }

    public function createTable(){
        $sql = "CREATE TABLE IF NOT EXISTS adverts(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            titles VARCHAR(255) NOT NULL,
            name VARCHAR(255) NOT NULL,
            description VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL
        )";
        $this->db->query($sql);
    }

    //insert advertesment to database
    public function addAdvertismen($advertismen){
        $sql = "INSERT INTO adverts(titles, name, description, email) VALUES(
            '{$advertismen->getTitles()}',
            '{$advertismen->getName()}',
            '{$advertismen->getDescription()}',
            '{$advertismen->getEmail()}'
        )";
        $this->db->query($sql);
    }

    public function getAd(){
        $sql = "SELECT * FROM adverts";
        $result = $this->db->query($sql);
        return $result;
    }

    public function deleteAd($id){
        $sql = "DELETE FROM adverts WHERE id = $id";
        $this->db->query($sql);

    }
}