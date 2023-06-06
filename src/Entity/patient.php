<?php
// src/Entity/patient.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PatientRepository")
 */
class Patient {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    private $lastname;
    private $firstname;
    private $birthdate;
    private $phone;
    private $mail;
    private $db;

    public function __construct(/*$lastname, $firstname, $birthdate, $phone, $mail,*/ /*DataBase $db*/) {
        /*$this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
        $this->phone = $phone;
        $this->mail = $mail;*/
        //$this->db = $db;
        $this->id = null;
    }

    public function getId() {
        return $this->id;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function getBirthDate() {
        return $this->birthdate;
    }

    public function setBirthDate($birthdate) {
        $this->birthdate = $birthdate;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getmail(){
        return $this->mail;
    }

    public function setmail($mail) {
        $this->mail = $mail;
    }

    /*public function save() {
        $pdo = new PDO('mysql:host=localhost;dbname=hospital2n', "root", "root");
        $stmt = $pdo->prepare('INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$this->lastname, $this->firstname, $this->birthdate, $this->phone, $this->mail]);
        $this->id = $pdo->lastInsertId();
    }

    public function update($id, $lastname, $firstame, $birthDate, $phone, $mail) {
        $pdo = new PDO('mysql:host=localhost;dbname=hospital2n', "root", "root");
        $stmt = $pdo->prepare("UPDATE patients SET lastname = ?, firstname = ?, birthdate = ?, phone = ?, mail = ? WHERE id = ?");
        $stmt->execute([$lastname, $firstame, $birthDate, $phone, $mail, $id]);
    }

    public static function delete($id) {
        $pdo = new PDO('mysql:host=localhost;dbname=hospital2n', "root", "root");
        $stmt = $pdo->prepare("DELETE FROM patients WHERE id = ?");
        $stmt->execute([$id]);
    }

    public static function getById($id) {
        $db = DataBase::getInstance();
        $stmt = $db->prepare("SELECT * FROM patients WHERE id = ?");
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if(!$result) {
            return null;
        }

        $patient = new Patient($result['id'], $result['lastname'], $result['firstname'], $result['birthdate'], $result['phone'], $result['mail']);

        return $patient;
    }

    public static function getAll(){
        $db = DataBase::getInstance();
        $stmt = $db->query("SELECT * FROM patients");
        return $stmt->fetchAll();
    }*/
    
}
?>