<?php
class Person{
   protected $nom;
   protected $prenom;
   protected $anneeNaiss;
   public function  __construct($n,$p,$a) 
   {
        $this->nom=$n;
        $this->prenom=$p;
        $this->anneeNaiss=$a;
   }
   public function Age()
   {
    $aujourdhui = date('Y');
    return $aujourdhui - $this->anneeNaiss;
   }
   public function __toString()
   {
    $str="";
    $str .="<p>Nom : ".$this->nom."</p>";
    $str .="<p>Prenom : ".$this->prenom."</p>";
    $str .="<p>Annee de Naissance : ".$this->anneeNaiss."</p>";
    $str .="<p>Age : ".$this->Age()." ans </p>";
    return $str;
   }
   public function __Afficher()
   {
    $str="";
    $str .="<p>Nom : ".$this->nom."</p>";
    $str .="<p>Prenom : ".$this->prenom."</p>";
    $str .="<p>Annee de Naissance :.=".$this->anneeNaiss."</p>";
    echo $str;
   }

}

class Stagiaire extends Person {
    private $filiere;
    private $note;
    public function __construct($n,$p,$a,$f,$note)
    {
        parent::__construct($n,$p,$a);
        $this->filiere=$f;
        $this->note=$note;
        
    }
    public function __toString()
    {
        $str="";
        $str .=parent::__toString();
        $str .="<p>Filiere"
    }
}
?>