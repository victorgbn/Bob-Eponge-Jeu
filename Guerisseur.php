<?php 
class Guerisseur extends Personnage {

    // public function regenerer(Personnage $x, $y){
    // $perso->pv += $y;

    const MAXLIFE=200;

    public function regenerer(int $x = null){
        if(is_null($x)){
            $this->pv=parent::MAXLIFE;
        } else {
            $this->setPv($this->getPv()+$x);
        }
    }

}


?>