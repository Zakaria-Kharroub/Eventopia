<?php

abstract class Personne{
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom,$prenom,$age){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
    }



    abstract public function desin();
    abstract public function cree();
    abstract public function animer();

}



class Employer extends Personne{

 private $salaire;


    public function __construct($nom,$prenom,$age,$salaire){
        parent::__construct($nom,$prenom,$age);
        $this->salaire=$salaire;
    }

    public function desin()
    {

    }
    public function cree()
    {

    }

    public function animer()
    {

    }




}
