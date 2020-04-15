<?php

class Personnage {

const MAXLIFE = 100;
    
public $name;
public $pv;
public $atk;
protected $id;
private static $compteur;

public function getId(){
    return $this->id;
}

public function getName(){
    return $this->name;
}

public function getPv(){
    return $this->pv;
}

public function getAtk(){
    return $this->atk;
}

public function setId($id){
    $this->id = $id;
}

public function setName($x){
    $this->name=$x;
}

public function setPv($x){
    $this->pv=$x;
}

public function setAtk($x){
    $this->atk=$x;
}

private function hydrate(array $donnees){
    foreach($donnees as $key=>$value){
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method)){
            $this->$method($value);
        }
    }
}

public function __construct(array $donnees) {
    // $this->setName($name);
    // $this->setPv($pv);
    // $this->setAtk($atk);
    self::$compteur++;
    return $this->hydrate($donnees);
}

public static function getCompteur(){
    return self::$compteur;
}

public function is_alive(){
   return($this->pv>0);
}

public function regenerer($x){
    $this->pv += $x;
}

public function crier(){
    return $this->name . ' crie vous ne passerez pas !';
}

public function attaque(Personnage $x){
    $x->pv -= $this->atk;
}

function niveau() {
    return "<br>".$this->getName()." attaque de ".$this->getAtk()." et a actuellement ".$this->getPv()." PV";
 }

public function reinitPv(){
    $this->setPv(self::MAXLIFE);
    echo "<br/> Les PV ont été réinitialisés";
}


 
}




?>