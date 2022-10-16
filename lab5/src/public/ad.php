<?php
class Advertismen{
    private $titles;
    private $name;
    private $description;
    private $email;
    
    public function getTitles(){
        return $this->titles;
    }
    public function setTitles($titles){
        $this->titles = $titles;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function showData(){
        echo "Titles: " . $this->getTitles() . "<br>";
        echo "Name: " . $this->getName() . "<br>";
        echo "Description: " . $this->getDescription() . "<br>";
        echo "Email: " . $this->getEmail() . "<br>";
    }
}
?>