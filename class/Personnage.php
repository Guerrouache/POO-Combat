<?php 

class Personnage {
    private $id;
    private $nom;
    private $classe;
    private $vie;
    private $degats;


    public function __construct(array $data){
        $this->nom = $data['nom'];
        $this->classe = $data['classe'];
        $this->vie = $data['vie'];
        $this->degats = $data['degats'];
    }




    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function getVie()
    {
        return $this->vie;
    }

    public function getDegats()
    {
        return $this->degats;
    }





    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0)
        {
            $this->id =$id;
        }
    }

    public function setNom($nom)
    {
        $this ->nom = $nom;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    public function setVie($vie)
    {
        $this->vie = $vie;
    }

    public function setDegats($degats)
    {
        $this->degats = $degats;
    }

    public function hit(Monster $monster)
    {
        $damage = rand (20,50);
        $monster->setVie($monster->getVie() - $damage);
        return $damage;
    }

    // public function hit2(Monster $monster)
    // {
    //     if ('Etoile_du_matin') {
    //         # code...
    //     }
    //     $damage = rand (20,50);
    //     $monster->setVie($monster->getVie() - $damage);
    //     return $damage;
    // }

    // public function hit3(Monster $monster)
    // {
    //     $damage = rand (20,50);
    //     $monster->setVie($monster->getVie() - $damage);
    //     return $damage;
    // }

    // public function hit4(Monster $monster)
    // {
    //     $damage = rand (20,50);
    //     $monster->setVie($monster->getVie() - $damage);
    //     return $damage;
    // }


    
}





?>