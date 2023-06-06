<?php
class RendezVous {
    private $id;
    private $date;
    private $time;
    private $patient_id;
    private $patient;

    public function __construct($id, $date, $time, $patient_id, $patient) {
        $this->id = $id;
        $this->date = $date;
        $this->time = $time;
        $this->patient_id = $patient_id;
        $this->patient = Patient::getById($patient_id);
    }

    public function getid(){
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getTime() {
        return $this->time;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function getPatienId() {
        return $this->patient_id;
    }

    public function setPatientId($patient_id) {
        $this->patient_id = $patient_id;
    }

    public function getPatient(){
        return $this->patient;
    }

    public function setPatient($patient) {
        $this->patient = $patient;
    }
    
    public function save() {
        $pdo = new PDO('mysql:host=localhost;dbname=hospital2n', "root", "root");
        $stmt = $pdo->prepare("INSERT INTO rendezvous (date, time, patient_id, patient) VALUES (:date, :time, :patient_id, :patient");
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':time', $this->time);
        $stmt->bindParam(':patient_id', $this->patient_id);
        $stmt->bindParam(':patient', $this->patient);
        $stmt->execute([$this->date, $this->time, $this->patient_id, $this->patient]);
        $this->id = $pdo->lastInsertId();
    }

    public function update() {
        $db = DataBase::getInstance();
        $stmt = $db->prepare("UPDATE rendezvous SET date = :date, time = :time, patient_id = :patient_id, patient = :patient, id = :id");
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':time', $this->time);
        $stmt->bindParam(':patient_id', $this->patient_id);
        $stmt->bindParam(':patient', $this->patient);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    public function delete(){
        $db = DataBase::getInstance();
        $stmt = $db->prepare("DELETE rendezvous Where id = :id");
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    public static function getAll(){
        $db = DataBase::getInstance();
        $stmt = $db->query("SELECT * FROM rendezvous");
        $stmt->setFetchMode(PDO::FETCH_CLASS, "RendezVous");
        return $stmt->fetchAll();
    }

    public static function getById($id){
        $db = DataBase::getInstance();
        $stmt = $db->prepare("SELECT * FROM rendez-vous WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'RendezVous');
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>