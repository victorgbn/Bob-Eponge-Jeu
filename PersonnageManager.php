<?php 

class PersonnageManager {
    private $db;

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb(PDO $db){
        $this->db = $db;
    }

    // return tous les persos
    public function getAllPersonnages(){
        $allperso = "SELECT * FROM Personnage";
        $tablePersonnages = $this->db->query($allperso);
        while($tabPersonnages = $tablePersonnages->fetch(PDO::FETCH_ASSOC)){
            $personnages[] = new Personnage($tabPersonnages);
        }
        return $personnages;
    }

    public function getOnePersonnageById($id){
        $requete ="SELECT * FROM Personnage WHERE id = ".$id;
        $selectPersonnage = $this->db->query($requete);
        $personnage = $selectPersonnage->fetch(PDO::FETCH_ASSOC);
        $perso = new Personnage($personnage);
        return $perso;
    }

    public function createPersonnage(Personnage $perso){
        $requete = "INSERT INTO Personnage VALUES (NULL, '".$perso->getName()."',". $perso -> getAtk().",".$perso -> getPv().");";
        $stmt = $this->db->query($requete);
    }

    public function updatePersonnage(Personnage $perso){
        $requeteUpdate = $this->db->prepare("UPDATE Personnage SET pv =:pv, atk=:atk WHERE id=:id");
        $requeteUpdate->bindValue(':pv', $perso->getPv());
        $requeteUpdate->bindValue(':atk', $perso->getAtk());
        $requeteUpdate->bindValue(':id', $perso->getId());
        $requeteUpdate->execute();
    }

    public function deletePersonnage($id){
        $requeteDelete = "DELETE FROM Personnage WHERE id = ".$id;
        $result = $this->db->prepare($requeteDelete);
        $result->execute();
    }

}

?> 