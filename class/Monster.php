<?php 

    class Monster {

        private $name;
        private $vie;
        private $degats;

        public function __construct(array $data)
        {
            if(isset($data['name'])){
                $this->setNom($data['name']);
            }
            if (isset($data['vie'])){
                $this->setVie($data['vie']);
            }
            if(isset($data['degats'])){
                $this->setDegats($data['degats']);
            }
        }

        public function hit(Personnage $hero)
        {
            $damage = rand(10,25);
            $hero->setVie($hero->getVie() - $damage);
            return $damage;
        }

        public function getNom()
        {
            return $this->name; 
        }

        public function setNom($name)
        {
            $this->name = $name;
        }  

        public function getVie()
        {
            return $this->vie;
        }

        public function setVie($vie)
        {
            $this->vie = $vie;
        }

        public function getDegats()
        {
            return $this->degats;
        }

        public function setDegats($degats)
        {
            $this->degats = $degats;
        }


    }

?>